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
use App\Models\LayananPerusahaan;

class LayananPerusahaanController extends Controller
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
            $data = LayananPerusahaan::latest()->get();
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
                ->editColumn('gambar_default', function($data) {
                    return '<img src="'.asset('images/razen-teknologi/layanan-perusahaan/'.$data->gambar_default).'" style="height:5rem;">';
                })
                ->editColumn('gambar_hover', function($data) {
                    return '<img src="'.asset('images/razen-teknologi/layanan-perusahaan/'.$data->gambar_hover).'" style="height:5rem;">';
                })
                ->editColumn('deskripsi', function($data) {
                    return strip_tags(substr($data->deskripsi,0, 20)) . '...';
                })
                ->rawColumns(['aksi', 'gambar_default', 'gambar_hover'])
                ->make(true);
        }
        return view('razen-teknologi.admin.layanan-perusahaan.index');
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
            'deskripsi' => 'required',
            'gambar_default' => 'required | mimes:png,jpg,jpeg,webp',
            'gambar_hover' => 'required | mimes:png,jpg,jpeg,webp',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $gambarDefaultExtension = $request->gambar_default->extension();
        $gambarDefaultName =  uniqid().'-'.date("ymd").'.'.$gambarDefaultExtension;
        $gambarDefault = Image::make($request->gambar_default);
        $gambarDefaultSize = public_path('images/razen-teknologi/layanan-perusahaan/'.$gambarDefaultName);
        $gambarDefault->save($gambarDefaultSize, 60);

        $gambarHoverExtension = $request->gambar_hover->extension();
        $gambarHoverName =  uniqid().'-'.date("ymd").'.'.$gambarHoverExtension;
        $gambarHover = Image::make($request->gambar_hover);
        $gambarHoverSize = public_path('images/razen-teknologi/layanan-perusahaan/'.$gambarHoverName);
        $gambarHover->save($gambarHoverSize, 60);

        $layanan_perusahaan = new LayananPerusahaan;
        $layanan_perusahaan->judul = $request->judul;
        $layanan_perusahaan->deskripsi = $request->deskripsi;
        $layanan_perusahaan->gambar_default = $gambarDefaultName;
        $layanan_perusahaan->gambar_hover = $gambarHoverName;
        $layanan_perusahaan->save();

        return response()->json(['success' => 'Berhasil menambahkan Layanan Perusahaan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['result' => LayananPerusahaan::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => LayananPerusahaan::find($id)]);
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

        $layanan_perusahaan = LayananPerusahaan::find($request->hidden_id);
        $layanan_perusahaan->judul = $request->judul;
        $layanan_perusahaan->deskripsi = $request->deskripsi;
        if($request->gambar_default)
        {
            File::delete(public_path('images/razen-teknologi/layanan-perusahaan/'.$layanan_perusahaan->gambar_default));

            $gambarDefaultExtension = $request->gambar_default->extension();
            $gambarDefaultName =  uniqid().'-'.date("ymd").'.'.$gambarDefaultExtension;
            $gambarDefault = Image::make($request->gambar_default);
            $gambarDefaultSize = public_path('images/razen-teknologi/layanan-perusahaan/'.$gambarDefaultName);
            $gambarDefault->save($gambarDefaultSize, 60);

            $layanan_perusahaan->gambar_default = $gambarDefaultName;
        }

        if($request->gambar_hover)
        {
            File::delete(public_path('images/razen-teknologi/layanan-perusahaan/'.$layanan_perusahaan->gambar_hover));

            $gambarHoverExtension = $request->gambar_hover->extension();
            $gambarHoverName =  uniqid().'-'.date("ymd").'.'.$gambarHoverExtension;
            $gambarHover = Image::make($request->gambar_hover);
            $gambarHoverSize = public_path('images/razen-teknologi/layanan-perusahaan/'.$gambarHoverName);
            $gambarHover->save($gambarHoverSize, 60);

            $layanan_perusahaan->gambar_hover = $gambarHoverName;
        }

        $layanan_perusahaan->save();

        return response()->json(['success' => 'Berhasil menambahkan Layanan Perusahaan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layanan_perusahaan = LayananPerusahaan::find($id);

        File::delete(public_path('images/razen-teknologi/layanan-perusahaan/'.$layanan_perusahaan->gambar_default));

        File::delete(public_path('images/razen-teknologi/layanan-perusahaan/'.$layanan_perusahaan->gambar_hover));

        $layanan_perusahaan->delete();
    }
}
