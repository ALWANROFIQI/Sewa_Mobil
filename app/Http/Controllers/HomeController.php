<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Message as ModelsMessage;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Menampilkan halaman home 
    public function index()
    {
        $cars = Car::latest()->get();

        return view('frontend.homepage');
    }

    //Menampilkan halaman produk
    public function produk()
    {
        $cars = Car::latest()->get();

        return view('frontend.produk', compact('cars'));
    }

    //Menampilkan halaman contact
    public function contact()
    {
        return view('frontend.contact');
    }
    //Menampilkan halaman isi contact
    public function contactStore(Request $request)
    {
        $data = $request->validate([
            'nama' =>'required',
            'email' => 'required',
            'subject' => 'required',
            'pesan' => 'required'
        ]);
         
        ModelsMessage :: create($data);
        
        //information message
        return redirect()->back()->with([
            'message' => 'pesan anda berhasil di kirim',
            'alert-type' =>'success'
        ]);
    }
    //Menampilkan halaman about
    public function about()
    {
        return view('frontend.about');
    }
    //Menampilkan halaman detail
    public function detail(Car $car)
    {
        return view('frontend.detail', compact('car'));
    }
}
