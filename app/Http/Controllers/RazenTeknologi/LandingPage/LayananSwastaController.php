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
use App\Models\LandingPageLayananSwasta;

class LayananSwastaController extends Controller
{
    public function index()
    {
        return view('razen-teknologi.landing-page.layanan-swasta.index');
    }

    public function store_section_1(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.beranda.index');
        }

        $cek = LandingPageLayananSwasta::first();
        if($cek)
        {
            $layanan_swasta = LandingPageLayananSwasta::find($cek->id);
            if($layanan_swasta->section_1)
            {
                $get_section_1 = json_decode($layanan_swasta->section_1, true);

                if ($request->video) {
                    $videoName = $get_section_1['video'];
                    File::delete(public_path('video/swasta/'.$videoName));

                    $videoExtension = $request->video->extension();
                    $videoName = uniqid().'-'.date("ymd").'.'.$videoExtension;
                    $request->video->move(public_path('video/swasta'), $videoName);
                } else {
                    $videoName = $get_section_1['video'];
                }
            } else {
                $videoExtension = $request->video->extension();
                $videoName = uniqid().'-'.date("ymd").'.'.$videoExtension;
                $request->video->move(public_path('video/swasta'), $videoName);
            }
        } else {
            $layanan_swasta = new LandingPageLayananSwasta;

            $videoExtension = $request->video->extension();
            $videoName = uniqid().'-'.date("ymd").'.'.$videoExtension;
            $request->video->move(public_path('video/swasta'), $videoName);
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'video' => $videoName
        ];

        $layanan_swasta->section_1 = json_encode($array);
        $layanan_swasta->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
    }
}
