@extends('layouts.main')
@section('main')
<section>
    <div class="content-container">
			<header>
			<h1 class="center-text">Product Gallery</h1>
			<h3 class="center-text">Jika Anda adalah bagian dari wanita modern yang tidak dapat keluar rumah tanpa menggunakan makeup, koleksi kosmetik pada Beauty Shop dijamin dapat
				 memenuhi kebutuhan Anda untuk melengkapi koleksi kosmetik. Selamat berbelanja!</h3>
			</header>
			<br>
			<br>
				<!-- <div class="row margin-bottom-30">
                    <div class="col-lg-12">
                        <ul id="filters" class="folio-filters">
                            <li class="current"><a href="#" data-filter="*">All</a></li>
                            <li class=""><a href="#" data-filter=".makanan">Makanan</a></li>
                            <li class=""><a href="#" data-filter=".minuman">Minuman</a></li>
                            <li class=""><a href="#" data-filter=".olahraga">Olahraga</a></li>
                            <li class=""><a href="#" data-filter=".kecantikan">Kecantikan</a></li>
                        </ul>
                    </div>
                </div> -->
				

		<div id="portfolio-content" class="center-text">
			<div class="portfolio-page">
			@foreach ($daftar as $d)
				<div class="portfolio-group">
					<span>{{$d ->jenis}}</span>
					<a class="portfolio-item" href="{{$d->gambar}}">
						<img src="{{$d->gambar}}" alt="image 1"><br>
						<div class="detail">
							<h3>{{$d ->product}}</h3>
							<p>{{$d ->manfaat}}</p>
							<span> Rp. {{$d ->harga}}</span>
							<span class="btn">View</span>
						</div>
					</a>				
			</div>
				
				@endforeach
				
			</div> <!-- page 3 -->		
				<div class="pagination-links">
				<br><br>
					<ul class="nav">
						{{ $daftar->links() }}
					</ul>
				</div> 
		</div>
		<br>
</section>
<section>
	</div>	<!-- /.content-container -->
    <script type="text/javascript" src="{{asset('asset/js/jquery-1.11.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/jquery.easing.1.3.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/modernizr.2.5.3.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script> 
	<script type="text/javascript" src="{{asset('asset/js/templatemo_script.js')}}"></script>
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
	<!-- <script type="text/javascript" src="{{asset('asset/js/isotope.pkgd.min.js')}}"></script>      
    <script type="text/javascript" src="{{asset('asset/js/templatemo-script.js')}}"></script>    
    <script>
        // All images are loaded. Call isotope
        $(window).load(function() {
            var $container = $('#folio-container');
            // init
            $container.isotope({
            // options
            itemSelector: '.folio-item',
            animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                },
            });

            // filter items when filter link is clicked
            jQuery('#filters a').click(function(){
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector });
                return false;
            });

            jQuery('#filters li a').click(function(){

                jQuery('#filters li').removeClass('current');
                jQuery(this).parent().addClass('current');
            });
        });
    </script> -->
</section>
			
@endsection