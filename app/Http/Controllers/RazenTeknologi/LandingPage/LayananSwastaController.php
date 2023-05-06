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
            return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
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

    public function store_section_2(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
        }

        $cek = LandingPageLayananSwasta::first();

        if($cek)
        {
            $layanan_swasta = LandingPageLayananSwasta::find($cek->id);

        } else {
            $layanan_swasta = new LandingPageLayananSwasta;
        }

        $array = [
            'deskripsi' => $request->deskripsi
        ];

        $layanan_swasta->section_2 = json_encode($array);
        $layanan_swasta->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
    }

    public function store_section_3(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
        }

        $cek = LandingPageLayananSwasta::first();

        if($cek)
        {
            $layanan_swasta = LandingPageLayananSwasta::find($cek->id);

        } else {
            $layanan_swasta = new LandingPageLayananSwasta;
        }

        $array = [
            'judul' => $request->judul
        ];

        $layanan_swasta->section_3 = json_encode($array);
        $layanan_swasta->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
    }

    public function store_section_4(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
        }

        $cek = LandingPageLayananSwasta::first();

        if($cek)
        {
            $layanan_swasta = LandingPageLayananSwasta::find($cek->id);
            if($cek->section_4)
            {
                $get_section_4 = json_decode($layanan_swasta->section_4, true);

                if($request->gambar)
                {
                    if(array_key_exists('gambar', $get_section_4))
                    {
                        $gambarName = $get_section_4['gambar'];
                        File::delete(public_path('images/landing-page/layanan/swasta/'.$gambarName));
                    }

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landing-page/layanan/swasta/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_4['gambar'];
                }

                if($get_section_4['konten'] != '')
                {
                    $konten = $get_section_4['konten'];
                } else {
                    $konten = '';
                }
            } else {

                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landing-page/layanan/swasta/'.$gambarName);
                $gambar->save($gambarSize, 100);

                $konten = '';
            }

        } else {
            $layanan_swasta = new LandingPageLayananSwasta;
            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/layanan/swasta/'.$gambarName);
            $gambar->save($gambarSize, 100);

            $konten = '';
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
            'konten' => $konten
        ];

        $layanan_swasta->section_4 = json_encode($array);
        $layanan_swasta->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
    }

    public function store_section_5(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
        }

        $cek = LandingPageLayananSwasta::first();

        if($cek)
        {
            $layanan_swasta = LandingPageLayananSwasta::find($cek->id);
            if($cek->section_5)
            {
                $get_section_5 = json_decode($layanan_swasta->section_5, true);

                if($get_section_5['konten'] != '')
                {
                    $konten = $get_section_5['konten'];
                } else {
                    $konten = '';
                }
            } else {

                $konten = '';
            }

        } else {
            $layanan_swasta = new LandingPageLayananSwasta;

            $konten = '';
        }

        $array = [
            'judul' => $request->judul,
            'konten' => $konten
        ];

        $layanan_swasta->section_5 = json_encode($array);
        $layanan_swasta->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
    }

    public function store_section_5_konten(Request $request)
    {
        $konten_section_5 = $request->section_5;

        $get = LandingPageLayananSwasta::first();

        if($get->section_5)
        {
            $layanan_swasta = LandingPageLayananSwasta::find($get->id);

            $data_section_5 = json_decode($get->section_5, true);

            if($data_section_5['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_5); $i++) {
                    $data[] = [
                        'id' => uniqid(),
                        'nama' => $konten_section_5[$i]['nama'],
                        'testimoni' => $konten_section_5[$i]['testimoni'],
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_5['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'nama' => $value['nama'],
                        'testimoni' => $value['testimoni']
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_5); $i++) {
                    $data_baru[] = [
                        'id' => uniqid(),
                        'nama' => $konten_section_5[$i]['nama'],
                        'testimoni' => $konten_section_5[$i]['testimoni']
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'judul' => $data_section_5['judul'],
                'konten' => $data
            ];

            $layanan_swasta->section_5 = json_encode($array);
            $layanan_swasta->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
            return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 5');
            return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
        }
    }

    public function hapus_section_5_konten(Request $request)
    {
        $get = LandingPageLayananSwasta::first();
        $data = [];
        $data_section_5 = json_decode($get->section_5, true);
        foreach ($data_section_5['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'nama' => $value['nama'],
                    'testimoni' => $value['testimoni']
                ];
            }
        }

        $landingpage_beranda = LandingPageLayananSwasta::find($get->id);
        $array = [
            'judul' => $data_section_5['judul'],
            'konten' => $data
        ];
        $landingpage_beranda->section_5 = json_encode($array);
        $landingpage_beranda->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }

    public function store_section_6(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
        }

        $cek = LandingPageLayananSwasta::first();

        if($cek)
        {
            $layanan_swasta = LandingPageLayananSwasta::find($cek->id);

        } else {
            $layanan_swasta = new LandingPageLayananSwasta;
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $layanan_swasta->section_6 = json_encode($array);
        $layanan_swasta->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-teknologi.landing-page.layanan.swasta.index');
    }
}
