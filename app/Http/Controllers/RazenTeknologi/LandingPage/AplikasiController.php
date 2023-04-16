<?php

namespace App\Http\Controllers\RazenTeknologi\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\LandingPageAplikasi;

class AplikasiController extends Controller
{
    public function index()
    {
        return view('razen-teknologi.landing-page.aplikasi.index');
    }

    public function store_section_1(Request $request)
    {
        $cek = LandingPageAplikasi::first();
        if($cek)
        {
            $aplikasi = LandingPageAplikasi::find($cek->id);
            if($aplikasi->section_1)
            {
                $get_section_1 = json_decode($aplikasi->section_1, true);

                if ($request->gambar) {
                    $gambarName = $get_section_1['gambar'];
                    File::delete(public_path('images/landing-page/aplikasi/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landing-page/aplikasi/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_1['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landing-page/aplikasi/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $aplikasi = new LandingPageAplikasi;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/aplikasi/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'gambar' => $gambarName
        ];

        $aplikasi->section_1 = json_encode($array);
        $aplikasi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-teknologi.landing-page.aplikasi.index');
    }
}
