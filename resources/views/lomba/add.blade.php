@extends('layout.app')

@section('css')
<style>
.navbar a{
    color: #fff;
}
.navbar .navbar-right li{
    margin: 0 5px;
}
.add{
    padding: 100px 0;
}
</style>
@endsection

@section('content')
<div class="add">
    <div class="container">
        <form action="/lomba" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Nama Lomba</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="form-group">
            <label>Deskripsi Lomba</label>
            <input type="text" name="deskripsi" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Poster Lomba</label>
            <input type="text" class="form-control" name="poster" required>
        </div>
        <div class="form-group">
            <label>Tanggal Lomba</label>
            <input type="date" class="form-control" name="tanggal" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/lomba" class="btn btn-primary">Kembali</a>
        <a href="/lomba/add" class="btn btn-primary">Refresh</a>
        </form>
    </div>
</div>



@endsection