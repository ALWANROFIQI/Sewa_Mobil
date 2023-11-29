@extends('layouts.frontend')

@section('content')
<header class="bg-dark py-5">
      <div class="container px-3 px-lg-5 my-3">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">About</h1>
          <p class="lead fw-normal text-white-50 mb-0">
            lebih mengenal sang pencipta
          </p>
        </div>
      </div>
    </header>
    <!-- Section-->
    <section class="py-5">
      <div class="container px-3 px-lg-2">
        <h2 class="text-center mb-5">Tim Kami</h2>
        <div class="row">
  <div class="column">
    <div class="card">
      <img src={{ asset('frontend/img/alwan.jpg') }} alt="idad" style="width:100%">
      <div class="container">
        <h2>Alwan Rofiqi</h2>
        <p class="title">Mahasiswa</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src={{ asset('frontend/img/idad.jpg') }} alt="Mike" style="width:100%">
      <div class="container">
        <h2>Moch. Emil idad</h2>
        <p class="title">Mahasiswa</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src={{ asset('frontend/img/a.jpg') }} alt="John" style="width:100%">
      <div class="container">
        <h2>Achmad Nurs Syururi Arifin</h2>
        <p class="title">Mahasiswa</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
      </div>
    </section>
    
@endsection