<?php

namespace App\Http\Controllers\RazenTeknologi\LandingPage\Data;

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
use App\Models\LayananPemerintahanDataDinas;

class DinasController extends Controller
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
            $data = LayananPemerintahanDataDinas::latest()->get();
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
                ->editColumn('foto', function($data) {
                    return '<img src="'.asset('images/landing-page/layanan/pemerintahan/data/dinas/'.$data->foto).'" style="height:5rem;">';
                })
                ->rawColumns(['aksi', 'foto'])
                ->make(true);
        }
        return view('razen-teknologi.landing-page.layanan-pemerintahan.data.dinas.index');
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
            'nama' => 'required | max:255',
            'foto' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $fotoExtension = $request->foto->extension();
        $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
        $foto = Image::make($request->foto);
        $fotoSize = public_path('images/landing-page/layanan/pemerintahan/data/dinas/'.$fotoName);
        $foto->save($fotoSize, 60);

        $dinas = new LayananPemerintahanDataDinas;
        $dinas->nama = $request->nama;
        $dinas->foto = $fotoName;
        $dinas->save();

        return response()->json(['success' => 'Berhasil menambahkan Dinas']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['result' => LayananPemerintahanDataDinas::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => LayananPemerintahanDataDinas::find($id)]);
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
            'nama' => 'required | max:255'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $dinas = LayananPemerintahanDataDinas::find($request->hidden_id);
        $dinas->nama = $request->nama;
        if($request->foto)
        {
            File::delete(public_path('images/landing-page/layanan/pemerintahan/data/dinas/'.$dinas->foto));

            $fotoExtension = $request->foto->extension();
            $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
            $foto = Image::make($request->foto);
            $fotoSize = public_path('images/landing-page/layanan/pemerintahan/data/dinas/'.$fotoName);
            $foto->save($fotoSize, 60);

            $dinas->foto = $fotoName;
        }
        $dinas->save();

        return response()->json(['success' => 'Berhasil menambahkan Dinas']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dinas = LayananPemerintahanDataDinas::find($id);

        File::delete(public_path('images/landing-page/layanan/pemerintahan/data/dinas/'.$dinas->foto));

        $dinas->delete();
    }
}
