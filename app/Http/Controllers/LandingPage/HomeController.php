<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Timeline;

class HomeController extends Controller
{
    public function beranda()
    {
        $timelines = Timeline::all();
        return view('landing-page.index', [
            'timelines' => $timelines
        ]);
    }

    public function perusahaan()
    {
        return view('landing-page.perusahaan');
    }

    public function layanan()
    {
        return view('landing-page.layanan');
    }

    public function layanan_detail($id)
    {
        return view('landing-page.layanan-detail');
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
        return view('landing-page.aplikasi-kategori');
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
