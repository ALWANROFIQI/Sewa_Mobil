<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Message as ModelsMessage;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $cars = Car::latest()->get();

        return view('frontend.homepage');
    }
    public function produk()
    {
        $cars = Car::latest()->get();

        return view('frontend.produk', compact('cars'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactStore(Request $request)
    {
        $data = $request->validate([
            'nama' =>'required',
            'email' => 'required',
            'subject' => 'required',
            'pesan' => 'required'
        ]);
         
        ModelsMessage :: create($data);

        return redirect()->back()->with([
            'message' => 'pesan anda berhasil di kirim',
            'alert-type' =>'success'
        ]);
    }
    public function about()
    {
        return view('frontend.about');
    }

    public function detail(Car $car)
    {
        return view('frontend.detail', compact('car'));
    }
}
