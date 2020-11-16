@extends('layouts.auth')

@section('content')
  <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" width="200" src="/assets/img/logo.png" />
      <div class="section"></div>

      <h5 class="indigo-text">DAFTAR PROGRAM</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" action="/proses-daftar" method="POST">
          @csrf
            <div class="row">
              <div class="col s12">
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input class="validate" type="text" name="nama" id="email" value="{{ old('nama') }}">
                <label for="email">Nama Lengkap</label>
              </div>
              <p style="color: red;">@error('nama'){{ $message }}@enderror</p>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input class="validate" type="email" name="email" id="email" value="{{ old('email') }}">
                <label for="email">Email</label>
              </div>
              <p style="color: red;">@error('email'){{ $message }}@enderror</p>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input class="validate" type="password" name="password" id="password" />
                <label for="password">Password</label>
              <p style="color: red;">@error('password'){{ $message }}@enderror</p>
              </div>
              <label style="float: right;">
                <a class="pink-text" href="/masuk"><b>Sudah daftar?</b></a>
              </label>
            </div>

            <br />
            <center>
              <div class="row">
                <button type="submit" name="btn_login" class="col s12 btn btn-large waves-effect indigo">DAFTAR</button>
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