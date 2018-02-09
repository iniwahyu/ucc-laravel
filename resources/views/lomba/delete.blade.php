@extends('layout.app')

@section('css')
<style>
.navbar a{
    color: #fff;
}
.navbar .navbar-right li{
    margin: 0 5px;
}
.edit{
    padding: 100px 0;
}
.footer{
    background: #DA4453;
}
</style>
@endsection

@section('content')
<div class="jumbotron">
  <h1 class="display-4">Apa Anda Yakin? Menghapus Nama Lomba "{{$lomba->name}}" </h1>
  <p class="lead">
    <a class="btn btn-danger btn-lg" href="/lomba/{{$lomba->id}}/confirmdelete" role="button">Ya</a>
    <a class="btn btn-primary btn-lg" href="/lomba/{{$lomba->id}}/delete" role="button">Tidak</a>
  </p>
</div>
@endsection