@extends('layouts.main')
@section('main')
<section>
	<div class="content-container">
		<header>
			<h1 class="center-text">Data Pelanggan</h1>
			<h3 class="center-text">Kumpulan data dibawah ini Adalah data pelanggan Beauty Shop.</h3>
		</header>
			<div class="templatemo-detail content">					
				<div class="content">
					<div class="container">
						
					<div class="table-responsive">
					<table class="table table-striped custom-table">
						<thead>
							<tr>
							<th scope="col">ID</th>
							<th scope="col">Photo</th>
							<th scope="col">Nama</th>
							<th scope="col">Jenis Kelamin</th>
							<th scope="col">Telepon</th>
							<th scope="col">Alamat</th>
							<th scope="col">Email</th>
							<th scope="col">Kategori Member</th>
							</tr>
						</thead>
							<tbody>
							@foreach ($pelanggan as $p)
								<tr scope="row">
										<td>
										{{$p ->id}}
										</td>
										<td>
										<img src="{{$p->photo}}">
										</td>
										<td><a href="#">{{$p ->nama}}</a></td>
										
										<td>
											@if($p->jenis_kelamin==0)
												Laki-laki
											@else
												Perempuan
											@endif
										</td>
										<td>{{$p -> telepon}}</td>
										<td>{{$p -> alamat}}</td>
										<td>{{$p -> email}}</td>
										<td>{{$p -> kategori_member}}</td>
								</tr>
								@endforeach
							</tbody>
					</table>
					
					<div class="pagination">
						<ul class="nav">
							{{ $pelanggan->links() }}
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
		<!-- /.content-container -->		
		<section>
			<script src="asset/js/jquery-3.3.1.min.js"></script>
			<script src="asset/js/popper.min.js"></script>
			<script src="asset/js/bootstrap.min.js"></script>
			<script src="asset/js/main.js"></script>
		</section>	
@endsection