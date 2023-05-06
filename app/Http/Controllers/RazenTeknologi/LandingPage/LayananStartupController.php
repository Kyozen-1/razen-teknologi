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
use App\Models\LandingPageLayananStartup;

class LayananStartupController extends Controller
{
    public function index()
    {
        return view('razen-teknologi.landing-page.layanan-startup.index');
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
            return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
        }

        $cek = LandingPageLayananStartup::first();
        if($cek)
        {
            $layanan_startup = LandingPageLayananStartup::find($cek->id);
            if($layanan_startup->section_1)
            {
                $get_section_1 = json_decode($layanan_startup->section_1, true);

                if ($request->video) {
                    $videoName = $get_section_1['video'];
                    File::delete(public_path('video/swasta/'.$videoName));

                    $videoExtension = $request->video->extension();
                    $videoName = uniqid().'-'.date("ymd").'.'.$videoExtension;
                    $request->video->move(public_path('video/swasta'), $videoName);
                } else {
                    $videoName = $get_section_1['video'];
                }

                if($request->gambar)
                {
                    $gambarName = $get_section_1['gambar'];
                    File::delete(public_path('images/landing-page/layanan/startup/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landing-page/layanan/startup/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_1['gambar'];
                }

            } else {
                $videoExtension = $request->video->extension();
                $videoName = uniqid().'-'.date("ymd").'.'.$videoExtension;
                $request->video->move(public_path('video/swasta'), $videoName);

                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landing-page/layanan/startup/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $layanan_startup = new LandingPageLayananStartup;

            $videoExtension = $request->video->extension();
            $videoName = uniqid().'-'.date("ymd").'.'.$videoExtension;
            $request->video->move(public_path('video/swasta'), $videoName);

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/layanan/startup/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'video' => $videoName,
            'gambar' => $gambarName,
        ];

        $layanan_startup->section_1 = json_encode($array);
        $layanan_startup->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
    }

    public function store_section_2(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
        }

        $cek = LandingPageLayananStartup::first();
        if($cek)
        {
            $layanan_startup = LandingPageLayananStartup::find($cek->id);
        } else {
            $layanan_startup = new LandingPageLayananStartup;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $layanan_startup->section_2 = json_encode($array);
        $layanan_startup->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
    }

    public function store_section_3(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
        }

        $cek = LandingPageLayananStartup::first();

        if($cek)
        {
            $layanan_startup = LandingPageLayananStartup::find($cek->id);
            if($cek->section_3)
            {
                $get_section_3 = json_decode($layanan_startup->section_3, true);

                if($get_section_3['konten'] != '')
                {
                    $konten = $get_section_3['konten'];
                } else {
                    $konten = '';
                }
            } else {

                $konten = '';
            }

        } else {

            $konten = '';
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $konten
        ];

        $layanan_startup->section_3 = json_encode($array);
        $layanan_startup->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
    }

    public function store_section_3_konten(Request $request)
    {
        $konten_section_3 = $request->section_3;

        $get = LandingPageLayananStartup::first();

        if($get->section_3)
        {
            $layanan_startup = LandingPageLayananStartup::find($get->id);

            $data_section_3 = json_decode($get->section_3, true);

            if($data_section_3['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_3); $i++) {
                    $data[] = [
                        'id' => uniqid(),
                        'ikon' => $konten_section_3[$i]['ikon'],
                        'judul' => $konten_section_3[$i]['judul']
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_3['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'ikon' => $value['ikon'],
                        'judul' => $value['judul']
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_3); $i++) {
                    $data_baru[] = [
                        'id' => uniqid(),
                        'ikon' => $konten_section_3[$i]['ikon'],
                        'judul' => $konten_section_3[$i]['judul']
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'judul' => $data_section_3['judul'],
                'deskripsi' => $data_section_3['deskripsi'],
                'konten' => $data
            ];

            $layanan_startup->section_3 = json_encode($array);
            $layanan_startup->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 3');
            return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
        }
    }

    public function hapus_section_3_konten(Request $request)
    {
        $get = LandingPageLayananStartup::first();
        $data = [];
        $data_section_3 = json_decode($get->section_3, true);
        foreach ($data_section_3['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'judul' => $value['judul'],
                    'ikon' => $value['ikon'],
                ];
            }
        }

        $landingpage_beranda = LandingPageLayananStartup::find($get->id);
        $array = [
            'judul' => $data_section_3['judul'],
            'deskripsi' => $data_section_3['deskripsi'],
            'konten' => $data
        ];
        $landingpage_beranda->section_3 = json_encode($array);
        $landingpage_beranda->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }

    public function store_section_4(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
        }

        $cek = LandingPageLayananStartup::first();
        if($cek)
        {
            $layanan_startup = LandingPageLayananStartup::find($cek->id);
        } else {
            $layanan_startup = new LandingPageLayananStartup;
        }

        $array = [
            'judul' => $request->judul
        ];

        $layanan_startup->section_4 = json_encode($array);
        $layanan_startup->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
    }

    public function store_section_5(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
        }

        $cek = LandingPageLayananStartup::first();
        if($cek)
        {
            $layanan_startup = LandingPageLayananStartup::find($cek->id);
        } else {
            $layanan_startup = new LandingPageLayananStartup;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $layanan_startup->section_5 = json_encode($array);
        $layanan_startup->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
    }

    public function store_section_6(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
        }

        $cek = LandingPageLayananStartup::first();

        if($cek)
        {
            $layanan_startup = LandingPageLayananStartup::find($cek->id);
            if($cek->section_6)
            {
                $get_section_6 = json_decode($layanan_startup->section_6, true);

                if($request->gambar)
                {
                    $gambarName = $get_section_6['gambar'];
                    File::delete(public_path('images/landing-page/layanan/startup/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landing-page/layanan/startup/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_6['gambar'];
                }

                if($get_section_6['konten'] != '')
                {
                    $konten = $get_section_6['konten'];
                } else {
                    $konten = '';
                }
            } else {

                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landing-page/layanan/startup/'.$gambarName);
                $gambar->save($gambarSize, 100);

                $konten = '';
            }

        } else {
            $layanan_startup = new LandingPageLayananStartup;
            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/layanan/startup/'.$gambarName);
            $gambar->save($gambarSize, 100);

            $konten = '';
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
            'konten' => $konten
        ];

        $layanan_startup->section_6 = json_encode($array);
        $layanan_startup->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
    }

    public function store_section_6_konten(Request $request)
    {
        $konten_section_6 = $request->section_6;

        $get = LandingPageLayananStartup::first();

        if($get->section_6)
        {
            $layanan_startup = LandingPageLayananStartup::find($get->id);

            $data_section_6 = json_decode($get->section_6, true);

            if($data_section_6['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_6); $i++) {
                    $data[] = [
                        'id' => uniqid(),
                        'judul' => $konten_section_6[$i]['judul']
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_6['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'judul' => $value['judul']
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_6); $i++) {
                    $data_baru[] = [
                        'id' => uniqid(),
                        'judul' => $konten_section_6[$i]['judul']
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'judul' => $data_section_6['judul'],
                'deskripsi' => $data_section_6['deskripsi'],
                'gambar' => $data_section_6['gambar'],
                'konten' => $data
            ];

            $layanan_startup->section_6 = json_encode($array);
            $layanan_startup->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
            return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 6');
            return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
        }
    }

    public function hapus_section_6_konten(Request $request)
    {
        $get = LandingPageLayananStartup::first();
        $data = [];
        $data_section_6 = json_decode($get->section_6, true);
        foreach ($data_section_6['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'judul' => $value['judul']
                ];
            }
        }

        $landingpage_beranda = LandingPageLayananStartup::find($get->id);
        $array = [
            'judul' => $data_section_6['judul'],
            'deskripsi' => $data_section_6['deskripsi'],
            'gambar' => $data_section_6['gambar'],
            'konten' => $data
        ];
        $landingpage_beranda->section_6 = json_encode($array);
        $landingpage_beranda->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }

    public function store_section_7(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
        }

        $cek = LandingPageLayananStartup::first();
        if($cek)
        {
            $layanan_startup = LandingPageLayananStartup::find($cek->id);
        } else {
            $layanan_startup = new LandingPageLayananStartup;
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $layanan_startup->section_7 = json_encode($array);
        $layanan_startup->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-teknologi.landing-page.layanan.startup.index');
    }
}
