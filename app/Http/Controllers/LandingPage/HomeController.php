<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleHttpClient;
use Carbon\Carbon;
use App\Models\Timeline;
use App\Models\Testimoni;
use App\Models\LayananPerusahaan;
use App\Models\Tim;
use App\Models\Layanan;
use App\Models\FiturLayanan;
use App\Models\PivotItemFiturLayanan;

class HomeController extends Controller
{
    public function beranda()
    {
        $timelines = Timeline::all();
        $testimonis = Testimoni::all();
        $guzzleClient = new GuzzleHttpClient();

        $get_kategoris = $guzzleClient->get(env('RAZEN_URL').'api/product/category/razen-teknologi');
        $kategoris = json_decode($get_kategoris->getBody())->data;

        return view('landing-page.index', [
            'timelines' => $timelines,
            'testimonis' => $testimonis,
            'kategoris' => $kategoris
        ]);
    }

    public function perusahaan()
    {
        $layanan_perusahaans = LayananPerusahaan::all();
        $tims = Tim::all()->map(function($data){
            return [
                'nama' => $data->nama,
                'jabatan' => $data->jabatan,
                'foto' => $data->foto,
                'pivot' => $data->pivot_tim_media_sosial->map(
                    function($data){
                        return [
                            'nama_media_sosial' => $data->media_sosial->nama,
                            'kode_ikon' => $data->media_sosial->kode_ikon,
                            'tautan' => $data->tautan
                        ];
                    }
                )
            ];
        });
        return view('landing-page.perusahaan', [
            'layanan_perusahaans' => $layanan_perusahaans,
            'tims' => $tims
        ]);
    }

    public function layanan()
    {
        $layanans = Layanan::all();
        return view('landing-page.layanan', [
            'layanans' => $layanans
        ]);
    }

    public function layanan_detail($id)
    {
        // $layanan = Layanan::where('id', $id)->first()->map(function($data){
        //     return [
        //         'id' => $data->id,
        //         'judul_kecil' => $data->judul_kecil,
        //         'judul' => $data->judul,
        //         'deskripsi' => $data->deskripsi,
        //         'ikon' => $data->ikon,
        //         'gambar' => $data->gambar,
        //         'daftar_layanan' => $data->pivot_daftar_layanan->map(
        //             function($data){
        //                 return [
        //                     'judul' => $data->judul,
        //                 ];
        //             }
        //         ),
        //         'fitur_layanan' => $data->fitur_layanan->map(
        //             function($data){
        //                 return [
        //                     'judul' => $data->judul,
        //                     'item' => $data->pivot_item_fitur_layanan->map(
        //                         function($data)
        //                         {
        //                             return [
        //                                 'judul' => $data->judul,
        //                                 'deskripsi' => $data->deskripsi
        //                             ];
        //                         }
        //                     )
        //                 ];
        //             }
        //         )
        //     ];
        // });

        $data_layanan = Layanan::find($id);

        $data_layanan['daftar_layanan'] = $data_layanan->pivot_daftar_layanan->map(
            function($data)
            {
                return [
                    'judul' => $data->judul,
                ];
            }
        );

        $data_layanan['fitur_layanan'] = $data_layanan->fitur_layanan->map(
            function($data){
                return [
                    'judul' => $data->judul,
                    'item' => $data->pivot_item_fitur_layanan->map(
                        function($data)
                        {
                            return [
                                'judul' => $data->judul,
                                'deskripsi' => $data->deskripsi
                            ];
                        }
                    )
                ];
            }
        );

        // dd($data_layanan->fitur_layanan[0]['judul']);

        return view('landing-page.layanan-detail', [
            'data_layanan' => $data_layanan
        ]);
    }

    public function aplikasi()
    {
        return view('landing-page.aplikasi');
    }

    public function aplikasi_detail($id)
    {
        return view('landing-page.aplikasi-detail');
    }

    public function aplikasi_kategori($id)
    {
        $guzzleClient = new GuzzleHttpClient();

        $get_kategori_razen_teknologis = $guzzleClient->get(env('RAZEN_URL').'api/product/razen-teknologi/product/kategori/'.$id);
        $kategori_razen_teknologis = json_decode($get_kategori_razen_teknologis->getBody())->data;
        // dd($kategori_razen_teknologis);
        return view('landing-page.aplikasi-kategori',[
            'kategori_razen_teknologis' => $kategori_razen_teknologis
        ]);
    }

    public function kontak()
    {
        return view('landing-page.kontak');
    }

    public function kontak_kami(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required | max:255',
            'email' => 'required | max:255',
            'no_hp' => 'required | max:255',
            'subjek' => 'required',
            'message' => 'required'
        ]);

        $data = [
            'email' => $request->email,
            'subjek' => $request->subjek,
            'body' => $request->message
        ];

        Mail::send('emails.kontak-kami', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('skadi1268@gmail.com', 'Kristoforus Fasco');
            $message->subject($data['subjek']);
        });

        return redirect(route('kontak'));
    }
}
