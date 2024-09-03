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
<br><br><br><br>
<style>
	#heading {
		padding-left: 76px;
		padding-top: 12px;
		font-family: 'FontAwesome';
	}

	#paragraph {
		padding-left: 76px;
	}

	@media (min-width: 768px) {
		#heading {
			text-align: center !important;
			padding-left: 0;
			padding-top: 12px;
			font-family: 'FontAwesome';
		}

		#paragraph {
			padding-left: 13px;
			padding-right: 13px;
		}

		#sectionx {
			padding-top: 10px !important;
		}
	}

	@media (max-width: 767px) {

		#heading,
		#paragraph {
			padding-left: 15px;
			padding-right: 15px;
		}
	}
</style>
<section class="pt-xl-1" id="sectionx"
	style="background-color: #002E5B; padding-bottom: @if($page->slug == 'about-us-page') 0px @else 2px @endif;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="col-md-12" id="heading">
					@if($page->slug == 'about-us-page')
					<h3 style="font-family: fantasy; color: white;">ABOUT US</h3>
					@else
					<h3 style="font-family: fantasy; color: white;">ALL STAR APPROACH TO SECURITY</h3>
					@endif
				</div>
				<div class="col-md-12" id="paragraph">
					<p style="text-align: justify; color: white;">About Us</p>
					@if($page->slug == 'about-us-page')
					<p style="text-align: justify; color: white;">we pride ourselves on being an American-owned security
						company
						dedicated to safeguarding what
						matters most. Our team of experienced professionals combines cutting-edge technology with a deep
						understanding of security needs to provide reliable and comprehensive protection.
					</p>
					<p style="text-align: justify; color: white;">
						With a
						commitment to excellence and a customer-first approach, we strive to deliver tailored solutions
						that ensure the highest level of safety and peace of mind for our clients. As a trusted partner
						in security, we are dedicated to upholding the highest standards of integrity and
						professionalism in every aspect of our service.
					</p>

					@else
					<p style="text-align: justify; color: white;">
						All Star Security is committed to providing consistent, high-quality service which is reflected
						in the development and implementation of client-focused quality assurance.
					</p>
					@endif


				</div>
			</div>
			@if($page->slug == 'about-us-page')
			<div class="col-md-6">
				<img src="https://allstarsecurityusa.com/wp-content/uploads/2023/05/WhatsApp-Image-2023-05-04-at-8.01.24-AM-1-e1683202062354.jpeg"
					alt="">
			</div>
			@endif
		</div>
	</div>
</section>

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
							<form class="card-body px-0 pb-0 pt-5" action="{{ route('contact-us.store') }}" method="post">
								@csrf
								<!-- Name -->
								<div class="input-floating-label form-floating mb-4">
									<input type="text" name="name" class="form-control bg-transparent" id="floatingName" placeholder="Password">
									<label for="floatingName">Your name</label>
								</div>
								<!-- Email -->
								<div class="input-floating-label form-floating mb-4">
									<input type="email" name="email" class="form-control bg-transparent" id="floatingInput" placeholder="name@example.com">
									<label for="floatingInput">Email address</label>
								</div>
								<!-- Number -->
								<div class="input-floating-label form-floating mb-4">
									<input type="text" name="phone" class="form-control bg-transparent" id="floatingNumber" placeholder="Password">
									<label for="floatingNumber">Phone number</label>
								</div>
								<!-- Message -->
								<div class="input-floating-label form-floating mb-4">
									<textarea class="form-control bg-transparent" name="message" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
									<label for="floatingTextarea2">Message</label>
								</div>
								<!-- Button -->
								<button type="submit" class="btn btn-lg btn-primary mb-0">Send a message</button>
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
							<img class="avatar-img rounded-circle"
								src="{{ asset('frontend/assets/images/flags/us.svg')}}" alt="avatar">
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
					<a href="#"
						class="heading-color text-primary-hover text-decoration-underline mb-0">example@gmail.com</a>
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
					<a href="#" class="heading-color text-primary-hover text-decoration-underline mb-0">(251)
						854-6308</a>
				</div>
			</div>

		</div> <!-- Row END -->
	</div>

	<!-- Map -->
	<iframe class="w-100 h-200px h-lg-400px grayscale d-block mt-8"
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin"
		style="margin-bottom: -5px;" aria-hidden="false" tabindex="0"></iframe>

</Section>


@elseif ($page->slug == 'about-us-page')

<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5 mt-3 ">
			<h3 class="text-center mb-3">About Us</h3>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://www.truckdriverssalary.com/wp-content/uploads/2019/06/truck-dispatch-services.jpg"
					alt="">
			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<h5>Who We Are?</h5>
				<p style="text-align: justify;">

					AMERICAN OWNED SECURITY COMPANY THAT HAS BEEN OPERATING SINCE 2005, WITH LOCALLY RESPONSIVE OFFICES
					THROUGHOUT FLORIDA WE PROVIDE PREMIER SECURITY SERVICES.
					Each business has its particular security requirements and requirements. All-star Security is aware
					that there are no two clients that are identical and every program is tailored to meet the specific
					requirements of each business.
				</p>
				<p style="text-align: justify;">
					We provide daily, weekly, and long-term high-quality security services. All-star believes that more
					effective selection and training of our security personnel is essential in delivering the services
					the clients want and need. They need the support they receive continuously.
				</p>
				<p style="text-align: justify;">
					WE PROVIDE CAREER PATHS FOR MANY SECURITY PROFESSIONALS HAPPILY SERVING OUR MAIN CLIENTS IN A RANGE
					OF INDUSTRIES. AT ALL STAR SECURITY SERVICES, OUR TACTICAL MISSION IS TO MAXIMIZE YOUR ROI BY
					BRINGING YOU THE BEST PEOPLE, MOST ADVANCED TECHNOLOGY, AND GREATEST RESOURCES IN THE SECURITY GUARD
					SECTOR.
				</p>
			</div>
		</div>

		<div class="row gx-5 mt-3">
			<div class="col-md-6 mb-3" style="float: right;">
				<p style="text-align: justify;">
					TO GET THERE, WE ENSURE EVERY ALL-STAR PROFESSIONAL ADHERES TO A DETAILED SET OF VALUES OF
					EXCEPTIONAL SERVICE. WE TAKE WHAT WE DO PERSONAL AND UNDERSTAND THE DEEP FINANCIAL AND PROFESSIONAL
					RESPONSIBILITIES WE HAVE TO OUR CLIENTS AND THE POSITIVE IMPACT WE NEED TO STRIVE TO EXECUTE EACH
					DAY THROUGH OUTSTANDING SERVICE.
				</p>
				<p style="text-align: justify;">
					EVERY ALL-STAR PROFESSIONAL IS TRAINED ON OUR CORE PRINCIPLES OF SERVICE AND HOW EVERYONE IS
					EXPECTED TO LIVE UP TO THEM EACH AND EVERY DAY ON THE JOB. THE GROWTH OF OUR PROFESSIONALS IS A TOP
					PRIORITY FOR US EVERYONE IS ON A TEAM WORKING TOWARDS A GOAL.
				</p>

			</div>
			<div class="col-md-6 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://cdn-abogo.nitrocdn.com/hMBmyvIAiyCQjFUovuKmvztXEVwuNrqT/assets/images/optimized/rev-a2af0ea/answerfirst.com/wp-content/uploads/2019/01/Customer-Service-Reps.jpg"
					alt="">
			</div>

		</div>
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
							<img class="avatar-img rounded-circle"
								src="{{ asset('frontend/assets/images/flags/us.svg')}}" alt="avatar">
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
					<a href="#"
						class="heading-color text-primary-hover text-decoration-underline mb-0">example@gmail.com</a>
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
					<a href="#" class="heading-color text-primary-hover text-decoration-underline mb-0">(251)
						854-6308</a>
				</div>
			</div>

		</div> <!-- Row END -->
	</div>

	<!-- Map -->
	<iframe class="w-100 h-200px h-lg-400px grayscale d-block mt-8"
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin"
		style="margin-bottom: -5px;" aria-hidden="false" tabindex="0"></iframe>

</Section>

@elseif ($page->slug == 'Security-Services')
{{-- {!! $data !!} --}}
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center">Armed Security Guard</h3>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://allstarsecurityusa.com/wp-content/uploads/2024/05/portrait-male-security-guard-with-uniform-2048x1365.jpg"
					alt="">
			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<p style="text-align: justify;">
					We here at All-Star Security, offer armed guards for our clients who are VIPs or businesses to
					protect for preventing identity theft. We employ experienced security guards that have extensive
					instruction in a variety of areas of self-defense as well as first-aid techniques. We update our
					equipment frequently to ensure that we satisfy your needs for the best protection. We are well-known
					for our speedy responses, which enable us to respond quickly in an emergency situation before it
					becomes more serious.

					Our personnel on patrol is skilled in locating criminals who have walked into the premises of our
					clients with the intention to commit crimes. We only hire army veterans as well as former officers
					of the police to ensure that you receive full security protection in an emergency. With All-Star
					Security, our utmost desire is to ensure that your business is secure from danger by providing the
					highest quality solutions at reasonable costs.
				</p>
			</div>
		</div>

		<div class="row gx-5">
			<div class="col-md-8 mb-3" style="float: right;">
				<p style="text-align: justify;">The sensitive information you share with us will be treated as complete
					confidentiality and will not
					be divulged to anyone who does not require to know about it. Your safety is our top priority. If you
					contact us for security guards we offer an armed security service that provides security with every
					way to guarantee your security by providing the following services:</p>
				<p style="text-align: justify;">Armed defense equipment infrared devices that allow for night vision
					Surveillance equipment There are
					numerous others… In order to provide you with security services that are armed We do our best and
					provide the most qualified personnel who can handle all aspects, like first aid.</p>
				<p style="text-align: justify;">We guarantee that your rights will be secured by our company. If you’re
					in search of the best
					security to protect yourself from any attack, consider All-Star Security right away!</p>
				</p>
			</div>
			<div class="col-md-4 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://allstarsecurityusa.com/wp-content/uploads/elementor/thumbs/SO-scaled-qnwlj6hyc6ohzftl0s3ad0a8lothb7y5quz4iz2vzw.jpg"
					alt="">
			</div>

		</div>
	</div>
</section>
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center">Unarmed Security Guard </h3>
			<p style="text-align: center;">We provide unarmed security services to be able to provide outstanding
				customer service. Quality customer service is provided by All Star Security unarmed officers across
				Florida.</p>
			<div class="col-md-6 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://allstarsecurityusa.com/wp-content/uploads/2023/05/IMG-1919-min.jpg" alt="">
				<div style="float: left">
					<p style="text-align: justify;">Unarmed security in Florida officer is also able to provide services
						to
						multiple locations, along with being involved in the hiring process of potential employees for a
						place of business. This allows for more time-saving and cost-efficiency at work.

						It is also a great idea to include some information about the salary that can be earned while
						working as an unarmed security officer.

						The salary of an unarmed security officer is usually between $9 and $11 per hour, on average.
						However, there are many factors that can influence this number for any given place or location
						of
						work.

						For more information regarding the salary and compensation that can be earned as an unarmed
						security
						officer, it is recommended to consult with a professional where we are able to provide
						outstanding
						service Unarmed Security Guard Florida.
					</p>
				</div>
			</div>
			<div class="col-md-6 mb-3" style="float: right;">
				<p style="text-align: justify;">
					There are many types of security officers. However unarmed security officers can help in providing
					excellent customer care, while also providing high-quality service to customers at any given place
					or time that is needed. By working with an unarmed security officer service, patrons will be able to
					know that their safety and well-being are always being met throughout the area they are working at.

					Unarmed security officers are often a great first impression of a location. A place of business can
					be shown as professional and of quality through the presence of unarmed security officers. Also,
					clients who feel safe may want to use the services more if they know that their safety is being met
					by an unarmed security officer service. The presence of an unarmed security officer service is often
					one that brings peace of mind to many clients.
				</p>
				<img style=" float: left; "
					src="https://allstarsecurityusa.com/wp-content/uploads/2023/05/IMG-1920-min.jpg" alt="">
			</div>

		</div>

		<div class="row gx-5">
			<div class="col-md-12 mb-3" style="float: left;">

				<p style="text-align: justify;">

					The costs of education and training for working as an unarmed security guard usually take about five
					weeks for anyone new to this field of work. However many other factors can influence the total cost
					of training for any given person looking to become an unarmed security guard.
				</p>
				<p style="text-align: justify;">
					To learn more about how much it costs to train as an unarmed security officer, please consult with a
					professional in this area where we can provide excellent service.
				</p>
				<p style="text-align: justify;">
					We can offer the necessary training and education required for unarmed security guards so they can
					work in a safe environment.
				</p>
				<p style="text-align: justify;">
					Customer service is an outstanding quality that unarmed security officers have the ability to
					provide. With their presence, they are able to create a better experience for clients where ever
					they may be. They help provide peace of mind and safety to those who need it.
				</p>
				<p style="text-align: justify;">
					Unarmed security officers also provide a first impression for those looking at potential places of
					business or work. The presence of unarmed security officers can bring peace of mind and show clients
					that their safety and well-being are being taken care of, which can influence possible future
					customers.

				</p>
			</div>


		</div>
	</div>
</section>
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center">Armed Security Guard</h3>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://allstarsecurityusa.com/wp-content/uploads/2023/05/WhatsApp-Image-2023-05-04-at-8.01.24-AM.jpeg"
					alt="">
			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<p style="text-align: justify;">
					The security guard’s job is extremely important because they are responsible for keeping us all
					safe. With security in mind, one company that has been in business in Florida since 2005 providing
					security in South Florida is All star security services.
				</p>
				<p style="text-align: justify;">
					All star security services provide security guards that are well trained, courteous, and vigilant.
					They also have security officers that protect commercial establishments throughout the entire state
					of Florida including Boca Raton security.
				</p>
				<p style="text-align: justify;">
					With their experience in security service, they have adapted to the changing times by incorporating
					security technology in their security system. This includes access control systems, security
					cameras, security alarms, and state-of-the-art security monitoring.
				</p>

				<p style="text-align: justify;">
					The sensitive information you share with us will be treated as complete confidentiality and will not
					be divulged to anyone who does not require to know about it. Your safety is our top priority. If you
					contact us for security guards we offer an armed security service that provides security with every
					way to guarantee your security by providing the following services:

					Armed defense equipment infrared devices that allow for night vision Surveillance equipment There
					are numerous others… In order to provide you with security services that are armed We do our best
					and provide the most qualified personnel who can handle all aspects, like first aid.Armed defense
					equipment infrared devices that allow for night vision Surveillance equipment There are numerous
					others… In order to provide you with security services that are armed We do our best and provide the
					most qualified personnel who can handle all aspects, like first aid.

					We guarantee that your rights will be secured by our company. If you’re in search of the best
					security to protect yourself from any attack, consider All-Star Security right away!
				</p>
			</div>
		</div>

		<div class="row gx-5">
			<div class="col-md-8 mb-3" style="float: right;">
				<p style="text-align: justify;">The sensitive information you share with us will be treated as complete
					confidentiality and will not
					be divulged to anyone who does not require to know about it. Your safety is our top priority. If you
					contact us for security guards we offer an armed security service that provides security with every
					way to guarantee your security by providing the following services:</p>
				<p style="text-align: justify;">Armed defense equipment infrared devices that allow for night vision
					Surveillance equipment There are
					numerous others… In order to provide you with security services that are armed We do our best and
					provide the most qualified personnel who can handle all aspects, like first aid.</p>
				<p style="text-align: justify;">We guarantee that your rights will be secured by our company. If you’re
					in search of the best
					security to protect yourself from any attack, consider All-Star Security right away!</p>
				</p>
			</div>
			<div class="col-md-4 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://allstarsecurityusa.com/wp-content/uploads/2023/05/IMG-2153-1536x2048.jpg" alt="">
			</div>

		</div>
	</div>
</section>
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center">Security Surveillance</h3>
			<p style="text-align: justify;">When you look for a professional security company in Florida you need a
				security guard service that provides security guards with high moral standards. With security services
				like security alarms, security cameras and access control systems security can be provided at your home
				or office to give optimum security protection.</p>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://getsafeandsound.com/wp-content/uploads/2022/01/security-camera-monitoring-service.jpg"
					alt="">
			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<p style="text-align: justify;">
					With the increase in crime rate, it is essential to go for professional security companies that
					provide security officers that are fully trained, experienced and skilled. These professionals wear
					uniforms according to the company they work for giving them a serious look due to which no one dares
					challenge them.
				</p>
				<p style="text-align: justify;">When you need security for your business All star security Services
					provides security officers of all ages including retired law enforcement agents. Along with
					providing every type of security service, it also promises good customer relations by helping
					customers plan their realistic requirements based on various factors like security risks, security
					requirements, and security issues.
				</p>
				<p style="text-align: justify;">With a good security system, security services for your home or business
					All star security Guard Services provides security officers that are friendly, helpful, and can
					communicate well with customers. They keep themselves informed about the latest security technology
					available in the market to suggest high-quality security products as per customer needs.
				</p>
			</div>
		</div>

		<div class="row gx-5">
			<div class="col-md-6 mb-3" style="float: right;">


				<p style="text-align: justify;">In this competitive world, security has become a very big issue as all
					types of businesses must protect their interests from competitors or their rivals who want to steal
					business secrets. In order to show the real picture of the company, they hire expert security
					companies like All star security services that provide fully equipped state-of-the-art security
					systems for your home or office.
				</p>
				<p style="text-align: justify;">
					The professional security services for your home security guard
					service gives security officers who are experienced, trained, and skilled to serve you with security
					services that match your requirements. Security can be provided for individuals and families,
					security companies and businesses, and institutions.When it comes to hiring security guards security
					guard service provides highly trained security professionals that professionally deal with
					customers. They wear uniforms according to the company they work for giving them a smart look which
					creates an impression of authority on everyone.</p>
				</p>
			</div>
			<div class="col-md-6 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://s.yimg.com/ny/api/res/1.2/wt8zvTPSKfxEc4oafsSRKg--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTM1OQ--/https://media.zenfs.com/en/insidermonkey.com/f19224defcc7729b058ac2b2e8bb6d1b"
					alt="">
			</div>
			<p style="text-align: justify;">
				The best part about security guard service is that it offers fully equipped state-of-the-art security
				systems at your home or office to give optimum security protection. These devices include door alarms,
				smoke detectors, alarm systems, access control systems, etc. With the crime rate, people feel very
				insecure.
			</p>
		</div>
	</div>
</section>

@elseif ($page->slug == 'armed-security-guard')
{{-- {!! $data !!} --}}

<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center">Armed Security Guard</h3>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://allstarsecurityusa.com/wp-content/uploads/2024/05/portrait-male-security-guard-with-uniform-2048x1365.jpg"
					alt="">
			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<p style="text-align: justify;">
					We here at All-Star Security, offer armed guards for our clients who are VIPs or businesses to
					protect for preventing identity theft. We employ experienced security guards that have extensive
					instruction in a variety of areas of self-defense as well as first-aid techniques. We update our
					equipment frequently to ensure that we satisfy your needs for the best protection. We are well-known
					for our speedy responses, which enable us to respond quickly in an emergency situation before it
					becomes more serious.

					Our personnel on patrol is skilled in locating criminals who have walked into the premises of our
					clients with the intention to commit crimes. We only hire army veterans as well as former officers
					of the police to ensure that you receive full security protection in an emergency. With All-Star
					Security, our utmost desire is to ensure that your business is secure from danger by providing the
					highest quality solutions at reasonable costs.
				</p>
			</div>
		</div>

		<div class="row gx-5">
			<div class="col-md-8 mb-3" style="float: right;">
				<p style="text-align: justify;">The sensitive information you share with us will be treated as complete
					confidentiality and will not
					be divulged to anyone who does not require to know about it. Your safety is our top priority. If you
					contact us for security guards we offer an armed security service that provides security with every
					way to guarantee your security by providing the following services:</p>
				<p style="text-align: justify;">Armed defense equipment infrared devices that allow for night vision
					Surveillance equipment There are
					numerous others… In order to provide you with security services that are armed We do our best and
					provide the most qualified personnel who can handle all aspects, like first aid.</p>
				<p style="text-align: justify;">We guarantee that your rights will be secured by our company. If you’re
					in search of the best
					security to protect yourself from any attack, consider All-Star Security right away!</p>
				</p>
			</div>
			<div class="col-md-4 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://allstarsecurityusa.com/wp-content/uploads/elementor/thumbs/SO-scaled-qnwlj6hyc6ohzftl0s3ad0a8lothb7y5quz4iz2vzw.jpg"
					alt="">
			</div>

		</div>
	</div>
</section>

@elseif($page->slug == 'unarmed-security-guard')
{{-- {!! $data !!} --}}
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center">Unarmed Security Guard </h3>
			<p style="text-align: center;">We provide unarmed security services to be able to provide outstanding
				customer service. Quality customer service is provided by All Star Security unarmed officers across
				Florida.</p>
			<div class="col-md-6 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://allstarsecurityusa.com/wp-content/uploads/2023/05/IMG-1919-min.jpg" alt="">
				<div style="float: left">
					<p style="text-align: justify;">Unarmed security in Florida officer is also able to provide services
						to
						multiple locations, along with being involved in the hiring process of potential employees for a
						place of business. This allows for more time-saving and cost-efficiency at work.

						It is also a great idea to include some information about the salary that can be earned while
						working as an unarmed security officer.

						The salary of an unarmed security officer is usually between $9 and $11 per hour, on average.
						However, there are many factors that can influence this number for any given place or location
						of
						work.

						For more information regarding the salary and compensation that can be earned as an unarmed
						security
						officer, it is recommended to consult with a professional where we are able to provide
						outstanding
						service Unarmed Security Guard Florida.
					</p>
				</div>
			</div>
			<div class="col-md-6 mb-3" style="float: right;">
				<p style="text-align: justify;">
					There are many types of security officers. However unarmed security officers can help in providing
					excellent customer care, while also providing high-quality service to customers at any given place
					or time that is needed. By working with an unarmed security officer service, patrons will be able to
					know that their safety and well-being are always being met throughout the area they are working at.

					Unarmed security officers are often a great first impression of a location. A place of business can
					be shown as professional and of quality through the presence of unarmed security officers. Also,
					clients who feel safe may want to use the services more if they know that their safety is being met
					by an unarmed security officer service. The presence of an unarmed security officer service is often
					one that brings peace of mind to many clients.
				</p>
				<img style=" float: left; "
					src="https://allstarsecurityusa.com/wp-content/uploads/2023/05/IMG-1920-min.jpg" alt="">
			</div>

		</div>

		<div class="row gx-5">
			<div class="col-md-12 mb-3" style="float: left;">

				<p style="text-align: justify;">

					The costs of education and training for working as an unarmed security guard usually take about five
					weeks for anyone new to this field of work. However many other factors can influence the total cost
					of training for any given person looking to become an unarmed security guard.
				</p>
				<p style="text-align: justify;">
					To learn more about how much it costs to train as an unarmed security officer, please consult with a
					professional in this area where we can provide excellent service.
				</p>
				<p style="text-align: justify;">
					We can offer the necessary training and education required for unarmed security guards so they can
					work in a safe environment.
				</p>
				<p style="text-align: justify;">
					Customer service is an outstanding quality that unarmed security officers have the ability to
					provide. With their presence, they are able to create a better experience for clients where ever
					they may be. They help provide peace of mind and safety to those who need it.
				</p>
				<p style="text-align: justify;">
					Unarmed security officers also provide a first impression for those looking at potential places of
					business or work. The presence of unarmed security officers can bring peace of mind and show clients
					that their safety and well-being are being taken care of, which can influence possible future
					customers.

				</p>
			</div>


		</div>
	</div>
</section>

@elseif($page->slug == 'security-patrol-services')
{{-- {!! $data !!} --}}
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center">Armed Security Guard</h3>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://allstarsecurityusa.com/wp-content/uploads/2023/05/WhatsApp-Image-2023-05-04-at-8.01.24-AM.jpeg"
					alt="">
			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<p style="text-align: justify;">
					The security guard’s job is extremely important because they are responsible for keeping us all
					safe. With security in mind, one company that has been in business in Florida since 2005 providing
					security in South Florida is All star security services.
				</p>
				<p style="text-align: justify;">
					All star security services provide security guards that are well trained, courteous, and vigilant.
					They also have security officers that protect commercial establishments throughout the entire state
					of Florida including Boca Raton security.
				</p>
				<p style="text-align: justify;">
					With their experience in security service, they have adapted to the changing times by incorporating
					security technology in their security system. This includes access control systems, security
					cameras, security alarms, and state-of-the-art security monitoring.
				</p>

				<p style="text-align: justify;">
					The sensitive information you share with us will be treated as complete confidentiality and will not
					be divulged to anyone who does not require to know about it. Your safety is our top priority. If you
					contact us for security guards we offer an armed security service that provides security with every
					way to guarantee your security by providing the following services:

					Armed defense equipment infrared devices that allow for night vision Surveillance equipment There
					are numerous others… In order to provide you with security services that are armed We do our best
					and provide the most qualified personnel who can handle all aspects, like first aid.Armed defense
					equipment infrared devices that allow for night vision Surveillance equipment There are numerous
					others… In order to provide you with security services that are armed We do our best and provide the
					most qualified personnel who can handle all aspects, like first aid.

					We guarantee that your rights will be secured by our company. If you’re in search of the best
					security to protect yourself from any attack, consider All-Star Security right away!
				</p>
			</div>
		</div>

		<div class="row gx-5">
			<div class="col-md-8 mb-3" style="float: right;">
				<p style="text-align: justify;">The sensitive information you share with us will be treated as complete
					confidentiality and will not
					be divulged to anyone who does not require to know about it. Your safety is our top priority. If you
					contact us for security guards we offer an armed security service that provides security with every
					way to guarantee your security by providing the following services:</p>
				<p style="text-align: justify;">Armed defense equipment infrared devices that allow for night vision
					Surveillance equipment There are
					numerous others… In order to provide you with security services that are armed We do our best and
					provide the most qualified personnel who can handle all aspects, like first aid.</p>
				<p style="text-align: justify;">We guarantee that your rights will be secured by our company. If you’re
					in search of the best
					security to protect yourself from any attack, consider All-Star Security right away!</p>
				</p>
			</div>
			<div class="col-md-4 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://allstarsecurityusa.com/wp-content/uploads/2023/05/IMG-2153-1536x2048.jpg" alt="">
			</div>

		</div>
	</div>
</section>

@elseif ($page->slug == 'security-surveillance')
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center">Security Surveillance</h3>
			<p style="text-align: justify;">When you look for a professional security company in Florida you need a
				security guard service that provides security guards with high moral standards. With security services
				like security alarms, security cameras and access control systems security can be provided at your home
				or office to give optimum security protection.</p>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://getsafeandsound.com/wp-content/uploads/2022/01/security-camera-monitoring-service.jpg"
					alt="">
			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<p style="text-align: justify;">
					With the increase in crime rate, it is essential to go for professional security companies that
					provide security officers that are fully trained, experienced and skilled. These professionals wear
					uniforms according to the company they work for giving them a serious look due to which no one dares
					challenge them.
				</p>
				<p style="text-align: justify;">When you need security for your business All star security Services
					provides security officers of all ages including retired law enforcement agents. Along with
					providing every type of security service, it also promises good customer relations by helping
					customers plan their realistic requirements based on various factors like security risks, security
					requirements, and security issues.
				</p>
				<p style="text-align: justify;">With a good security system, security services for your home or business
					All star security Guard Services provides security officers that are friendly, helpful, and can
					communicate well with customers. They keep themselves informed about the latest security technology
					available in the market to suggest high-quality security products as per customer needs.
				</p>
			</div>
		</div>

		<div class="row gx-5">
			<div class="col-md-6 mb-3" style="float: right;">


				<p style="text-align: justify;">In this competitive world, security has become a very big issue as all
					types of businesses must protect their interests from competitors or their rivals who want to steal
					business secrets. In order to show the real picture of the company, they hire expert security
					companies like All star security services that provide fully equipped state-of-the-art security
					systems for your home or office.
				</p>
				<p style="text-align: justify;">
					The professional security services for your home security guard
					service gives security officers who are experienced, trained, and skilled to serve you with security
					services that match your requirements. Security can be provided for individuals and families,
					security companies and businesses, and institutions.When it comes to hiring security guards security
					guard service provides highly trained security professionals that professionally deal with
					customers. They wear uniforms according to the company they work for giving them a smart look which
					creates an impression of authority on everyone.</p>
				</p>
			</div>
			<div class="col-md-6 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://s.yimg.com/ny/api/res/1.2/wt8zvTPSKfxEc4oafsSRKg--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTM1OQ--/https://media.zenfs.com/en/insidermonkey.com/f19224defcc7729b058ac2b2e8bb6d1b"
					alt="">
			</div>
			<p style="text-align: justify;">
				The best part about security guard service is that it offers fully equipped state-of-the-art security
				systems at your home or office to give optimum security protection. These devices include door alarms,
				smoke detectors, alarm systems, access control systems, etc. With the crime rate, people feel very
				insecure.
			</p>
		</div>
	</div>
</section>

@elseif ($page->slug == 'executive-protection-service')
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center">Executive Protection Service</h3>
			<p style="text-align: justify;">At Allstar Security Service, we understand the unique security needs of
				high-profile individuals, corporate executives, celebrities, and public figures. Our Executive
				Protection Service is meticulously crafted to provide unparalleled safety and peace of mind for our
				clients in Florida, USA .</p>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://rangerguard.net/wp-content/uploads/2021/10/shutterstock_768847708.jpg"
					alt="">
			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<p style="text-align: justify;">
					Risk Assessment: Our expert security team conducts a thorough risk assessment tailored to each
					client’s specific circumstances and requirements. We analyze potential threats, vulnerabilities, and
					security gaps to develop a personalized protection strategy.
				</p>
				<p style="text-align: justify;">Highly Trained Security Personnel: Our elite security personnel are
					rigorously trained in advanced defensive tactics, evasive driving techniques, threat assessment, and
					crisis management. With backgrounds in law enforcement, military, and private security, our team
					brings a wealth of experience and expertise to ensure the highest level of protection.
				</p>
				<p style="text-align: justify;">Discreet and Professional Approach: We prioritize discretion and
					professionalism in all our interactions. Our security personnel are trained to blend seamlessly into
					their surroundings while maintaining a vigilant watch over our clients. Whether attending
					high-profile events, traveling, or conducting daily activities, we ensure that our presence is
					unobtrusive yet highly effective.
				</p>
			</div>
		</div>

		<div class="row gx-5">
			<div class="col-md-6 mb-3" style="float: right;">


				<p style="text-align: justify;">Customized Security Solutions: Recognizing that every client’s security
					needs are unique, we offer customized security solutions tailored to individual preferences and
					circumstances. From executive protection during business meetings to personal security during
					leisure activities, we adapt our services to meet the evolving needs of our clients.
				</p>
				<p style="text-align: justify;">
					Emergency Response and Crisis Management: In the event of a security breach or emergency situation,
					our team is trained to act swiftly and decisively to ensure the safety of our clients. We have
					established protocols for crisis management, including evacuation procedures, secure communication
					channels, and coordination with local law enforcement agencies.
				</p>	
				<p style="text-align: justify;">Trusted Partner for Executive Security: Allstar Security Service is dedicated to providing unmatched
					executive protection services with integrity, professionalism, and discretion. We are committed to
					building long-term relationships based on trust, reliability, and the highest standards of security
					excellence.</p>
				</p>
			</div>
			<div class="col-md-6 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://csi-securesolutions.com/wp-content/uploads/2020/10/executive-protection.jpg"
					alt="">
			</div>
			<p style="text-align: justify;">

			</p>
		</div>
	</div>
</section>

@elseif ($page->slug == 'residential-security')
{{-- {!! $data !!} --}}
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center">Residential Security Solutions</h3>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://www.cornerstoneprotection.com/wp-content/uploads/2019/08/residential-and-commercial-security-systems-cornerstone-protection.jpg"
					alt="">
			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<p style="text-align: justify;">
					In today’s world, ensuring the safety and security of your home is more important than ever.
					Comprehensive residential security solutions are designed to provide peace of mind, protecting your
					property and loved ones around the clock. These systems combine the latest technology with
					user-friendly features to create a robust defense against potential threats.
				</p>
				<p style="text-align: justify;">At the core of modern residential security are sophisticated alarm
					systems. These systems can detect unauthorized entry through various sensors, such as door and
					window contacts, motion detectors, and glass break sensors. When a potential breach is detected, the
					system triggers an alarm, alerting both the occupants and the monitoring service, which can dispatch
					emergency services if needed.
				</p>
				<p style="text-align: justify;">CCTV cameras are another crucial component of residential security.
					High-definition cameras placed around the exterior and interior of your home provide real-time
					surveillance and recording. Many systems offer remote access through mobile apps, allowing you to
					monitor your property from anywhere in the world. This feature not only deters potential intruders
					but also provides valuable evidence in the event of an incident.
				</p>
			</div>
		</div>

		<div class="row gx-5">
			<div class="col-md-6 mb-3" style="float: right;">


				<p style="text-align: justify;">Smart home integration is becoming increasingly popular in residential
					security systems. These systems can connect to your home’s Wi-Fi network, enabling you to control
					and monitor security features from your smartphone or tablet. Smart locks, for instance, allow you
					to lock and unlock doors remotely, while smart lighting can be programmed to simulate your presence
					even when you’re away.In summary, a well-designed residential security system offers comprehensive
					protection by combining alarm systems, surveillance cameras, smart home integration, and
					environmental monitoring. Investing in such a system provides not only a deterrent against crime but
					also the assurance that your home is safeguarded against various threats, contributing to a safer
					and more secure living environment.</p>
				</p>
			</div>
			<div class="col-md-6 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://www.gensecurity.com/hubfs/Blog/8-Things-You-Need-In-Your-Advanced-Home-Security-System.jpg"
					alt="">
			</div>

		</div>
	</div>
</section>

@elseif ($page->slug == 'commercial-security')
{{-- {!! $data !!} --}}
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center">Commercial Security Solutions</h3>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://wincon-security.com/wp-content/uploads/2023/11/Wincon_-May-15-2021-370-1210x423.jpg"
					alt="">
				<img style=" float: left; " src="https://www.selectsecurity.com.au/wp-content/uploads/2019/11/1.jpg"
					alt="">
			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<p style="text-align: justify;">
					In the competitive landscape of today’s business world, securing your commercial property is crucial
					to maintaining operational continuity and safeguarding assets. Advanced commercial security
					solutions are tailored to meet the complex needs of businesses, offering robust protection against a
					range of threats while ensuring peace of mind for owners and employees.
				</p>
				<p style="text-align: justify;">Central to commercial security systems are integrated alarm systems.
					These systems are designed to detect unauthorized access through a combination of high-tech sensors,
					including door and window contacts, motion detectors, and perimeter sensors. In the event of a
					breach, the system triggers an alarm that alerts both on-site personnel and remote monitoring
					services, which can then coordinate a response with local law enforcement or emergency services.
				</p>
				<p style="text-align: justify;">
					Video surveillance plays a pivotal role in modern commercial security.
					High-definition CCTV cameras can be strategically placed both inside and outside your property to
					monitor and record activities in real-time. Advanced systems often feature capabilities like remote
					access via mobile apps, allowing you to view live footage and access recorded videos from anywhere.
					This not only deters potential criminals but also provides valuable evidence in case of incidents.
				</p>
				<p style="text-align: justify;">
					Access control systems are another critical component of commercial security. These systems manage
					and monitor entry to various areas within your business, using methods such as keycards, biometric
					scanners, or PIN codes. By controlling who has access to specific zones, you can enhance security
					and ensure that sensitive areas are protected from unauthorized entry.


				</p>
			</div>
		</div>

		<div class="row gx-5">
			<div class="col-md-6 mb-3" style="float: right;">

				<p style="text-align: justify;">
					Alarm monitoring services offer an additional layer of security. These services provide 24/7
					surveillance of your security system, ensuring that any alarms or alerts are responded to promptly.
					Monitoring centers can dispatch security personnel or law enforcement to your location in case of an
					emergency, helping to mitigate potential damage or loss.
				</p>
				<p style="text-align: justify;">
					Environmental monitoring is also essential in a commercial setting. Systems that include smoke
					detectors, carbon monoxide detectors, and flood sensors can alert you to hazardous conditions before
					they escalate. This proactive approach helps protect your property and ensures the safety of your
					employees and customers.
				</p>
				<p style="text-align: justify;">
					In conclusion, advanced commercial security solutions provide comprehensive protection through
					integrated alarm systems, video surveillance, access control, and environmental monitoring. By
					investing in a robust security system, businesses can safeguard their assets, protect their
					employees, and maintain operational continuity, ensuring a secure and resilient business
					environment.
				</p>
				</p>
			</div>
			<div class="col-md-6 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://1973249.fs1.hubspotusercontent-na1.net/hubfs/1973249/Video%20Surveillance%20Cameras_blog.jpg"
					alt="">
			</div>

		</div>
	</div>
</section>

@elseif ($page->slug == 'event-security')
{{-- {!! $data !!} --}}
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center"> Event Security Solutions</h3>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://www.centralprotection.ca/wp-content/uploads/2022/09/event-security.jpg" alt="">
				<img style=" float: left; "
					src="https://www.centralprotection.ca/wp-content/uploads/2023/11/Hiring-Event-Security-Guarding-Services.jpg"
					alt="">
			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<p style="text-align: justify;">
					Organizing an event involves meticulous planning, and security is a critical component to ensure its
					success. Premier event security solutions are designed to address the unique challenges of managing
					large gatherings, protecting attendees, and ensuring the smooth execution of your event.
				</p>
				<p style="text-align: justify;">
					Effective event security begins with a comprehensive risk assessment. Before the event, security
					experts evaluate potential threats and vulnerabilities related to the venue, guest list, and event
					type. This assessment informs the development of a tailored security plan that addresses specific
					needs and ensures preparedness for any scenario.
				</p>
				<p style="text-align: justify;">
					One of the foundational elements of event security is crowd management. Trained security personnel
					are deployed to control access points, monitor crowd behavior, and manage queues. This helps prevent
					overcrowding, maintains order, and ensures that only authorized individuals gain entry. By
					strategically placing staff throughout the venue, security can quickly address any issues that arise
					and provide assistance as needed.
				</p>
				<p style="text-align: justify;">
					Access control is another crucial aspect. Implementing measures such as ticket scanning, wristbands,
					and ID verification ensures that only those with proper credentials can enter the event. This not
					only enhances security but also streamlines entry processes, reducing wait times and improving the
					overall guest experience.
				</p>
			</div>
		</div>

		<div class="row gx-5">
			<div class="col-md-6 mb-3" style="float: right;">

				<p style="text-align: justify;">
					Surveillance is vital for monitoring and responding to incidents in real time. High-definition CCTV
					cameras installed at key locations provide continuous video coverage, allowing security teams to
					observe and record activities throughout the event.


				</p>
				<p style="text-align: justify;">
					Emergency preparedness is a key component of event security. Developing and communicating emergency
					response plans ensures that both security personnel and event staff know how to act in the event of
					an incident. Regular drills and clear signage help prepare everyone for potential emergencies, from
					medical issues to evacuations.

				</p>
				<p style="text-align: justify;">
					Additionally, implementing protocols for handling specific threats—such as bag checks, metal
					detectors, or increased vigilance in high-risk areas—further enhances safety.
					In summary, premier event security solutions provide comprehensive protection through risk
					assessments, crowd management, access control, surveillance, and emergency preparedness. By
					investing in a tailored security plan, you ensure a safe and successful event, allowing guests to
					enjoy the occasion while minimizing risks and addressing potential challenges effectively.
				</p>
				</p>
			</div>
			<div class="col-md-6 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://www.hecsecurity.com.au/wp-content/uploads/2022/12/Event-Security-Services.jpg" alt="">
			</div>

		</div>
	</div>
</section>

@elseif($page->slug == 'fire-Watch-and-alarm-response-services')
{{-- {!! $data !!} --}}
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center"> Event Security Solutions</h3>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://images.wral.com/asset/news/local/2023/08/21/21010977/fire_alarm_-DMID1-5zzx1va7p-1280x720.jpg?w=1280&h=720"
					alt="">
				<img style=" float: left; " src="https://www.blackrock.co.tz/images/services/27.jpg" alt="">

			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<p style="text-align: justify;">
					Fire watch and alarm response services are crucial for safeguarding properties and ensuring the
					safety of occupants during fire emergencies. These services provide proactive monitoring and quick
					action to prevent and manage fire-related incidents effectively. Whether for construction sites,
					commercial buildings, or special events, having robust fire watch and alarm response plans in place
					is essential for maintaining safety and compliance.
				</p>
				<h5>Fire Watch Services:</h5>
				<p style="text-align: justify;">

					Fire watch services involve deploying trained personnel to monitor and protect areas where fire
					hazards exist or where fire detection systems are temporarily impaired. This service is particularly
					important during construction projects, renovations, or in buildings where fire alarm systems are
					under maintenance.
				</p>
				<p style="text-align: justify;">
					Continuous Monitoring: Fire watch personnel conduct regular patrols of the premises to check for any
					signs of fire or hazards. They are equipped with communication devices to report any issues
					immediately and are trained to identify potential fire risks.
				</p>
				<p style="text-align: justify;">
					Emergency Response: In the event of a fire alarm activation or visible smoke, fire watch personnel
					are responsible for initiating emergency procedures. This includes alerting building occupants,
					contacting emergency services, and coordinating evacuation if necessary.
				</p>
				<p style="text-align: justify;">
					Fire Prevention: Fire watch teams also engage in proactive measures to prevent fires, such as
					ensuring that all fire safety equipment is functional, monitoring for hot work operations, and
					addressing any identified fire hazards.
				</p>
				<p style="text-align: justify;">
					Documentation and Reporting: Detailed logs and reports are maintained to document patrols,
					incidents, and any corrective actions taken. This documentation is essential for compliance with
					fire safety regulations and for improving future safety measures.
				</p>

			</div>

			<div class="col-md-6 mb-3" style="float: right;">
				<p style="text-align: justify;">
					Effective event security begins with a comprehensive risk assessment. Before the event, security
					experts evaluate potential threats and vulnerabilities related to the venue, guest list, and event
					type. This assessment informs the development of a tailored security plan that addresses specific
					needs and ensures preparedness for any scenario.
				</p>
				<p style="text-align: justify;">
					One of the foundational elements of event security is crowd management. Trained security personnel
					are deployed to control access points, monitor crowd behavior, and manage queues. This helps prevent
					overcrowding, maintains order, and ensures that only authorized individuals gain entry. By
					strategically placing staff throughout the venue, security can quickly address any issues that arise
					and provide assistance as needed.
				</p>
				<p style="text-align: justify;">
					Access control is another crucial aspect. Implementing measures such as ticket scanning, wristbands,
					and ID verification ensures that only those with proper credentials can enter the event. This not
					only enhances security but also streamlines entry processes, reducing wait times and improving the
					overall guest experience.
				</p>
			</div>
			<div class="col-md-6 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://americanreliancesecurity.com/wp-content/uploads/2023/08/firewatch-security-3.webp"
					alt="">
			</div>



			<div class="row gx-5">
				<div class="col-md-6">
					<img style=""
						src="https://northwestsecurity.ca/wp-content/uploads/2024/05/on-site-fire-watch.png.jpeg.webp"
						alt="">
				</div>
				<div class="col-md-6 mb-3" style="float: right;">
					<h5>Alarm Response Services:</h5>
					<p style="text-align: justify;">

						1. Alarm response services ensure that when a fire alarm is triggered, it is promptly addressed
						to minimize
						damage and ensure occupant safety. This service typically involves the following components:
					</p>
					<p style="text-align: justify;">
						2. Rapid Response: Upon receiving an alarm notification, response teams are dispatched quickly
						to the site.
						Their immediate presence helps to assess the situation, confirm whether there is an actual fire,
						and
						take appropriate action.
					</p>
					<p style="text-align: justify;">
						3. Incident Assessment: Fire response personnel conduct a thorough assessment of the alarm
						situation. They
						verify the cause of the alarm, check for signs of smoke or fire, and determine if any immediate
						actions
						are required.
					</p>
					<p style="text-align: justify;">
						4. Coordination with Emergency Services: Response teams work closely with local fire departments
						and
						emergency services to ensure a coordinated approach. They provide information on the status of
						the
						situation and facilitate access to the site.
					</p>
				</div>
				<div class="col-md-12 mt-3">
					<p style="text-align: justify;">
						5. System Check and Restoration: After an alarm has been managed, response teams check the fire
						alarm
						system to ensure it is functioning properly. They address any issues and restore the system to
						normal
						operation to prevent future false alarms or system failures.
					</p>
					<p style="text-align: justify;">
						6. Post-Incident Analysis: Following an incident, a comprehensive review is conducted to
						evaluate the
						response and identify any areas for improvement. This analysis helps to refine fire safety
						protocols and
						enhance overall fire protection strategies.
					</p>
					<p style="text-align: justify;">
						7. In summary, fire watch and alarm response services provide critical support in managing fire
						risks and
						ensuring the safety of people and property. By employing trained personnel for continuous
						monitoring,
						rapid response, and comprehensive incident management, you can maintain a high level of fire
						safety and
						preparedness.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

@elseif($page->slug == 'construction-security')
{{-- {!! $data !!} --}}
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5">
			<h3 class="text-center">Construction Security Solutions</h3>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://miro.medium.com/v2/resize:fit:1150/1*KY2h7p5mLteUSqo6CuPbkA.jpeg" alt="">

				<img style=" float: left; "
					src="https://media.licdn.com/dms/image/D4E12AQFCIdEa-fbKuw/article-cover_image-shrink_720_1280/0/1682500819647?e=2147483647&v=beta&t=MOGPg4slxTfqBiPHmOqrWDqNCN_N4ZEhyICP_SbTxmA"
					alt="">

			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<p style="text-align: justify;">
					Construction sites are dynamic environments that present unique security challenges, including the
					protection of valuable equipment, materials, and personnel. Comprehensive construction security
					solutions are designed to address these challenges, providing robust protection and ensuring the
					smooth progress of construction projects.
				</p>
				<h5 class="mt-3">1. Site Access Control:</h5>
				<p style="text-align: justify;">

					* Effective site access control is fundamental for construction security. This involves implementing
					measures to regulate who enters and exits the construction site.


				</p>
				<p style="text-align: justify;">
					* Perimeter Fencing: Erecting sturdy fencing around the site establishes a physical barrier that
					deters unauthorized access and helps prevent theft or vandalism.

				</p>
				<p style="text-align: justify;">
					* Access Points: Controlled entry and exit points, staffed by security personnel or equipped with
					electronic access systems (e.g., key cards or biometric scanners), ensure that only authorized
					individuals can enter the site.

				</p>
				<p style="text-align: justify;">
					* Visitor Management: Implementing a visitor management system that includes sign-in procedures and
					identification checks helps track who is on-site and enhances overall security.
				</p>
				<h5>2. Surveillance and Monitoring:</h5>
				<p style="text-align: justify;">

					Surveillance systems are critical for monitoring activity and deterring criminal behavior.
				</p>
			</div>

			<div class="col-md-6 mb-3 mt-3" style="float: right;">

				<h5>3. CCTV Cameras:</h5>
				<p style="text-align: justify;">
					High-definition cameras strategically placed around the site provide continuous video surveillance.
					These cameras can be equipped with features such as night vision and motion detection to ensure
					comprehensive coverage.
				</p>
				<h5>4.Remote Monitoring:</h5>
				<p style="text-align: justify;">
					Advanced systems allow for remote access, enabling real-time monitoring from a central location.
					This feature is especially useful for overseeing large or multiple sites.

					Construction sites often contain valuable equipment and materials that need protection from theft
					and damage. Secure storage solutions, such as locked containers or trailers, are used to
					safeguard tools and equipment when not in use.
					Inventory Management: Regular inventory checks and audits help keep track of materials and
					equipment, making it easier to identify any missing items or discrepancies.
				</p>
			</div>
			<div class="col-md-6 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://safetyculture.com/_next/image/?url=https%3A%2F%2Fwp-website.safetyculture.com%2Fwp-content%2Fuploads%2Fsites%2F3%2F2023%2F11%2FConstruction.jpeg&w=3840&q=75"
					alt="">
			</div>



			<div class="row gx-5">
				<div class="col-md-6">
					<img style=""
						src="https://traxxeo.com/content/uploads/2020/12/site-safety-adobestock-143333078-1-1024x683.jpeg"
						alt="">
				</div>
				<div class="col-md-6 mb-3 mt-3" style="float: right;">
					<h5>5. Incident Response and Emergency Preparedness:</h5>
					<p style="text-align: justify;">
						Preparing for potential emergencies and having a response plan in place is essential for
						minimizing risks.


					</p>
					<p style="text-align: justify;">
						Emergency Plans: Develop and communicate clear emergency response plans for various scenarios,
						including fires, medical emergencies, and security breaches. Ensure that all personnel are
						trained on these procedures.

					</p>
					<p style="text-align: justify;">
						Communication Systems: Implement effective communication systems to alert and coordinate with
						on-site personnel and emergency services in case of an incident.
					</p>
					<h5>6. Regular Security Audits and Updates:</h5>
					<p style="text-align: justify;">
						Ongoing evaluation and improvement of security measures help maintain effectiveness and adapt to
						evolving risks.
					</p>
				</div>
				<div class="col-md-12 mt-3">
					<p style="text-align: justify;">
						Security Audits: Conduct regular audits to assess the effectiveness of current security
						measures, identify vulnerabilities, and make necessary adjustments.
						System Upgrades: Keep security systems and protocols up to date with the latest technology and
						best practices to ensure optimal protection.
					</p>
					<p style="text-align: justify;">
						In summary, comprehensive construction security solutions encompass site access control,
						surveillance, on-site personnel, equipment protection, incident response, and ongoing audits. By
						implementing these measures, you can safeguard your construction site against theft, vandalism,
						and other risks, ensuring a secure and efficient construction process.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

@elseif ($page->slug == 'dispatch-service')
{{-- {!! $data !!} --}}
<section class="pt-xl-1">
	<div class="container">
		<div class="row gx-5 mt-3 ">
			<h3 class="text-center mb-3">24/7 Dispatch Service</h3>
			<div class="col-md-6 mb-3" style="float: left;">
				<img style=" float: left; "
					src="https://www.truckdriverssalary.com/wp-content/uploads/2019/06/truck-dispatch-services.jpg"
					alt="">
			</div>
			<div class="col-md-6 mb-3" style="float: left;">
				<p style="text-align: justify;">
					A 24/7 dispatch service is essential for ensuring continuous, efficient, and effective response to
					emergencies and operational requirements around the clock. Whether you're managing a large-scale
					facility, coordinating emergency services, or running a business that demands constant operational
					support, our dispatch service provides the reliability and expertise needed for seamless operation
					and immediate problem resolution.
				</p>
				<p style="text-align: justify;">
					Our dispatch team operates 24 hours a day, seven days a week, guaranteeing that any request for
					assistance is handled promptly. This service is crucial for maintaining safety and operational
					efficiency in various scenarios, including emergency response, routine service requests, and
					critical incident management.
				</p>
				<h5>Key Features:</h5>
				<p style="text-align: justify;">
					Immediate Response: Our dispatch service is designed to handle calls and requests in real time,
					ensuring that urgent matters are addressed without delay.
				</p>
				<p style="text-align: justify;">
					Efficient Coordination: Our dispatchers are trained to manage and coordinate multiple tasks
					simultaneously. They act as a central point of communication, linking various departments, emergency
					responders, and service providers to ensure smooth operations and timely resolution of issues.
				</p>
			</div>
		</div>

		<div class="row gx-5 mt-3">
			<div class="col-md-6 mb-3" style="float: right;">
				<p style="text-align: justify;">
					24/7 Availability: We provide round-the-clock support, meaning that no matter the time of day or
					night, our team is ready to respond. This continuous availability ensures that emergencies are
					managed swiftly and routine tasks are handled efficiently.
				</p>
				<p style="text-align: justify;">
					Advanced Technology: Utilizing state-of-the-art dispatch systems, our service offers real-time
					tracking, detailed reporting, and seamless communication. This technology enhances our ability to
					monitor and respond to incidents effectively.
				</p>
				<p style="text-align: justify;">
					In summary, our 24/7 dispatch service delivers critical support and coordination, ensuring prompt
					responses and effective management of emergencies and operational needs. With continuous
					availability and advanced technology, we provide the reliability and efficiency necessary for
					maintaining safety and operational excellence.
				</p>
			</div>
			<div class="col-md-6 mb-3" style="float: right;">
				<img style=" float: right; "
					src="https://cdn-abogo.nitrocdn.com/hMBmyvIAiyCQjFUovuKmvztXEVwuNrqT/assets/images/optimized/rev-a2af0ea/answerfirst.com/wp-content/uploads/2019/01/Customer-Service-Reps.jpg"
					alt="">
			</div>

		</div>
	</div>
</section>

@else
@endif
@endsection