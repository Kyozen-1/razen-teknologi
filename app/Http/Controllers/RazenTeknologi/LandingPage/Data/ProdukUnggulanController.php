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
use App\Models\LayananPemerintahanProdukUnggulan;

class ProdukUnggulanController extends Controller
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
            $data = LayananPemerintahanProdukUnggulan::latest()->get();
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
                    return '<img src="'.asset('images/landing-page/layanan/pemerintahan/data/produk-unggulan/'.$data->gambar).'" style="height:5rem;">';
                })
                ->editColumn('link', function($data){
                    return '<a href="'.$data->link.'" class="btn btn-primary btn-icon waves-effect waves-light" target="blank">Link</a>';
                })
                ->rawColumns(['aksi', 'gambar', 'link'])
                ->make(true);
        }
        return view('razen-teknologi.landing-page.layanan-pemerintahan.data.produk-unggulan.index');
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
            'link' => 'required',
            'gambar' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $gambarExtension = $request->gambar->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->gambar);
        $gambarSize = public_path('images/landing-page/layanan/pemerintahan/data/produk-unggulan/'.$gambarName);
        $gambar->save($gambarSize, 60);

        $produk_unggulan = new LayananPemerintahanProdukUnggulan;
        $produk_unggulan->judul = $request->judul;
        $produk_unggulan->deskripsi = $request->deskripsi;
        $produk_unggulan->link = $request->link;
        $produk_unggulan->gambar = $gambarName;
        $produk_unggulan->save();

        return response()->json(['success' => 'Berhasil menambahkan Produk Unggulan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['result' => LayananPemerintahanProdukUnggulan::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => LayananPemerintahanProdukUnggulan::find($id)]);
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
            'deskripsi' => 'required',
            'link' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $produk_unggulan = LayananPemerintahanProdukUnggulan::find($request->hidden_id);
        $produk_unggulan->judul = $request->judul;
        $produk_unggulan->deskripsi = $request->deskripsi;
        $produk_unggulan->link = $request->link;
        if($request->gambar)
        {
            File::delete(public_path('images/landing-page/layanan/pemerintahan/data/produk-unggulan/'.$produk_unggulan->gambar));

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/layanan/pemerintahan/data/produk-unggulan/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $produk_unggulan->gambar = $gambarName;
        }
        $produk_unggulan->save();

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
        $produk_unggulan = LayananPemerintahanProdukUnggulan::find($id);

        File::delete(public_path('images/landing-page/layanan/pemerintahan/data/produk-unggulan/'.$produk_unggulan->foto));

        $produk_unggulan->delete();
    }
}
