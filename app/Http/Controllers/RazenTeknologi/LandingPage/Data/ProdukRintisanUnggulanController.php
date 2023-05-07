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
use App\Models\LayananStartupProdukRintisanUnggulan;

class ProdukRintisanUnggulanController extends Controller
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
            $data = LayananStartupProdukRintisanUnggulan::latest()->get();
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
                    return '<img src="'.asset('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$data->gambar).'" style="height:5rem;">';
                })
                ->editColumn('gambar_2', function($data) {
                    return '<img src="'.asset('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$data->gambar_2).'" style="height:5rem;">';
                })
                ->editColumn('gambar_3', function($data) {
                    return '<img src="'.asset('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$data->gambar_3).'" style="height:5rem;">';
                })
                ->editColumn('deskripsi', function($data) {
                    return strip_tags(substr($data->deskripsi,0, 20)) . '...';
                })
                ->rawColumns(['aksi', 'gambar', 'gambar_2', 'gambar_3'])
                ->make(true);
        }
        return view('razen-teknologi.landing-page.layanan-startup.data.produk-rintisan-unggulan.index');
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
            'gambar' => 'required',
            'gambar_2' => 'required',
            'gambar_3' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $gambarExtension = $request->gambar->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->gambar);
        $gambarSize = public_path('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$gambarName);
        $gambar->save($gambarSize, 60);

        $gambar2Extension = $request->gambar_2->extension();
        $gambar2Name =  uniqid().'-'.date("ymd").'.'.$gambar2Extension;
        $gambar2 = Image::make($request->gambar_2);
        $gambar2Size = public_path('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$gambar2Name);
        $gambar2->save($gambar2Size, 60);

        $gambar3Extension = $request->gambar_3->extension();
        $gambar3Name =  uniqid().'-'.date("ymd").'.'.$gambar3Extension;
        $gambar3 = Image::make($request->gambar_3);
        $gambar3Size = public_path('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$gambar3Name);
        $gambar3->save($gambar3Size, 60);

        $produk_rintisan_unggulan = new LayananStartupProdukRintisanUnggulan;
        $produk_rintisan_unggulan->judul = $request->judul;
        $produk_rintisan_unggulan->deskripsi = $request->deskripsi;
        $produk_rintisan_unggulan->gambar = $gambarName;
        $produk_rintisan_unggulan->gambar_2 = $gambar2Name;
        $produk_rintisan_unggulan->gambar_3 = $gambar3Name;
        $produk_rintisan_unggulan->save();

        return response()->json(['success' => 'Berhasil menambahkan Produk Rintisan Unggulan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['result' => LayananStartupProdukRintisanUnggulan::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => LayananStartupProdukRintisanUnggulan::find($id)]);
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
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $produk_rintisan_unggulan = LayananStartupProdukRintisanUnggulan::find($request->hidden_id);
        $produk_rintisan_unggulan->judul = $request->judul;
        $produk_rintisan_unggulan->deskripsi = $request->deskripsi;
        if($request->gambar)
        {
            File::delete(public_path('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$produk_rintisan_unggulan->gambar));

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $produk_rintisan_unggulan->gambar = $gambarName;
        }
        if($request->gambar_2)
        {
            File::delete(public_path('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$produk_rintisan_unggulan->gambar_2));

            $gambar2Extension = $request->gambar_2->extension();
            $gambar2Name =  uniqid().'-'.date("ymd").'.'.$gambar2Extension;
            $gambar2 = Image::make($request->gambar_2);
            $gambar2Size = public_path('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$gambar2Name);
            $gambar2->save($gambar2Size, 60);

            $produk_rintisan_unggulan->gambar_2 = $gambar2Name;
        }

        if($request->gambar_3)
        {
            File::delete(public_path('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$produk_rintisan_unggulan->gambar_3));

            $gambar3Extension = $request->gambar_3->extension();
            $gambar3Name =  uniqid().'-'.date("ymd").'.'.$gambar3Extension;
            $gambar3 = Image::make($request->gambar_3);
            $gambar3Size = public_path('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$gambar3Name);
            $gambar3->save($gambar3Size, 60);

            $produk_rintisan_unggulan->gambar_3 = $gambar3Name;
        }

        $produk_rintisan_unggulan->save();

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
        $produk_rintisan_unggulan = LayananStartupProdukRintisanUnggulan::find($id);

        File::delete(public_path('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$produk_rintisan_unggulan->gambar));

        File::delete(public_path('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$produk_rintisan_unggulan->gambar_2));

        File::delete(public_path('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$produk_rintisan_unggulan->gambar_3));

        $produk_rintisan_unggulan->delete();
    }
}
