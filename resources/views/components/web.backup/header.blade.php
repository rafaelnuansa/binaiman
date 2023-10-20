<header class="navbar-light bg-light mb-3 py-3 header-sticky">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg ">
		<div class="container d-block">
			<div class="row align-items-center">
				<div class="col-5">
					<!-- Logo START -->
					<a class="navbar-brand fw-bold" href="{{ route('home') }}">
						<img class="light-mode-item navbar-brand-item d-inline h-40px h-md-60px" src="{{ asset('logo.png') }}" alt="logo">
						<img class="dark-mode-item navbar-brand-item d-inline h-40px h-md-60px" src="{{ asset('logo.png') }}" alt="logo">
					Pokdarwis Tenjolaya
                    </a>
					<!-- Logo END -->
				</div>

				<div class="col-7 ">
					<!-- Navbar top Right-->

					<div class="d-sm-flex align-items-center justify-content-end">
						<!-- Main navbar START -->
						<div class="navbar-collapse collapse" id="navbarCollapse">
							<ul class="navbar-nav navbar-nav-scroll ms-auto">



                                <li class="nav-item">
									<a class="nav-link" href="{{ route('home') }}" id="wisata" >Beranda</a>

								</li>

                                <li class="nav-item">
									<a class="nav-link" href="#" id="pokdarwis-nav" >Kelompok Sadar Wisata</a>
								</li>

                                <li class="nav-item">
									<a class="nav-link" href="{{ route('web.wisata')}}" id="wisata-nav" >Wisata</a>

								</li>

                                <li class="nav-item">
									<a class="nav-link" href="{{ route('web.produk') }}" id="product-nav" >Produk</a>

								</li>

                                <li class="nav-item">
									<a class="nav-link" href="{{ route('web.posts') }}" id="post-nav" >Berita</a>
								</li>



                                <li class="nav-item">
									<a class="nav-link" href="{{ route('web.gallery') }}" id="gallery-nav" >Galeri</a>

								</li>

							</ul>
						</div>
						<!-- Main navbar END -->

						<!-- Toggler button and stay button -->
						<div class="d-flex align-items-center justify-content-end">
							<!-- Responsive navbar toggler -->
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-animation">
									<span></span>
									<span></span>
									<span></span>
								</span>
								<span class="d-none d-sm-inline-block small">Menu</span>
							</button>
                                <a class="nav-notification btn btn-light mb-0 p-0" href="#" id="searchDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-search"> </i>
                                </a>
                                <div class="dropdown-menu dropdown-animation dropdown-menu-end p-2" aria-labelledby="searchDropdown">
                                    <div class="nav flex-nowrap align-items-center">
                                        <div class="nav-item w-100">
                                            <form class="input-group">
                                                <input class="form-control border-primary" type="search" placeholder="Search..." aria-label="Search">
                                                <button class="btn btn-primary m-0" type="submit">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
