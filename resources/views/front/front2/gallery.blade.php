@extends('layouts.layout2')

@section('content')

<div class="header-lunch parallax0 parallax100" style="background-image: url(&quot;front/front2/images/parallax1.jpg&quot;); background-position: center -20.3333px;">
    <div class="bg1-overlay t-center p-t-170 p-b-165">
            <h2 class="tit4 t-center">Gallery</h2>
    </div>
</div>

<div class="section-gallery p-t-118 p-b-100">
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
				All Photo
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".interior">
				Interior
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".food">
				Food
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".events">
				Events
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".guests">
				Vip guests
			</button>
		</div>

		<div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events guests">
				<img src="images/photo-gallery-13.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-13.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
				<img src="images/photo-gallery-14.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-14.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events">
				<img src="images/photo-gallery-15.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-15.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
				<img src="images/photo-gallery-16.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-16.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
				<img src="images/photo-gallery-17.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-17.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior guests">
				<img src="images/photo-gallery-18.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-18.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior">
				<img src="images/photo-gallery-19.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-19.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior">
				<img src="images/photo-gallery-20.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-20.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events">
				<img src="images/photo-gallery-21.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-21.jpg" data-lightbox="gallery"></a>
				</div>
			</div>
		</div>

		<div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
			<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">3</a>
		</div>
	</div>




@endsection