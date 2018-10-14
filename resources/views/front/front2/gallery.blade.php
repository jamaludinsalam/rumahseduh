@extends('layouts.layout2')

@section('content')

{{-- <div class="header-lunch parallax0 parallax100" style="background-image: url(&quot;front/front2/images/parallax1.jpg&quot;); background-position: center -20.3333px;">
    <div class="bg1-overlay t-center p-t-170 p-b-165">
            <h2 class="tit4 t-center">Gallery</h2>
    </div>
</div> --}}
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('front/front2/images/bg-02.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
       Our Gallery
    </h2>
</section>	

<section class="sec-blog bg0 p-t-60 p-b-90">
	<div class="container">
		{{-- <div class="p-b-66">
			<h3 class="ltext-105 cl5 txt-center respon1">
				Our Gallery
			</h3>
		</div> --}}
		<div class="row">
			@foreach($galleries as $gallery)
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<a href="{{asset('images/gallery')}}/{{$gallery->image}}">
								<img style="object-fit: cover;    height: 250px;
									width: 100%;" src="{{asset('images/gallery')}}/{{$gallery->image}}" alt="IMG-BLOG">
							</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>




@endsection