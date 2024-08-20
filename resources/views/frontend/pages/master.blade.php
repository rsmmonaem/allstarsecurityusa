@extends('layout.frontend')
@section('title')
    {{ $SeoPage->title }}
@endsection

@section('description')
    {{ $SeoPage->description }}
@endsection

@section('keywords')
    {{ $SeoPage->keywords }}
@endsection


@section('content')
@if($page->slug == 'contact-us-page')
<section class="pt-xl-8">
	<div class="container">
		<div class="row g-4 g-xxl-5">
			<div class="col-xl-9 mx-auto">
				<!-- Image -->
				<img src="{{ asset('frontend/assets/images/bg/02.jpg')}}" class="rounded" alt="contact-bg">

				<!-- Contact form START -->
				<div class="row mt-n5 mt-sm-n7 mt-md-n8">
					<div class="col-11 col-lg-9 mx-auto">
						<div class="card shadow p-4 p-sm-5 p-md-6">
							<!-- Card header -->
							<div class="card-header border-bottom px-0 pt-0 pb-5">
								<!-- Breadcrumb -->
								<nav class="mb-3" aria-label="breadcrumb">
									<ol class="breadcrumb breadcrumb-dots pt-0">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Contact us</li>
									</ol>
								</nav>
								<!-- Title -->
								<h1 class="mb-3 h3">Let's level up your brand, together</h1>
								<p class="mb-0">You can reach us anytime via <a href="#">example@gmail.com</a></p>
							</div>
							<!-- Card body & form -->
							<form class="card-body px-0 pb-0 pt-5">
								<!-- Name -->
								<div class="input-floating-label form-floating mb-4">
									<input type="text" class="form-control bg-transparent" id="floatingName" placeholder="Password">
									<label for="floatingName">Your name</label>
								</div>
								<!-- Email -->
								<div class="input-floating-label form-floating mb-4">
									<input type="email" class="form-control bg-transparent" id="floatingInput" placeholder="name@example.com">
									<label for="floatingInput">Email address</label>
								</div>
								<!-- Number -->
								<div class="input-floating-label form-floating mb-4">
									<input type="text" class="form-control bg-transparent" id="floatingNumber" placeholder="Password">
									<label for="floatingNumber">Phone number</label>
								</div>
								<!-- Message -->
								<div class="input-floating-label form-floating mb-4">
									<textarea class="form-control bg-transparent" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
									<label for="floatingTextarea2">Message</label>
								</div>
								<!-- Button -->
								<button class="btn btn-lg btn-primary mb-0">Send a message</button>
							</form>
						</div>
					</div>
				</div>
				<!-- Contact form END -->
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<Section class="py-0">
	<div class="container">
		<div class="row row-cols-1 row-cols-lg-3 g-4">
			<!-- Address info -->
			<div class="col">
				<div class="card card-body bg-light border p-sm-5">
					<!-- Icon -->
					<div class="mb-4"><i class="bi bi-geo-alt fa-xl text-primary"></i></div>
					<!-- Title -->
					<h6 class="mb-4">Office Address</h6>
					<!-- Office item -->
					<div class="d-flex align-items-center mb-2">
						<!-- Avatar -->
						<div class="avatar avatar-xxs me-2">
							<img class="avatar-img rounded-circle" src="{{ asset('frontend/assets/images/flags/us.svg')}}" alt="avatar">
						</div>
						<span class="heading-color fw-semibold mb-0">US office:</span>
					</div>
					<address class="mb-0">1421 Coburn Hollow Road Metamora, Near Center Point, IL 61548.</address>
				</div>
			</div>

			<!-- Email info -->
			<div class="col">
				<div class="card card-body bg-light border p-sm-5">
					<!-- Icon -->
					<div class="mb-4"><i class="bi bi-envelope fa-xl text-primary"></i></div>
					<!-- Title -->
					<h6 class="mb-3">Email us</h6>
					<p>We're on top of things and aim to respond to all inquiries within 24 hours.</p>
					<a href="#" class="heading-color text-primary-hover text-decoration-underline mb-0">example@gmail.com</a>
				</div>
			</div>

			<!-- Contact info -->
			<div class="col">
				<div class="card card-body bg-light border p-sm-5">
					<!-- Icon -->
					<div class="mb-4"><i class="bi bi-telephone fa-xl text-primary"></i></div>
					<!-- Title -->
					<h6 class="mb-3">Call us</h6>
					<p>Let's work together towards a common goal - get in touch!</p>
					<a href="#" class="heading-color text-primary-hover text-decoration-underline mb-0">(251) 854-6308</a>
				</div>
			</div>

		</div> <!-- Row END -->
	</div>

	<!-- Map -->
	<iframe class="w-100 h-200px h-lg-400px grayscale d-block mt-8" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin" style="margin-bottom: -5px;" aria-hidden="false" tabindex="0"></iframe>	

</Section>
@else
{!! $data !!}

@endif




@endsection

