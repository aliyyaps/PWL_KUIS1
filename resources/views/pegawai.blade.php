@extends('layouts.main')
@section('main')

<div class="content-container">
    <header>
        <h1 class="center-text">Daftar Pegawai</h1>
        <h2 class="center-text">Di bawah ini merupakan Daftar Pegawai dari Perusahaan Beauty Shop</h2>
    </header>
    <div class="templatemo-detail content">
        
        <div class="container">
            <div class="row">
                <table border=1 width=100% align=”center”>
                    <thead>
                        <tr>
                            <th>ID Pegawai</th>
                            <th>Nama Pegawai</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($daftar as $d)
                        <tr>
                            <td>{{$d -> id}}</td>
                            <td>{{$d -> namaPegawai}}</td>
                            <td>{{$d -> jenisKelamin}}</td>
                            <td>{{$d -> alamat}}</td>
                            <td>{{$d -> noTelp}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>	
        
    </div>
</div> <!-- /.content-container -->	

@endsection