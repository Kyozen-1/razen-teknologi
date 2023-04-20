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
use App\Models\FiturLayanan;
use App\Models\PivotItemFiturLayanan;

class FiturLayananController extends Controller
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
            $data = FiturLayanan::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<a href="'.route('razen-teknologi.admin.fitur-layanan.show', ['id' => $data->id]).'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></a>';
                    $button_edit = '<a href="'.route('razen-teknologi.admin.fitur-layanan.edit', ['id' => $data->id]).'" class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></a>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->addColumn('fitur_layanan', function($data){
                    $pivots = $data->pivot_item_fitur_layanan;
                    $list = '<ul>';
                    foreach ($pivots as $pivot) {
                        $list .='<li>'.$pivot->judul.'<br> '.$pivot->deskripsi.'</li>';
                    }
                    $list .='</ul>';
                    return $list;
                })
                ->editColumn('layanan_id', function($data){
                    return $data->layanan->judul_kecil;
                })
                ->rawColumns(['aksi', 'layanan_id', 'fitur_layanan'])
                ->make(true);
        }
        return view('razen-teknologi.admin.fitur-layanan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $layanan = Layanan::pluck('judul_kecil', 'id');
        return view('razen-teknologi.admin.fitur-layanan.create', [
            'layanan' => $layanan,
        ]);
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
            'layanan_id' => 'required',
            'judul' => 'required | max:255',
            'data_fitur_layanan' => 'required'
        ]);

        if($errors -> fails())
        {
            return back()->withErrors($errors)->withInput();
        }

        $fitur_layanan = new FiturLayanan;
        $fitur_layanan->layanan_id = $request->layanan_id;
        $fitur_layanan->judul = $request->judul;
        $fitur_layanan->save();

        $data_fitur_layanan = $request->data_fitur_layanan;
        for ($i=0; $i < count($data_fitur_layanan); $i++) {
            $pivot = new PivotItemFiturLayanan;
            $pivot->fitur_layanan_id = $fitur_layanan->id;
            $pivot->judul = $data_fitur_layanan[$i]['judul'];
            $pivot->deskripsi = $data_fitur_layanan[$i]['deskripsi'];
            $pivot->save();
        }

        Alert::success('Berhasil', 'Berhasil menambahkan data');
        return redirect()->route('razen-teknologi.admin.fitur-layanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fitur_layanan = FiturLayanan::find($id);

        $get_pivot = PivotItemFiturLayanan::where('fitur_layanan_id', $id)->first();
        $pivot = [];
        if($get_pivot)
        {
            $pivot = [
                'status' => 'ada',
                'data' => PivotItemFiturLayanan::where('fitur_layanan_id', $id)->get()
            ];
        } else {
            $pivot = [
                'status' => 'tidak_ada',
                'data' => ''
            ];
        }

        return view('razen-teknologi.admin.fitur-layanan.detail', [
            'fitur_layanan' => $fitur_layanan,
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
        $fitur_layanan = FiturLayanan::find($id);

        $get_pivot = PivotItemFiturLayanan::where('fitur_layanan_id', $id)->first();
        $pivot = [];
        if($get_pivot)
        {
            $pivot = [
                'status' => 'ada',
                'data' => PivotItemFiturLayanan::where('fitur_layanan_id', $id)->get()
            ];
        } else {
            $pivot = [
                'status' => 'tidak_ada',
                'data' => ''
            ];
        }

        $layanan = Layanan::pluck('judul_kecil', 'id');
        return view('razen-teknologi.admin.fitur-layanan.edit', [
            'fitur_layanan' => $fitur_layanan,
            'pivot' => $pivot,
            'layanan' => $layanan
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
        $fitur_layanan = FiturLayanan::find($id);
        $fitur_layanan->layanan_id = $request->layanan_id;
        $fitur_layanan->judul = $request->judul;
        $fitur_layanan->save();

        if($request->edit_data_item_fitur_layanan)
        {
            $edit_data_item_fitur_layanan = array_values($request->edit_data_item_fitur_layanan);
            for ($i=0; $i < count($edit_data_item_fitur_layanan); $i++) {
                $pivot = PivotItemFiturLayanan::find($edit_data_item_fitur_layanan[$i]['pivot_item_fitur_layanan_id']);
                $pivot->judul = $edit_data_item_fitur_layanan[$i]['judul'];
                $pivot->deskripsi = $edit_data_item_fitur_layanan[$i]['deskripsi'];
                $pivot->save();
            }
        }

        if($request->hapus_id_pivot)
        {
            $hapus_id_pivot = explode(',', $request->hapus_id_pivot);
            for ($i=0; $i < count($hapus_id_pivot); $i++) {
                PivotItemFiturLayanan::find($hapus_id_pivot[$i])->delete();
            }
        }

        if($request->data_item_fitur_layanan)
        {
            $data_item_fitur_layanan = $request->data_item_fitur_layanan;
            for ($i=0; $i < count($data_item_fitur_layanan); $i++) {
                $pivot = new PivotItemFiturLayanan;
                $pivot->fitur_layanan_id = $id;
                $pivot->judul = $data_item_fitur_layanan[$i]['judul'];
                $pivot->deskripsi = $data_item_fitur_layanan[$i]['deskripsi'];
                $pivot->save();
            }
        }

        Alert::success('Berhasil', 'Berhasil merubah data');
        return redirect()->route('razen-teknologi.admin.fitur-layanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fitur_layanan = FiturLayanan::find($id);

        $pivots = PivotItemFiturLayanan::where('fitur_layanan_id', $id)->get();
        foreach ($pivots as $pivot) {
            PivotItemFiturLayanan::where('fitur_layanan_id', $pivot->id)->delete();
        }
        $fitur_layanan->delete();
    }
}
