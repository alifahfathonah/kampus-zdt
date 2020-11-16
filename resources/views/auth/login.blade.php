@extends('layouts.auth')

@section('content')
  @if(session('sukses_register'))
  <nav>
    <div class="nav-wrapper green">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <a href="#!" class="breadcrumb">Selamat anda telah berhasil register! Silahkan login...</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  @endif
  @if(session('gagal_masuk'))
  <nav>
    <div class="nav-wrapper red">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <a href="#!" class="breadcrumb">Email dan password anda salah!</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  @endif
  <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" width="200" src="/assets/img/logo.png" />
      <div class="section"></div>

      <h5 class="indigo-text">MASUK PROGRAM</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" action="/proses-masuk" method="POST">
          @csrf
            <div class="row">
              <div class="col s12">
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input class="validate" type="email" name="email" id="email" />
                <label for="email">Email</label>
              </div>
              <p style="color: red;">@error('email'){{ $message }}@enderror</p>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input class="validate" type="password" name="password" id="password" />
                <label for="password">Password</label>
              </div>
              <p style="color: red;">@error('password'){{ $message }}@enderror</p>
              <label style="float: right;">
                <a class="pink-text" href="/daftar"><b>Belum daftar?</b></a>
              </label>
            </div>

            <br />
            <center>
              <div class="row">
                <button type="submit" name="btn_login" class="col s12 btn btn-large waves-effect indigo">MASUK</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
@endsection