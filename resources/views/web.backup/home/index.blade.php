@extends('layouts.app')

@section('content')
    <x-web.slider></x-web.slider>

    <section class="container mt-n8">
        <div class="row">
            <!-- Tabs START -->
            <div class="col-11 col-lg-8 col-xl-6 mx-auto">
                <ul class="nav nav-tabs nav-bottom-line nav-justified nav-responsive bg-mode rounded-top z-index-9 position-relative pt-2 pb-0 px-4"
                    role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-wisata" aria-selected="true"
                            role="tab"><i class="fa-solid fa-globe fa-fw me-2"></i>Wisata</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-produk" aria-selected="false"
                            role="tab" tabindex="-1"><i class="fa-solid fa-tag fa-fw me-2"></i>Produk</a>
                    </li>

                </ul>
            </div>
            <!-- Tabs END -->

            <!-- Tab content START -->
            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">

                    <!-- Tab content item START -->
                    <div class="tab-pane fade active show" id="tab-wisata" role="tabpanel">
                        <form class="card shadow p-0">
                            <!-- Card header -->
                            <div class="card-header p-4">
                                <h5 class="mb-0"><i class="fa-solid fa-globe fa-fw me-2"></i>Cari Destinasi Wisata</h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-4 pt-0">
                                <div class="row g-4">
                                    <!-- Location -->
                                    <div class="col-12">
                                        <div class="form-icon-input form-size-lg form-fs-lg">
                                            <div>
                                                <input type="text" class="form-control -lg" placeholder="Cari">
                                                <span class="form-icon"><i class="bi bi-search fs-5"></i></span>
                                            </div>
                                        </div>
                                    </div> <!-- Row END -->

                                    <!-- Button -->
                                    <div class="text-center pt-0">
                                        <a class="btn btn-lg btn-primary mb-n7" href="#">Cari Wisata <i
                                                class="bi bi-arrow-right ps-3"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Tab content item END -->

                    <!-- Tab content item START -->
                    <div class="tab-pane fade" id="tab-produk" role="tabpanel">
                        <form class="card shadow p-0">
                            <!-- Card header -->
                            <div class="card-header p-4">
                                <h5 class="mb-0"><i class="fa-solid fa-tag fa-fw me-2"></i>Cari Produk</h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-4 pt-0">
                                <div class="row g-4">
                                    <!-- Location -->
                                    <div class="col-12">
                                        <div class="form-icon-input form-size-lg form-fs-lg">
                                            <div>
                                                <input type="text" class="form-control -lg" placeholder="Cari">
                                                <span class="form-icon"><i class="bi bi-search fs-5"></i></span>
                                            </div>
                                        </div>
                                    </div> <!-- Row END -->

                                    <!-- Button -->
                                    <div class="text-center pt-0">
                                        <a class="btn btn-lg btn-primary mb-n7" href="#">Cari Produk <i
                                                class="bi bi-arrow-right ps-3"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Tab content item END -->

                </div>
            </div>
            <!-- Tab content END -->
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row g-4 align-items-center">
                <!-- Title -->
                <div class="col-lg-4">
                    <h2 class="mb-4">Desa Wisata Tenjolaya</h2>
                </div>

                <!-- Listing -->
                <div class="col-lg-8">
                    <div class="row g-4">
                        @foreach ($villages as $desa)
                            <!-- Card item -->
                            <div class="col-md-6">
                                <div class="card card-body bg-light h-100 p-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Image and text -->
                                        <div class="d-flex align-items-center">
                                            <img src="{{ $desa->image }}" class="rounded" style="width: 100px"
                                                alt="">

                                            <div class="ms-3">
                                                <h5 class="mb-0"><a href="#">{{ $desa->name }}</a></h5>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <a href="#" class="btn btn-primary-soft btn-round flex-shrink-0 ms-2 mb-0"><i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container">

            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Destinasi Wisata</h2>
                    <p>Wisata Menarik di Kecamatan Tenjolaya</p>
                </div>
            </div>

            <div class="row g-4">
                @foreach ($tours as $tour)
                    <div class="col-sm-6 col-xl-3">
                        <!-- Card START -->
                        <div class="card d-flex align-items-stretch  card-img-scale overflow-hidden bg-transparent">
                            <!-- Image and overlay -->
                            <div class="card-img-scale-wrapper rounded-3">
                                <!-- Image -->
                                <img src="{{ $tour->image }}" class="card-img-top" alt="{{ $tour->name }}">
                                <!-- Badge -->

                                @if (isset($tour->village->id))
                                    <div class="position-absolute bottom-0 start-0 p-3">
                                        <div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i
                                                class="bi bi-geo-alt me-2"></i>{{ $tour->tour_category->name ?? '' }}
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-2">
                                <!-- Title -->
                                <h5 class="card-title"><a href="{{ $tour->slug }}"
                                        class="stretched-link">{{ $tour->name }}</a></h5>
                                <!-- Price and rating -->
                                <div class="d-flex justify-content-between align-items-center">
                                    @if (isset($tour->village->id))
                                        <h6 class="text-success mb-0"><small
                                                class="fw-light">{{ $tour->village->name }}</small> </h6>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>
                @endforeach

            </div> <!-- Row END -->
        </div>
    </section>

    <section>

        <div class="container">
            <div class="row g-4 align-items-center">

                <!-- Title -->
                <div class="col-lg-2">
                    <h4>Kategori Produk</h4>
                    <a href="#" class="h6 fw-normal text-primary mb-0">Lihat Semua<i
                            class="bi bi-arrow-right"></i></a>
                </div>

                <!-- Category START -->
                <div class="col-lg-10">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round arrow-xs arrow-dark">
                        <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="2"
                            data-dots="false" data-items-xl="5" data-items-lg="3" data-items-sm="2" data-items-xs="1">
                            @foreach ($product_categories as $category)
                                <div>
                                    <div class="card card-body bg-light text-center align-items-center">
                                        <!-- Icon -->
                                        <div class="icon-xl  rounded-circle mb-3">
                                            <img src="{{ $category->image }}" class="rounded-circle h-100 w-100"
                                                alt="" srcset="">
                                        </div>
                                        <h6 class="mb-0"><a href="#"
                                                class="stretched-link">{{ $category->name }}</a></h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Category END -->
            </div>
        </div>
    </section>


    <section>
        <div class="container">

            <div class="row mb-4 mb-sm-5">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Produk Tenjolaya</h2>
                    <p class="mb-0">Produk yang disediakan oleh seluruh Masyarakat desa di Kecamatan Tenjolaya.</p>
                </div>
            </div>
            <div class="row justify-content-center">

                @foreach ($products as $product)
                    {{-- <div class="col-12 col-md-4 col-lg-3 mb-4"> --}}
                        <div class="col-12 col-md-4 col-lg-3 mb-4">

                        <div class="card d-flex align-items-stretch border-0 bg-white shadow h-100">
                            <img src="{{ $product->image }}" class="card-img-top" alt="Soto Kuning Pak Yusuf"
                                style="width: 100%; height: 100%; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{ $product->title }}</h5>
                                <span>
                                    <i class="bi">Rp. </i>{{ $product->price }}
                                </span><br><span><i
                                        class="fa fa-tag me-1"></i>{{ $product->product_category->name }}</span>

                            </div>
                            <div class="card-footer">

                                <a href="{{ route('web.produk.show', $product->slug) }}"
                                    class="btn btn-success w-100">Beli Sekarang<i class="bi bi-whatsapp ms-1"></i></a>

                            </div>
                        </div>



                    </div>
                @endforeach
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <a href="{{ route('web.produk') }}" class="btn btn-dark"><i class="bi bi-cart"></i> Lihat Semua
                        Produk</a>
                </div>
            </div>
        </div>
    </section>

    <section
        style="background-image:url('https://3.bp.blogspot.com/-2BiJeTfHQF0/WJHeip1JVCI/AAAAAAAAM40/cqoLtXKJIm8ov7T6tOZisUu8ryQ8hM9ogCEw/s1600/AC2.JPG'); background-position: center left; background-size: cover;">
        <div class="container">
            <div class="row py-lg-7">
                <div class="col-lg-4 ms-auto">

                    <img src="http://localhost:8000/logo.png" alt="">
                </div>
                <div class="col-lg-6 ms-auto">
                    <h2 class="mb-4 text-white">Kelompok Sadar Wisata
                        <span class="position-relative z-index-9">Tenjolaya
                            <!-- SVG START -->
                            <span
                                class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-md-block mt-3">
                                <svg width="300px" height="21.5px" viewBox="0 0 445.5 21.5">
                                    <path class="fill-success"
                                        d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z">
                                    </path>
                                </svg>
                            </span>
                            <!-- SVG END -->
                        </span>
                    </h2>
                    <p class="text-white mb-4">Delivered dejection necessary objection do Mr prevailed. Mr feeling does
                        chiefly cordial in do. Water timed folly right aware if oh truth. Large above be to means. Dashwood
                        does provide stronger is.</p>
                    <a href="#" class="btn btn-dark mb-0">Check Listing</a>
                </div>
            </div>
        </div>
    </section>
@endsection
