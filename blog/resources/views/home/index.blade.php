@extends('layout.layout')
@section('title') Home @endsection

@section('content')
    {{-- main header --}}
    <header class="mainHeader">
        {{-- main navbar --}}
        <nav class="mainNavbar navbar navbar-expand-lg navbar-transparent">
            <div class="container">
                <a href="" class="navbar-brand text-capitalize font-weight-bold d-flex align-items-center justify-content-center">fisal</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link text-capitalize">home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-capitalize">about</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-capitalize">resume</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-capitalize">portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-capitalize">blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-capitalize">contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        {{-- main home banner --}}
        <section class="homeBanner">
            <div class="container h-100 d-flex align-items-center justify-content-between flex-wrap">
                {{-- banner text --}}
                <div class="bannerText">
                    <h1 class="text-uppercase d-flex flex-column font-weight-bold">
                        <span>welcome!</span>
                        <span>i am ui/ux designer and developer, get your site.</span>
                    </h1>
                    {{-- extra links --}}
                    <div class="extraLinks d-flex align-items-center mt-3">
                        <a href="" class="link shadow d-flex align-items-center justify-content-center text-capitalize text-decoration-none">my work</a>
                        <a href="" class="link shadow d-flex align-items-center justify-content-center text-capitalize text-decoration-none ml-3">hire me</a>
                    </div>
                </div>
            </div>
        </section>
    </header>

    {{-- about me --}}
    <section class="aboutMe">
        <div class="container d-flex align-items-center justify-content-between flex-wrap">
            {{-- about image --}}
            <div class="aboutImg position-relative">
                <span class="text-capitalize d-flex align-items-center justify-content-center position-absolute">labib fisal</span>
                <img class="h-100 w-100" src="{{ asset('home/img/me.jpg') }}" alt="aboutImg">
            </div>
            {{-- about text --}}
            <div class="aboutText pl-3">
                <h2 class="text-uppercase"> i design and develope modern portfolios and other types of web sites </h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate voluptatem
                    fugit cumque asperiores facilis laudantium, nam possimus alias voluptas ducimus!
                </p>
                <a href="" class="cvLink d-flex align-items-center justify-content-center text-decoration-none text-capitalize text-center">
                    <span></span>
                    <span>download cv</span>
                </a>
            </div>
        </div>

        {{-- count up --}}
        <div class="countUp">
            <div class="container h-100 d-flex align-items-center justify-content-between flex-wrap">
                {{-- item 01 --}}
                <div class="item d-flex flex-column align-items-center justify-content-center text-center">
                    <span class="d-flex align-items-center justify-content-center">
                        <ion-icon name="albums-outline"></ion-icon>
                    </span>
                    <span class="my-2 font-weight-bold">230</span>
                    <span class="text-capitalize">files downloaded</span>
                </div>
                {{-- item 02 --}}
                <div class="item d-flex flex-column align-items-center justify-content-center text-center">
                    <span class="d-flex align-items-center justify-content-center">
                        <ion-icon name="hammer-outline"></ion-icon>
                    </span>
                    <span class="my-2 font-weight-bold">230</span>
                    <span class="text-capitalize">projects done</span>
                </div>
                {{-- item 01 --}}
                <div class="item d-flex flex-column align-items-center justify-content-center text-center">
                    <span class="d-flex align-items-center justify-content-center">
                        <ion-icon name="medal-outline"></ion-icon>
                    </span>
                    <span class="my-2 font-weight-bold">30</span>
                    <span class="text-capitalize">rewards</span>
                </div>
                {{-- item 01 --}}
                <div class="item d-flex flex-column align-items-center justify-content-center text-center">
                    <span class="d-flex align-items-center justify-content-center">
                        <ion-icon name="happy-outline"></ion-icon>
                    </span>
                    <span class="my-2 font-weight-bold">220</span>
                    <span class="text-capitalize">satisified clients</span>
                </div>
            </div>
        </div>
    </section>

    {{-- my resume --}}
    <section class="myResume">
        <div class="container">
            <!-- text__intro -->
			<div class="textIntro mb-5">
				<h2 class="text-capitalize d-flex">
                    <span class="d-flex align-items-center justify-content-center mr-2"><ion-icon name="reader-outline"></ion-icon></span>
                    my <span>resume</span>
                </h2>
				<h3 class="text-capitalize">I Am Available For Freelance Projects.</h3>
			</div>
			<!-- content -->
			<div class="content d-flex justify-content-between align-items-start flex-wrap">
				<!-- my__education -->
				<div class="education w-50">
					<!-- type -->
					<h4 class="text-capitalize"><i class="lni lni-graduation mr-2"></i> education</h4>
					<!-- items__holder -->
					<div class="itemsHolder mt-5 w-100 d-flex flex-column justify-content-start align-items-start">
						<!-- item 01 -->
						<div class="item w-100">
							<div class="header">
								<h5 class="text-capitalize">master in computer science</h5>
								<span>2020 - 2020</span>
								<p class="mt-3">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Mollitia tenetur, odit vel nobis recusandae vero,
									omnis deserunt perspiciatis dignissimos. Omnis.
								</p>
							</div>
						</div>
						<!-- item 02 -->
						<div class="item w-100">
							<div class="header">
								<h5 class="text-capitalize">master in computer science</h5>
								<span>2020 - 2020</span>
								<p class="mt-3">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Mollitia tenetur, odit vel nobis recusandae vero,
									omnis deserunt perspiciatis dignissimos. Omnis.
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- my__experince -->
				<div class="expereince w-50">
					<!-- type -->
					<h4 class="text-capitalize"><i class="lni lni-certificate"></i> my expereince</h4>
					<!-- items__holder -->
					<div class="itemsHolder mt-5 w-100 d-flex flex-column justify-content-start align-items-start">
						<!-- item 01 -->
						<div class="item w-100">
							<div class="header">
								<h5 class="text-capitalize">master in computer science</h5>
								<span>2020 - 2020</span>
								<p class="mt-3">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Mollitia tenetur, odit vel nobis recusandae vero,
									omnis deserunt perspiciatis dignissimos. Omnis.
								</p>
							</div>
						</div>
						<!-- item 02 -->
						<div class="item w-100">
							<div class="header">
								<h5 class="text-capitalize">master in computer science</h5>
								<span>2020 - 2020</span>
								<p class="mt-3">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Mollitia tenetur, odit vel nobis recusandae vero,
									omnis deserunt perspiciatis dignissimos. Omnis.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- my__skills -->
			<div class="mySkills mt-5 d-flex justify-content-between align-items-center flex-wrap">
				<!-- item 01 -->
				<div class="item">
					<div class="info d-flex justify-content-between align-items-center">
						<span>html</span>
						<span>90%</span>
					</div>
					<div class="progress w-100">
						<div class="progress-bar" style="width: 90%"></div>
					</div>
				</div>
				<!-- item 02 -->
				<div class="item">
					<div class="info d-flex justify-content-between align-items-center">
						<span>css</span>
						<span>80%</span>
					</div>
					<div class="progress w-100">
						<div class="progress-bar" style="width: 80%"></div>
					</div>
				</div>
				<!-- item 03 -->
				<div class="item">
					<div class="info d-flex justify-content-between align-items-center">
						<span>javascript</span>
						<span>70%</span>
					</div>
					<div class="progress w-100">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
				</div>
				<!-- item 04 -->
				<div class="item">
					<div class="info d-flex justify-content-between align-items-center">
						<span>jquery</span>
						<span>75%</span>
					</div>
					<div class="progress w-100">
						<div class="progress-bar" style="width: 75%"></div>
					</div>
				</div>
				<!-- item 05 -->
				<div class="item">
					<div class="info d-flex justify-content-between align-items-center">
						<span>bootstrap</span>
						<span>80%</span>
					</div>
					<div class="progress w-100">
						<div class="progress-bar" style="width: 80%"></div>
					</div>
				</div>
				<!-- item 06 -->
				<div class="item">
					<div class="info d-flex justify-content-between align-items-center">
						<span>sass</span>
						<span>70%</span>
					</div>
					<div class="progress w-100">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
				</div>
			</div>
        </div>
	</section>

	{{-- my services --}}
	<section class="myServices">
		<div class="container">
			<!-- text__intro -->
			<div class="textIntro mb-5">
				<h2 class="text-capitalize d-flex">
                    <span class="d-flex align-items-center justify-content-center mr-2"><ion-icon name="briefcase-outline"></ion-icon></span>
                    my <span>services</span>
                </h2>
				<h3 class="text-capitalize">what i can provide for you.</h3>
            </div>

            {{-- services item's container --}}
            <div class="servicesItemsContainer d-flex align-items-center justify-content-between flex-wrap">
                <!-- item 01 -->
				<div class="item d-flex justify-content-start align-items-center">
					<div class="icon">
						<span><i class="lni lni-brush-alt"></i></span>
					</div>
					<div class="info">
						<h4 class="text-capitalize">graphich design</h4>
						<p class="p-0 m-0">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, neque.
						</p>
					</div>
				</div>
				<!-- item 02 -->
				<div class="item d-flex justify-content-start align-items-center">
					<div class="icon">
						<span><i class="lni lni-checkmark-circle"></i></span>
					</div>
					<div class="info">
						<h4 class="text-capitalize">bootstrap support</h4>
						<p class="p-0 m-0">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, neque.
						</p>
					</div>
				</div>
				<!-- item 03 -->
				<div class="item d-flex justify-content-start align-items-center">
					<div class="icon">
						<span><i class="lni lni-heart"></i></span>
					</div>
					<div class="info">
						<h4 class="text-capitalize">portfolio of works</h4>
						<p class="p-0 m-0">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, neque.
						</p>
					</div>
				</div>
				<!-- item 04 -->
				<div class="item d-flex justify-content-start align-items-center">
					<div class="icon">
						<span><i class="lni lni-tab"></i></span>
					</div>
					<div class="info">
						<h4 class="text-capitalize">responsive design</h4>
						<p class="p-0 m-0">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, neque.
						</p>
					</div>
				</div>
				<!-- item 05 -->
				<div class="item d-flex justify-content-start align-items-center">
					<div class="icon">
						<span><i class="lni lni-world"></i></span>
					</div>
					<div class="info">
						<h4 class="text-capitalize">go beyond limits</h4>
						<p class="p-0 m-0">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, neque.
						</p>
					</div>
				</div>
				<!-- item 06 -->
				<div class="item d-flex justify-content-start align-items-center">
					<div class="icon">
						<span><i class="lni lni-cup"></i></span>
					</div>
					<div class="info">
						<h4 class="text-capitalize">premuium slider</h4>
						<p class="p-0 m-0">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, neque.
						</p>
					</div>
				</div>
            </div>
		</div>
    </section>

    {{-- my work --}}
    <section class="myWork">
        <div class="container">
            <!-- text__intro -->
			<div class="textIntro border-0">
				<h2 class="text-capitalize d-flex">
                    <span class="d-flex align-items-center justify-content-center mr-2"><ion-icon name="briefcase-outline"></ion-icon></span>
                    my <span>work</span>
                </h2>
				<h3 class="text-capitalize">see some of my awesome work</h3>
            </div>

			<!-- tabs__navbar -->
			<ul class="nav nav-tabs mt-4">
				<li class="nav-item">
					<a href="" class="nav-link active text-capitalize text-decoration-none">all</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link text-capitalize text-decoration-none">web design</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link text-capitalize text-decoration-none">graphic design</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link text-capitalize text-decoration-none">motion graphics</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link text-capitalize text-decoration-none">logo</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link text-capitalize text-decoration-none">photography</a>
				</li>
            </ul>

            {{-- work item's container --}}
            <div class="workItemsContainer d-flex align-items-center justify-content-center flex-wrap">
                <!-- item 01 -->
				<div class="item position-relative">
					<div class="img w-100 h-100">
						<img class="w-100 h-100" src="http://abdoudev.tk/abdoudev/img/001.jpg" alt="my__work">
					</div>
					<div class="info position-absolute d-flex justify-content-center align-items-center flex-column">
						<span class="d-flex justify-content-center align-items-center"><i class="lni lni-search-alt"></i></span>
						<p class="d-block mt-2 text-capitalize">my work</p>
					</div>
				</div>
				<!-- item 02 -->
				<div class="item position-relative">
					<div class="img w-100 h-100">
						<img class="w-100 h-100" src="http://abdoudev.tk/abdoudev/img/002.jpg" alt="my__work">
					</div>
					<div class="info position-absolute d-flex justify-content-center align-items-center flex-column">
						<span class="d-flex justify-content-center align-items-center"><i class="lni lni-search-alt"></i></span>
						<p class="d-block mt-2 text-capitalize">my work</p>
					</div>
				</div>
				<!-- item 03 -->
				<div class="item position-relative">
					<div class="img w-100 h-100">
						<img class="w-100 h-100" src="http://abdoudev.tk/abdoudev/img/003.jpg" alt="my__work">
					</div>
					<div class="info position-absolute d-flex justify-content-center align-items-center flex-column">
						<span class="d-flex justify-content-center align-items-center"><i class="lni lni-search-alt"></i></span>
						<p class="d-block mt-2 text-capitalize">my work</p>
					</div>
				</div>
				<!-- item 04 -->
				<div class="item position-relative">
					<div class="img w-100 h-100">
						<img class="w-100 h-100" src="http://abdoudev.tk/abdoudev/img/004.jpg" alt="my__work">
					</div>
					<div class="info position-absolute d-flex justify-content-center align-items-center flex-column">
						<span class="d-flex justify-content-center align-items-center"><i class="lni lni-search-alt"></i></span>
						<p class="d-block mt-2 text-capitalize">my work</p>
					</div>
				</div>
				<!-- item 05 -->
				<div class="item position-relative">
					<div class="img w-100 h-100">
						<img class="w-100 h-100" src="http://abdoudev.tk/abdoudev/img/006.jpg" alt="my__work">
					</div>
					<div class="info position-absolute d-flex justify-content-center align-items-center flex-column">
						<span class="d-flex justify-content-center align-items-center"><i class="lni lni-search-alt"></i></span>
						<p class="d-block mt-2 text-capitalize">my work</p>
					</div>
				</div>
				<!-- item 06 -->
				<div class="item position-relative">
					<div class="img w-100 h-100">
						<img class="w-100 h-100" src="http://abdoudev.tk/abdoudev/img/003.jpg" alt="my__work">
					</div>
					<div class="info position-absolute d-flex justify-content-center align-items-center flex-column">
						<span class="d-flex justify-content-center align-items-center"><i class="lni lni-search-alt"></i></span>
						<p class="d-block mt-2 text-capitalize">my work</p>
					</div>
				</div>
            </div>
        </div>
    </section>
@endsection