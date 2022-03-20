@extends('layouts.main')
@section('main')
<section>
<div class="content-container">
		<header>
							<h1 class="center-text">Data Pelanggan</h1>
							<h2 class="center-text">Nulla semper enim a tincidunt convallis. Ut urna magna, tristique vitae ante sit amet, adipiscing semper diam. Curabitur eget enim vel neque mollis mollis. Aliquam quis venenatis nisi.</h2>
						</header>
						<div class="templatemo-detail content">
							
						<div class="content">
				
				<div class="container">
				
				<div class="table-responsive">

					<table class="table table-striped custom-table">
					<thead>
						<tr>
						<th scope="col">ID</th>
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
								<td><a href="#">{{$p ->nama}}</a></td>
								<td>
								{{$p ->jenis_kelamin}}
									<!-- <small class="d-block">Far far away, behind the word mountains</small> -->
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
			
		<!-- /.content-container -->
			<script type="text/javascript" src="asset/js/jquery-1.11.1.min.js"></script>
			<script type="text/javascript" src="asset/js/jquery.easing.1.3.js"></script>
			<script type="text/javascript" src="asset/js/modernizr.2.5.3.min.js"></script>
			<script type="text/javascript" src="asset/js/jquery.magnific-popup.min.js"></script> 
			<script type="text/javascript" src="asset/js/templatemo_script.js"></script>
			<script type="text/javascript">
				$(function () {
					$('.pagination').click(changePage);
					$('.portfolio-item').magnificPopup({ 
						type: 'image',
						gallery:{
							enabled:true
						}
					});
				});
			</script>
		</section>		
@endsection