<?php

namespace App\Http\Controllers\RazenTeknologi\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use DataTables;
use Carbon\Carbon;
use Auth;
use App\Models\Timeline;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $data = Timeline::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<button type="button" name="detail" id="'.$data->id.'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></button>';
                    $button_edit = '<button type="button" name="edit" id="'.$data->id.'"
                    class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></button>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('gambar', function($data) {
                    return '<img src="'.asset('images/razen-teknologi/timeline/'.$data->gambar).'" style="height:5rem;">';
                })
                ->editColumn('deskripsi', function($data) {
                    return strip_tags(substr($data->deskripsi,0, 30)) . '...';
                })
                ->rawColumns(['aksi', 'gambar'])
                ->make(true);
        }
        return view('razen-teknologi.admin.timeline.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required | max:255',
            'gambar' => 'required | mimes:png,jpg,jpeg,webp',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $gambarExtension = $request->gambar->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->gambar);
        $gambarSize = public_path('images/razen-teknologi/timeline/'.$gambarName);
        $gambar->save($gambarSize, 60);

        $timeline = new Timeline;
        $timeline->judul = $request->judul;
        $timeline->deskripsi = $request->deskripsi;
        $timeline->gambar = $gambarName;
        $timeline->save();

        return response()->json(['success' => 'Berhasil menambahkan Timeline']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['result' => Timeline::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => Timeline::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required | max:255',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $timeline = new Timeline;
        $timeline->judul = $request->judul;
        $timeline->deskripsi = $request->deskripsi;
        if($request->gambar)
        {
            File::delete(public_path('images/razen-teknologi/timeline/'.$timeline->gambar));

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/razen-teknologi/timeline/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $timeline->gambar = $gambarName;
        }
        $timeline->save();

        return response()->json(['success' => 'Berhasil menambahkan Timeline']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timeline = Timeline::find($id);

        File::delete(public_path('images/razen-teknologi/timeline/'.$timeline->gambar));

        $timeline->delete();
    }
}
