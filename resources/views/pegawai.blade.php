@extends('layouts.main')
@section('main')

<div class="content-container">
    <header>
        <h1 class="center-text">Daftar Pegawai</h1>
        <h2 class="center-text">Di bawah ini merupakan Daftar Pegawai dari Perusahaan Beauty Shop</h2>
    </header>
    
    <div class="templatemo-detail content">
        <div class="container">
            <div class="table-responsive">
					<table class="table table-striped custom-table">
						<thead>
							<tr>
							<th scope="col">ID</th>
							<th scope="col">Nama Pegawai</th>
							<th scope="col">Jenis Kelamin</th>
							<th scope="col">Alamat</th>
							<th scope="col">Email</th>
							<th scope="col">Telepon</th>
							</tr>
						</thead>
							<tbody>
							@foreach ($daftar as $d)
								<tr scope="row">
										<td>
										{{$d ->id}}
										</td>
										<td><a href="#">{{$d ->namaPegawai}}</a></td>
										<td>
											@if($d->jenisKelamin==0)
												Laki-laki
											@else
												Perempuan
											@endif
										</td>
										<td>{{$d -> alamat}}</td>
										<td>{{$d -> email}}</td>
										<td>{{$d -> noTelp}}</td>
								</tr>
								@endforeach
							</tbody>
					</table>
					
					<div class="pagination">
						<ul class="nav">
							{{ $daftar->links() }}
						</ul>
					</div>
        </div>	
        
    </div>
</div> <!-- /.content-container -->	

@endsection