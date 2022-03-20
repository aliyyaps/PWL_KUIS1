@extends('layouts.main')
@section('main')
<section>
    <div class="content-container">
			<header>
			<h1 class="center-text">Product Gallery</h1>
			<h2 class="center-text">Jika Anda adalah bagian dari wanita modern yang tidak dapat keluar rumah tanpa menggunakan makeup, koleksi kosmetik pada Beauty Kosmetik dijamin dapat
				 memenuhi kebutuhan Anda untuk melengkapi koleksi kosmetik. Selamat berbelanja!</h2>
			</header>
		<div id="portfolio-content" class="center-text">
			<div class="portfolio-page">
			@foreach ($daftar as $d)
				<div class="portfolio-group">
					<!-- <span class="onsale">Sale</span> -->
					<a class="portfolio-item" img src="{{asset('asset/images/welcome-divider-lines.png')}}">
						<img src="{{$d->gambar}}" alt="image 1">
						<div class="detail">
							<h3>{{$d ->product}}</h3>
							<p>{{$d ->manfaat}}</p>
							<span class="onsale">Sale</span>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				
				@endforeach
			</div> <!-- page 3 -->		
			<div class="pagination-links">
				<ul class="nav">
					{{ $daftar->onEachSide(1)->links() }}
				</ul>
			</div>
		</div>
</section>
<section>
	</div>	<!-- /.content-container -->
    <script type="text/javascript" src="asset/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="asset/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="asset/js/modernizr.2.5.3.min.js"></script>
	<script type="text/javascript" src="asset/js/jquery.magnific-popup.min.js"></script> 
	<script type="text/javascript" src="asset/js/templatemo_script.js"></script>
	<script type="text/javascript">
		$(function () {
			$('.pagination li').click(changePage);
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