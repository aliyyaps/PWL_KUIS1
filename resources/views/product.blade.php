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
			<div class="portfolio-page" id="page-1">
			@foreach ($daftar as $d)
				<div class="portfolio-group">
					<a class="portfolio-item" img src="{{asset('asset/images/welcome-divider-lines.png')}}">
						<img src="{{$d->gambar}}" alt="image 1">
						<div class="detail">
							<h3>{{$d ->product}}</h3>
							<p>{{$d ->manfaat}}</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/2-large.jpg">
						<img src="asset/images/2-small.jpg" alt="image 2">
						<div class="detail">
							<h3>Rocky Mountain</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/3-large.jpg">
						<img src="asset/images/3-small.jpg" alt="image 3">
						<div class="detail">
							<h3>Clear River</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/4-large.jpg">
						<img src="asset/images/4-small.jpg" alt="image 4">
						<div class="detail">
							<h3>Rounded Flower</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/5-large.jpg">
						<img src="asset/images/5-small.jpg" alt="image 5">
						<div class="detail">
							<h3>Bustling City</h3>
							<p>Duis ac laoreet mi. Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Sed in molestie lectus. Curabitur non est neque.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/6-large.jpg">
						<img src="asset/images/6-small.jpg" alt="image 6">
						<div class="detail">
							<h3>Retired Leaves</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/7-large.jpg">
						<img src="asset/images/7-small.jpg" alt="image 7">
						<div class="detail">
							<h3>Clean Design</h3>
							<p>Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/8-large.jpg">
						<img src="asset/images/8-small.jpg" alt="image 8">
						<div class="detail">
							<h3>Rock Solid</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
			</div>
			<div class="portfolio-page" id="page-2" style="display:none;">
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/8-large.jpg">
						<img src="asset/images/8-small.jpg" alt="image 8">
						<div class="detail">
							<h3>Wavy Road</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Sed in molestie lectus. Curabitur non est neque.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/7-large.jpg">
						<img src="asset/images/7-small.jpg" alt="image 7">
						<div class="detail">
							<h3>Rocky Mountain</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet. Duis ac laoreet mi.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/6-large.jpg">
						<img src="asset/images/6-small.jpg" alt="image 6">
						<div class="detail">
							<h3>Clear River</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Sed in molestie lectus.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/5-large.jpg">
						<img src="asset/images/5-small.jpg" alt="image 5">
						<div class="detail">
							<h3>Rounded Flower</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/4-large.jpg">
						<img src="asset/images/4-small.jpg" alt="image 4">
						<div class="detail">
							<h3>Bustling City</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/3-large.jpg">
						<img src="asset/images/3-small.jpg" alt="image 3">
						<div class="detail">
							<h3>Retired Leaves</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/2-large.jpg">
						<img src="asset/images/2-small.jpg" alt="image 2">
						<div class="detail">
							<h3>Clean Design</h3>
							<p>Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/1-large.jpg">
						<img src="asset/images/1-small.jpg" alt="image 1">
						<div class="detail">
							<h3>Rock Solid</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
			</div>
			<div class="portfolio-page" id="page-3" style="display:none;">
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/3-large.jpg">
						<img src="asset/images/3-small.jpg" alt="image 3">
						<div class="detail">
							<h3>Wavy Road</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Curabitur non est neque.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/2-large.jpg">
						<img src="asset/images/2-small.jpg" alt="image 2">
						<div class="detail">
							<h3>Rocky Mountain</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet. Duis ac laoreet mi.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/4-large.jpg">
						<img src="asset/images/4-small.jpg" alt="image 4">
						<div class="detail">
							<h3>Clear River</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Sed in molestie lectus.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/1-large.jpg">
						<img src="asset/images/1-small.jpg" alt="image 1">
						<div class="detail">
							<h3>Rounded Flower</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet. </p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/5-large.jpg">
						<img src="asset/images/5-small.jpg" alt="image 5">
						<div class="detail">
							<h3>Bustling City</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Curabitur non est neque.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/6-large.jpg">
						<img src="asset/images/6-small.jpg" alt="image 22">
						<div class="detail">
							<h3>Retired Leaves</h3>
							<p>Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/8-large.jpg">
						<img src="asset/images/8-small.jpg" alt="image 8">
						<div class="detail">
							<h3>Clean Design</h3>
							<p>Vestibulum tincidunt libero urna, ut dignissim purus accumsan nec. Sed in molestie lectus. Curabitur non est neque. Maecenas id luctus ligula.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				<div class="portfolio-group">
					<a class="portfolio-item" href="asset/images/7-large.jpg">
						<img src="asset/images/7-small.jpg" alt="image 7">
						<div class="detail">
							<h3>Rock Solid</h3>
							<p>Duis ac laoreet mi. Maecenas non lorem sed elit molestie tincidunt. Maecenas id luctus ligula. Mauris dignissim ante eu arcu ultricies, at sodales orci aliquet.</p>
							<span class="btn">View</span>
						</div>
					</a>				
				</div>
				@endforeach
			</div> <!-- page 3 -->		
			<div class="pagination">
				<ul class="nav">
					<li>1</li>
					<li>2</li>
					<li>3</li>
				</ul>
			</div>
		</div>
</section>

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
@endsection