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
.daftarlomba{
    padding-top: 100px;
}
.footer{
    background: #DA4453;
}
</style>
@endsection

@section('navbar')

@endsection

@section('ucapan')
<!-- <div class="ucapan">
    <div class="jumbotron text-center">
        <h2 class="display-4">Lomba Kucing 2017</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, libero laudantium. Exercitationem, quasi, incidunt laborum deserunt nisi sed porro cum quam impedit quaerat consequatur, rerum error vitae atque. Veniam, accusamus.</p>
            <a class="btn btn-danger btn-lg" href="#" role="button" title="Daftar Lomba">Daftar Sekarang !</a>
        </p>
    </div>
</div> -->
@endsection

@section('content')
<div class="daftarlomba">
    <a href="/lomba/add"><button class="btn btn-success">Tambah Daftar Lomba</button></a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Poster</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no=1;
            $lombas = \App\Lomba::get();
            //for($i = 0; $i<sizeof($lombas); $i++){
            ?>

            @for($i = 0; $i<sizeof($lombas); $i++)
            <tr>
            <th scope="row">{{$lombas[$i]->id}}</th>
                <td><a href="lomba/{{$lombas[$i]->id}}">{{$lombas[$i]->name}}</a></td>
                <td>{{$lombas[$i]->deskripsi}} </td>
                <td><img src="{{$lombas[$i]->poster}}" alt="" height="100" width="100"></td>
                <td>{{$lombas[$i]->tanggal_tutup}} </td>
                <td><a href="/lomba/{{ $lombas[$i]->id}}/edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a> <a href="/lomba/{{$lombas[$i]->id}}/delete" class="btn btn-danger"><i class="fa fa-times"></i></a></td>
            </tr>

            @endfor

         
        </tbody>
    </table>
</div>
@endsection

@section('pagination')
<!-- <div class="pagination">
    <div class="container">

        <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a> 
            </li>
        </ul>
        </nav>
    </div>
</div> -->
@endsection

@section('footer')
<nav class="navbar navbar-expand-lg footer">
  <a class="navbar-brand" href="#">Copyright 2018</a>
</nav>

@endsection