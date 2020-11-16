@extends('layouts.app')

@section('content')
<div id="app">
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2"><b style="color: white;">Kampus ZDT</b></h1>
        <div class="row center">
          <h5 class="header col s12 light">Menyiapkan Lulusan IT Siap Kerja</h5>
        </div>
        <div class="row center">
          @guest
          <a href="/daftar" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Gabung Program</a>
          @endguest
          @auth
          <a href="/profil" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">{{ Auth::user()->nama }}</a>
          @endauth
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="/assets/img/banner.jpg"></div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <img src="/assets/img/logo.png" width="150">
          <h4>Apa itu Kampus ZDT?</h4>
          <p class="left-align light">Kampus ZDT(Zero Developer Team) merupakan program belajar coding online yang diselenggarakan oleh Universitas Bina Sarana Informatika untuk membantu seseorang dalam mempersiapkan lulusannya khususnya dalam jurusan IT agar siap terjun dan bersaing di dunia kerja dalam industri 4.0.</p>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">school</i></h2>
            <h5 class="center">Belajar Online 2 Semester</h5>

            <p class="light">Belajar online selama 2 semester (1 tahun) dengan waktu belajar fleksibel.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Video Tutorial Step by Step</h5>

            <p class="light">Materi belajar menggunakan format video yang disusun langkah demi langkah agar mudah dipelajari.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">done_all</i></h2>
            <h5 class="center">Evaluasi & Sertifikat Digital</h5>

            <p class="light">Siswa akan mendapatkan sertifikat digital setelah menyelesaikan program.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="parallax"><img src="/assets/img/banner2.jpg"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Materi Belajar Kampus ZDT</h4>
          <p>Berikut ini materi belajar yang akan dipelajari dalam program Kampus ZDT:</p>
        </div>
      </div>

      <div class="row">
        <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="/assets/img/materi/html.jpg">
            </div>
            <div class="card-content">
              <p>HTML</p>
            </div>
          </div>
        </div>
        <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="/assets/img/materi/css.png">
            </div>
            <div class="card-content">
              <p>CSS</p>
            </div>
          </div>
        </div>
        <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="/assets/img/materi/js.png">
            </div>
            <div class="card-content">
              <p>JAVASCRIPT</p>
            </div>
          </div>
        </div>
      </div>
               
      <div class="row">
        <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="/assets/img/materi/php.png">
            </div>
            <div class="card-content">
              <p>PHP</p>
            </div>
          </div>
        </div>
        <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="/assets/img/materi/bootstrap.png">
            </div>
            <div class="card-content">
              <p>BOOTSTRAP</p>
            </div>
          </div>
        </div>
        <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="/assets/img/materi/jquery.png">
            </div>
            <div class="card-content">
              <p>JQUERY</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="/assets/img/materi/codeigniter.png">
            </div>
            <div class="card-content">
              <p>CODEIGNITER</p>
            </div>
          </div>
        </div>
        <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="/assets/img/materi/laravel.png">
            </div>
            <div class="card-content">
              <p>LARAVEL</p>
            </div>
          </div>
        </div>
        <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="/assets/img/materi/vuejs.png">
            </div>
            <div class="card-content">
              <p>VUE.JS</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="parallax"><img src="/assets/img/banner3.jpg"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Gabung YUK</h4>
          <p>Kamu bisa bergabung melalui paket belajar sesuai dengan yang kamu butuhkan.</p>
        </div>
      </div>

      <div class="row">
        <div class="col s4 m4">
          <div class="card">
            <div class="card-content">
            <center>
              <h5>Program Flash</h5>
              <h3>Rp350.000</h3>
              <p>Akses semua materi dan fasilitas belajar selama 1 semester (6 bulan)</p><br>
              <a href="/daftar" class="waves-effect waves-light btn">GABUNG</a>
            </center>
            </div>
          </div>
        </div>
        <div class="col s4 m4">
          <div class="card">
            <div class="card-content">
            <center>
              <h5>Program Reguler</h5>
              <h3>Rp600.000</h3>
              <p>Akses semua materi dan fasilitas belajar selama 2 semester (1 tahun)</p><br>
              <a href="/daftar" class="waves-effect waves-light btn">GABUNG</a>
            </center>
            </div>
          </div>
        </div>
        <div class="col s4 m4">
          <div class="card">
            <div class="card-content">
            <center>
              <h5>Program Master</h5>
              <h3>Rp1.000.000</h3>
              <p>Akses semua materi dan fasilitas belajar selama 4 semester (2 tahun)</p><br>
              <a href="/daftar" class="waves-effect waves-light btn">GABUNG</a>
            </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Di Selenggarakan Oleh :</h4><br>
          <img src="/assets/img/bsi.jpg" width="200">
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Pertanyaan Umum</h4><br>
          <ul class="collapsible">
            <li>
              <div class="collapsible-header">Apa itu Kampus ZDT?</div>
              <div class="collapsible-body"><span>Kampus ZDT(Zero Developer Team) merupakan program belajar coding online yang diselenggarakan oleh Universitas Bina Sarana Informatika untuk membantu seseorang dalam mempersiapkan lulusannya khususnya dalam jurusan IT agar siap terjun dan bersaing di dunia kerja dalam industri 4.0.</span></div>
            </li>
            <li>
              <div class="collapsible-header">Untuk siapa program ini?</div>
              <div class="collapsible-body"><span>Semua orang yang ingin membangun keahlian dalam bidang web programming untuk mempersiapkan diri menghadapi dunia kerja di industri 4.0.</span></div>
            </li>
            <li>
              <div class="collapsible-header">Bagaimana metode belajar di kampus ZDT?</div>
              <div class="collapsible-body"><span>Peserta Kampus ZDT akan belajar secara online berdasarkan alur belajar yang telah disediakan. Materi belajar berbentuk video tutorial yang dikemas langkah demi langkah agar mudah dipelajari. Peserta bisa belajar secara fleksibel kapan saja dan di mana saja.</span></div>
            </li>
            <li>
              <div class="collapsible-header">Apakah peserta mendapatkan sertifikat?</div>
              <div class="collapsible-body"><span>Ya. Dapat sertifikat digital.</span></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection