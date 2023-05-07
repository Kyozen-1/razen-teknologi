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
use App\Models\LayananSwastaProdukLengkap;

class ProdukLengkapController extends Controller
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
            $data = LayananSwastaProdukLengkap::latest()->get();
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
                ->editColumn('logo', function($data) {
                    return '<img src="'.asset('images/landing-page/layanan/swasta/data/produk-lengkap/'.$data->logo).'" style="height:5rem;">';
                })
                ->editColumn('gambar', function($data) {
                    return '<img src="'.asset('images/landing-page/layanan/swasta/data/produk-lengkap/'.$data->gambar).'" style="height:5rem;">';
                })
                ->editColumn('deskripsi', function($data) {
                    return strip_tags(substr($data->deskripsi,0, 20)) . '...';
                })
                ->editColumn('link', function($data){
                    return '<a href="'.$data->link.'" class="btn btn-primary btn-icon waves-effect waves-light" target="blank">Link</a>';
                })
                ->rawColumns(['aksi', 'logo', 'gambar', 'deskripsi', 'link'])
                ->make(true);
        }
        return view('razen-teknologi.landing-page.layanan-swasta.data.produk-lengkap.index');
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
            'logo' => 'required',
            'gambar' => 'required'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $logoExtension = $request->logo->extension();
        $logoName =  uniqid().'-'.date("ymd").'.'.$logoExtension;
        $logo = Image::make($request->logo);
        $logoSize = public_path('images/landing-page/layanan/swasta/data/produk-lengkap/'.$logoName);
        $logo->save($logoSize, 60);

        $gambarExtension = $request->gambar->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->gambar);
        $gambarSize = public_path('images/landing-page/layanan/swasta/data/produk-lengkap/'.$gambarName);
        $gambar->save($gambarSize, 60);

        $produk_lengkap = new LayananSwastaProdukLengkap;
        $produk_lengkap->judul = $request->judul;
        $produk_lengkap->deskripsi = $request->deskripsi;
        $produk_lengkap->link = $request->link;
        $produk_lengkap->logo = $logoName;
        $produk_lengkap->gambar = $gambarName;
        $produk_lengkap->save();

        return response()->json(['success' => 'Berhasil menambahkan Produk Lengkap']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['result' => LayananSwastaProdukLengkap::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => LayananSwastaProdukLengkap::find($id)]);
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

        $produk_lengkap = LayananSwastaProdukLengkap::find($request->hidden_id);
        $produk_lengkap->judul = $request->judul;
        $produk_lengkap->deskripsi = $request->deskripsi;
        $produk_lengkap->link = $request->link;

        if($request->logo)
        {
            File::delete(public_path('images/landing-page/layanan/swasta/data/produk-lengkap/'.$produk_lengkap->logo));

            $logoExtension = $request->logo->extension();
            $logoName =  uniqid().'-'.date("ymd").'.'.$logoExtension;
            $logo = Image::make($request->logo);
            $logoSize = public_path('images/landing-page/layanan/swasta/data/produk-lengkap/'.$logoName);
            $logo->save($logoSize, 60);

            $produk_lengkap->logo = $logoName;
        }

        if($request->gambar)
        {
            File::delete(public_path('images/landing-page/layanan/swasta/data/produk-lengkap/'.$produk_lengkap->gambar));

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/layanan/swasta/data/produk-lengkap/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $produk_lengkap->gambar = $gambarName;
        }

        $produk_lengkap->save();

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
        $produk_lengkap = LayananSwastaProdukLengkap::find($id);

        File::delete(public_path('images/landing-page/layanan/swasta/data/produk-lengkap/'.$produk_lengkap->logo));

        File::delete(public_path('images/landing-page/layanan/swasta/data/produk-lengkap/'.$produk_lengkap->gambar));

        $produk_lengkap->delete();
    }
}
