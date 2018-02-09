@extends('layout.app')

@section('css')
<style>
.navbar a{
    color: #fff;
}
.navbar .navbar-right li{
    margin: 0 5px;
}
.ucapan .jumbotron{
    background: #DA4453;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #89216B, #DA4453);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #89216B, #DA4453); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: #fff;
    padding: 100px 75px 50px;
}
.ucapan h2{
    font-weight: 700;
}
.detail{
  padding-top: 100px;
}
.detail h2{
  background: red;
  padding: 10px 0;
  margin-bottom: 15px;
}
</style>
@endsection

@section('navbar')
<div class="menu">
    <nav class="navbar navbar-expand-lg bg-danger fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">Lomba Kucing</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/peserta">Peserta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-dark" href="/lomba">Daftar Lomba</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-right ml-auto">
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light" href="login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-success" href="register">Register</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
</div>
@endsection

@section('content')
<div class="detail">
  <div class="container">
  <h2 class="text-center" >{{$lomba->name}} </h2>
    <div class="row">
      <div class="col-md-5">
        <img src="{{ $lomba->poster }}" alt="" width="100%"> 
      </div>
      <div class="col-md-7">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Deskripsi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Waktu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Syarat &amp; Ketentuan</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> {{$lomba->deskripsi}} </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> {{$lomba->tanggal_tutup}} </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus fugit nostrum cumque, earum voluptates a quae ducimus incidunt error deleniti corrupti quibusdam laboriosam unde libero expedita iusto quas dolore ab? </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
<div class="footer">
    <p class="text-center text-white">hai</p>
</div>
@endsection