<!-- MEnghubungkan dengan view template master-->
@extends ('bootstrap.blog')
<!--Isis Judul Halaman-->
@section ('judulHalaman','Articles')


@section ('konten')
<h2>Article {{ $id}}</h2>
<p> Selamat datang di halaman Article</p>

@endsection
