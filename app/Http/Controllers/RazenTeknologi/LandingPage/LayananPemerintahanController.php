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
use App\Models\LandingPageLayananPemerintahan;

class LayananPemerintahanController extends Controller
{
    public function index()
    {
        return view('razen-teknologi.landing-page.layanan-pemerintahan.index');
    }

    public function store_section_1(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'tautan' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        }

        $cek = LandingPageLayananPemerintahan::first();

        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $request->tautan, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $request->tautan, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        $url = 'https://www.youtube.com/embed/' . $youtube_id ;

        if($cek)
        {
            $layanan_pemerintahan = LandingPageLayananPemerintahan::find($cek->id);
            if($cek->section_1)
            {
                $get_section_1 = json_decode($layanan_pemerintahan->section_1, true);

                if($request->gambar)
                {
                    $gambarName = $get_section_1['gambar'];
                    File::delete(public_path('images/landing-page/layanan/pemerintahan/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landing-page/layanan/pemerintahan/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_1['gambar'];
                }

                if($get_section_1['konten'] != '')
                {
                    $konten = $get_section_1['konten'];
                } else {
                    $konten = '';
                }
            } else {

                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landing-page/layanan/pemerintahan/'.$gambarName);
                $gambar->save($gambarSize, 100);

                $konten = '';
            }

        } else {
            $layanan_pemerintahan = new LandingPageLayananPemerintahan;
            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/layanan/pemerintahan/'.$gambarName);
            $gambar->save($gambarSize, 100);

            $konten = '';
        }

        $array = [
            'judul' => $request->judul,
            'tautan' => $url,
            'gambar' => $gambarName,
            'konten' => $konten
        ];

        $layanan_pemerintahan->section_1 = json_encode($array);
        $layanan_pemerintahan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
    }

    public function store_section_1_konten(Request $request)
    {
        $konten_section_1 = $request->section_1;

        $get = LandingPageLayananPemerintahan::first();

        if($get->section_1)
        {
            $layanan_pemerintahan = LandingPageLayananPemerintahan::find($get->id);

            $data_section_1 = json_decode($get->section_1, true);

            if($data_section_1['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_1); $i++) {
                    $data[] = [
                        'id' => uniqid(),
                        'item' => $konten_section_1[$i]['item']
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_1['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'item' => $value['item']
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_1); $i++) {
                    $data_baru[] = [
                        'id' => uniqid(),
                        'item' => $konten_section_1[$i]['item']
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'judul' => $data_section_1['judul'],
                'tautan' => $data_section_1['tautan'],
                'gambar' => $data_section_1['gambar'],
                'konten' => $data
            ];

            $layanan_pemerintahan->section_1 = json_encode($array);
            $layanan_pemerintahan->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 3');
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        }
    }

    public function hapus_section_1_konten(Request $request)
    {
        $get = LandingPageLayananPemerintahan::first();
        $data = [];
        $data_section_1 = json_decode($get->section_1, true);
        foreach ($data_section_1['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'item' => $value['item']
                ];
            }
        }

        $landingpage_beranda = LandingPageLayananPemerintahan::find($get->id);
        $array = [
            'judul' => $data_section_1['judul'],
            'tautan' => $data_section_1['tautan'],
            'gambar' => $data_section_1['gambar'],
            'konten' => $data
        ];
        $landingpage_beranda->section_1 = json_encode($array);
        $landingpage_beranda->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }

    public function store_section_2(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        }

        $cek = LandingPageLayananPemerintahan::first();

        if($cek)
        {
            $layanan_pemerintahan = LandingPageLayananPemerintahan::find($cek->id);

        } else {
            $layanan_pemerintahan = new LandingPageLayananPemerintahan;
        }

        $array = [
            'judul' => $request->judul
        ];

        $layanan_pemerintahan->section_2 = json_encode($array);
        $layanan_pemerintahan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
    }

    public function store_section_3(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        }

        $cek = LandingPageLayananPemerintahan::first();

        if($cek)
        {
            $layanan_pemerintahan = LandingPageLayananPemerintahan::find($cek->id);

        } else {
            $layanan_pemerintahan = new LandingPageLayananPemerintahan;
        }

        $array = [
            'judul' => $request->judul
        ];

        $layanan_pemerintahan->section_3 = json_encode($array);
        $layanan_pemerintahan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
    }

    public function store_section_4(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        }

        $cek = LandingPageLayananPemerintahan::first();

        if($cek)
        {
            $layanan_pemerintahan = LandingPageLayananPemerintahan::find($cek->id);
            if($cek->section_4)
            {
                $get_section_4 = json_decode($layanan_pemerintahan->section_4, true);

                if($get_section_4['konten'] != '')
                {
                    $konten = $get_section_4['konten'];
                } else {
                    $konten = '';
                }
            } else {

                $konten = '';
            }

        } else {
            $layanan_pemerintahan = new LandingPageLayananPemerintahan;

            $konten = '';
        }

        $array = [
            'judul' => $request->judul,
            'konten' => $konten
        ];

        $layanan_pemerintahan->section_4 = json_encode($array);
        $layanan_pemerintahan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
    }

    public function store_section_4_konten(Request $request)
    {
        $konten_section_4 = $request->section_4;

        $get = LandingPageLayananPemerintahan::first();

        if($get->section_4)
        {
            $layanan_pemerintahan = LandingPageLayananPemerintahan::find($get->id);

            $data_section_4 = json_decode($get->section_4, true);

            if($data_section_4['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_4); $i++) {
                    $gambarExtension = $konten_section_4[$i]['gambar']->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($konten_section_4[$i]['gambar']);
                    $gambarSize = public_path('images/landing-page/layanan/pemerintahan/'.$gambarName);
                    $gambar->save($gambarSize, 100);

                    $data[] = [
                        'id' => uniqid(),
                        'item' => $konten_section_4[$i]['item'],
                        'gambar' => $gambarName
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_4['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'item' => $value['item'],
                        'gambar' => $value['gambar'],
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_4); $i++) {
                    $gambarExtension = $konten_section_4[$i]['gambar']->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($konten_section_4[$i]['gambar']);
                    $gambarSize = public_path('images/landing-page/layanan/pemerintahan/'.$gambarName);
                    $gambar->save($gambarSize, 100);

                    $data_baru[] = [
                        'id' => uniqid(),
                        'item' => $konten_section_4[$i]['item'],
                        'gambar' => $gambarName
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'judul' => $data_section_4['judul'],
                'konten' => $data
            ];

            $layanan_pemerintahan->section_4 = json_encode($array);
            $layanan_pemerintahan->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 4');
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        }
    }

    public function hapus_section_4_konten(Request $request)
    {
        $get = LandingPageLayananPemerintahan::first();
        $data = [];
        $data_section_4 = json_decode($get->section_4, true);
        foreach ($data_section_4['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'item' => $value['item'],
                    'gambar' => $value['gambar'],
                ];
            } else {
                $gambarName = $value['gambar'];
                File::delete(public_path('images/landing-page/layanan/pemerintahan/'.$gambarName));
            }
        }

        $landingpage_beranda = LandingPageLayananPemerintahan::find($get->id);
        $array = [
            'judul' => $data_section_4['judul'],
            'konten' => $data
        ];
        $landingpage_beranda->section_4 = json_encode($array);
        $landingpage_beranda->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }

    public function store_section_5(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        }

        $cek = LandingPageLayananPemerintahan::first();

        if($cek)
        {
            $layanan_pemerintahan = LandingPageLayananPemerintahan::find($cek->id);

        } else {
            $layanan_pemerintahan = new LandingPageLayananPemerintahan;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul
        ];

        $layanan_pemerintahan->section_5 = json_encode($array);
        $layanan_pemerintahan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
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
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        }

        $cek = LandingPageLayananPemerintahan::first();

        if($cek)
        {
            $layanan_pemerintahan = LandingPageLayananPemerintahan::find($cek->id);
            if($cek->section_6)
            {
                $get_section_6 = json_decode($layanan_pemerintahan->section_6, true);

                if($request->gambar)
                {
                    if(array_key_exists('gambar', $get_section_6))
                    {
                        $gambarName = $get_section_6['gambar'];
                        File::delete(public_path('images/landing-page/layanan/pemerintahan/'.$gambarName));
                    }

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landing-page/layanan/pemerintahan/'.$gambarName);
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
                $gambarSize = public_path('images/landing-page/layanan/pemerintahan/'.$gambarName);
                $gambar->save($gambarSize, 100);

                $konten = '';
            }

        } else {
            $layanan_pemerintahan = new LandingPageLayananPemerintahan;
            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/layanan/pemerintahan/'.$gambarName);
            $gambar->save($gambarSize, 100);

            $konten = '';
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
            'konten' => $konten
        ];

        $layanan_pemerintahan->section_6 = json_encode($array);
        $layanan_pemerintahan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
    }

    public function store_section_6_konten(Request $request)
    {
        $konten_section_6 = $request->section_6;

        $get = LandingPageLayananPemerintahan::first();

        if($get->section_6)
        {
            $layanan_pemerintahan = LandingPageLayananPemerintahan::find($get->id);

            $data_section_6 = json_decode($get->section_6, true);

            if($data_section_6['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_6); $i++) {
                    $data[] = [
                        'id' => uniqid(),
                        'pertanyaan' => $konten_section_6[$i]['pertanyaan'],
                        'jawaban' => $konten_section_6[$i]['jawaban'],
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_6['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'pertanyaan' => $value['pertanyaan'],
                        'jawaban' => $value['jawaban']
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_6); $i++) {
                    $data_baru[] = [
                        'id' => uniqid(),
                        'pertanyaan' => $konten_section_6[$i]['pertanyaan'],
                        'jawaban' => $konten_section_6[$i]['jawaban']
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

            $layanan_pemerintahan->section_6 = json_encode($array);
            $layanan_pemerintahan->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 6');
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        }
    }

    public function hapus_section_6_konten(Request $request)
    {
        $get = LandingPageLayananPemerintahan::first();
        $data = [];
        $data_section_6 = json_decode($get->section_6, true);
        foreach ($data_section_6['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'pertanyaan' => $value['pertanyaan'],
                    'jawaban' => $value['jawaban']
                ];
            }
        }

        $landingpage_beranda = LandingPageLayananPemerintahan::find($get->id);
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
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        }

        $cek = LandingPageLayananPemerintahan::first();

        if($cek)
        {
            $layanan_pemerintahan = LandingPageLayananPemerintahan::find($cek->id);
            if($cek->section_7)
            {
                $get_section_7 = json_decode($layanan_pemerintahan->section_7, true);

                if($get_section_7['konten'] != '')
                {
                    $konten = $get_section_7['konten'];
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

        $layanan_pemerintahan->section_7 = json_encode($array);
        $layanan_pemerintahan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
    }

    public function store_section_7_konten(Request $request)
    {
        $konten_section_7 = $request->section_7;

        $get = LandingPageLayananPemerintahan::first();

        if($get->section_7)
        {
            $layanan_pemerintahan = LandingPageLayananPemerintahan::find($get->id);

            $data_section_7 = json_decode($get->section_7, true);

            if($data_section_7['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_7); $i++) {
                    $data[] = [
                        'id' => uniqid(),
                        'pertanyaan' => $konten_section_7[$i]['pertanyaan'],
                        'jawaban' => $konten_section_7[$i]['jawaban'],
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_7['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'pertanyaan' => $value['pertanyaan'],
                        'jawaban' => $value['jawaban']
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_7); $i++) {
                    $data_baru[] = [
                        'id' => uniqid(),
                        'pertanyaan' => $konten_section_7[$i]['pertanyaan'],
                        'jawaban' => $konten_section_7[$i]['jawaban']
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'judul' => $data_section_7['judul'],
                'deskripsi' => $data_section_7['deskripsi'],
                'konten' => $data
            ];

            $layanan_pemerintahan->section_7 = json_encode($array);
            $layanan_pemerintahan->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 7');
            return redirect()->route('razen-teknologi.landing-page.layanan.pemerintahan.index');
        }
    }

    public function hapus_section_7_konten(Request $request)
    {
        $get = LandingPageLayananPemerintahan::first();
        $data = [];
        $data_section_7 = json_decode($get->section_7, true);
        foreach ($data_section_7['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'pertanyaan' => $value['pertanyaan'],
                    'jawaban' => $value['jawaban']
                ];
            }
        }

        $landingpage_beranda = LandingPageLayananPemerintahan::find($get->id);
        $array = [
            'judul' => $data_section_7['judul'],
            'deskripsi' => $data_section_7['deskripsi'],
            'konten' => $data
        ];
        $landingpage_beranda->section_7 = json_encode($array);
        $landingpage_beranda->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }
}
