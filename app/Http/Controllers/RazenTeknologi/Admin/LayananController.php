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
use App\Models\Layanan;
use App\Models\PivotDaftarLayanan;

class LayananController extends Controller
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
            $data = Layanan::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<a href="'.route('razen-teknologi.admin.layanan.show', ['id' => $data->id]).'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></a>';
                    $button_edit = '<a href="'.route('razen-teknologi.admin.layanan.edit', ['id' => $data->id]).'" class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></a>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->addColumn('daftar_layanan', function($data){
                    $pivots = PivotDaftarLayanan::where('layanan_id', $data->id)->get();
                    $list = '<ul>';
                    foreach ($pivots as $pivot) {
                        $list .='<li>'.$pivot->judul.'</li>';
                    }
                    $list .='</ul>';
                    return $list;
                })
                ->editColumn('ikon', function($data){
                    return '<img src="'.asset('images/razen-teknologi/layanan/'.$data->ikon).'" style="height:5rem;">';
                })
                ->editColumn('gambar', function($data){
                    return '<img src="'.asset('images/razen-teknologi/layanan/'.$data->gambar).'" style="height:5rem;">';
                })
                ->rawColumns(['aksi', 'ikon', 'daftar_layanan', 'gambar'])
                ->make(true);
        }
        return view('razen-teknologi.admin.layanan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('razen-teknologi.admin.layanan.create');
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
            'judul_kecil' => 'required | max:255',
            'judul' => 'required | max:255',
            'deskripsi' => 'required',
            'ikon' => 'required | mimes:png,jpg,jpeg,webp',
            'gambar' => 'required | mimes:png,jpg,jpeg,webp',
            'data_daftar_layanan' => 'required'
        ]);

        if($errors -> fails())
        {
            return back()->withErrors($errors)->withInput();
        }

        $ikonExtension = $request->ikon->extension();
        $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
        $ikon = Image::make($request->ikon);
        $ikonSize = public_path('images/razen-teknologi/layanan/'.$ikonName);
        $ikon->save($ikonSize, 60);

        $gambarExtension = $request->gambar->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->gambar);
        $gambarSize = public_path('images/razen-teknologi/layanan/'.$gambarName);
        $gambar->save($gambarSize, 60);

        $layanan = new Layanan;
        $layanan->judul_kecil = $request->judul_kecil;
        $layanan->judul = $request->judul;
        $layanan->deskripsi = $request->deskripsi;
        $layanan->ikon = $ikonName;
        $layanan->gambar = $gambarName;
        $layanan->save();

        $data_daftar_layanan = $request->data_daftar_layanan;
        for ($i=0; $i < count($data_daftar_layanan); $i++) {
            $pivot = new PivotDaftarLayanan;
            $pivot->layanan_id = $layanan->id;
            $pivot->judul = $data_daftar_layanan[$i]['judul'];
            $pivot->save();
        }

        Alert::success('Berhasil', 'Berhasil menambahkan data');
        return redirect()->route('razen-teknologi.admin.layanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $layanan = Layanan::find($id);

        $get_pivot = PivotDaftarLayanan::where('layanan_id', $id)->first();
        $pivot = [];
        if($get_pivot)
        {
            $pivot = [
                'status' => 'ada',
                'data' => PivotDaftarLayanan::where('layanan_id', $id)->get()
            ];
        } else {
            $pivot = [
                'status' => 'tidak_ada',
                'data' => ''
            ];
        }

        return view('razen-teknologi.admin.layanan.detail', [
            'layanan' => $layanan,
            'pivot' => $pivot
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $layanan = Layanan::find($id);

        $get_pivot = PivotDaftarLayanan::where('layanan_id', $id)->first();
        $pivot = [];
        if($get_pivot)
        {
            $pivot = [
                'status' => 'ada',
                'data' => PivotDaftarLayanan::where('layanan_id', $id)->get()
            ];
        } else {
            $pivot = [
                'status' => 'tidak_ada',
                'data' => ''
            ];
        }

        return view('razen-teknologi.admin.layanan.edit', [
            'layanan' => $layanan,
            'pivot' => $pivot
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $layanan = Layanan::find($id);
        $layanan->judul_kecil = $request->judul_kecil;
        $layanan->judul = $request->judul;
        $layanan->deskripsi = $request->deskripsi;
        if($request->ikon)
        {
            $ikon = $layanan->ikon;
            File::delete(public_path('images/razen-teknologi/layanan/'.$ikon));

            $ikonExtension = $request->ikon->extension();
            $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
            $ikon = Image::make($request->ikon);
            $ikonSize = public_path('images/razen-teknologi/layanan/'.$ikonName);
            $ikon->save($ikonSize, 60);

            $layanan->ikon = $ikonName;
        }

        if($request->gambar)
        {
            $gambar = $layanan->gambar;
            File::delete(public_path('images/razen-teknologi/layanan/'.$gambar));

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/razen-teknologi/layanan/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $layanan->gambar = $gambarName;
        }

        $layanan->save();

        if($request->edit_data_daftar_layanan)
        {
            $edit_data_daftar_layanan = array_values($request->edit_data_daftar_layanan);
            for ($i=0; $i < count($edit_data_daftar_layanan); $i++) {
                $pivot = PivotDaftarLayanan::find($edit_data_daftar_layanan[$i]['pivot_daftar_layanan_id']);
                $pivot->judul = $edit_data_daftar_layanan[$i]['judul'];
                $pivot->save();
            }
        }

        if($request->hapus_id_pivot)
        {
            $hapus_id_pivot = explode(',', $request->hapus_id_pivot);
            for ($i=0; $i < count($hapus_id_pivot); $i++) {
                PivotDaftarLayanan::find($hapus_id_pivot[$i])->delete();
            }
        }

        if($request->data_daftar_layanan)
        {
            $data_daftar_layanan = $request->data_daftar_layanan;
            for ($i=0; $i < count($data_daftar_layanan); $i++) {
                $pivot = new PivotDaftarLayanan;
                $pivot->layanan_id = $id;
                $pivot->judul = $data_daftar_layanan[$i]['judul'];
                $pivot->save();
            }
        }

        Alert::success('Berhasil', 'Berhasil merubah data');
        return redirect()->route('razen-teknologi.admin.layanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layanan = Layanan::find($id);

        $ikon = $layanan->ikon;
        File::delete(public_path('images/razen-teknologi/layanan/'.$ikon));

        $gambar = $layanan->gambar;
        File::delete(public_path('images/razen-teknologi/layanan/'.$gambar));

        $pivots = PivotDaftarLayanan::where('layanan_id', $id)->get();
        foreach ($pivots as $pivot) {
            PivotDaftarLayanan::where('layanan_id', $pivot->id)->delete();
        }
        $layanan->delete();
    }
}
