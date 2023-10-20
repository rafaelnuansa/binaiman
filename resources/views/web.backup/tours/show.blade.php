@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-4"><img class="img-fluid rounded w-100" src="{{ $wisata->image }}"
                        alt="Macaroni Panggang">
                    <div class="card border-0 bg-white">
                        <div class="card-body">
                            <h4>{{ $wisata->title }}</h4>
                            <div>
                                {{ $wisata->content }}
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 rounded bg-light">
                        <div class="card-body">
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item py-3">
                                    <a href="#" class="h6 mb-0">
                                        <i class="fa-fw  text-primary fs-5 me-2">Rp.</i>{{ $wisata->price }}
                                    </a>
                                </li>

                                <li class="list-group-item py-0">
                                    <hr class="my-0">
                                </li><!-- Divider -->

                                <li class="list-group-item py-3">
                                    <a href="#" class="h6 mb-0">
                                        <i class="bi fa-fw bi-telephone-forward text-primary fs-5 me-2"></i>
                                        <span class="fw-light me-1"></span>{{ $wisata->phone }}</a>
                                </li>

                                <li class="list-group-item py-0">
                                    <hr class="my-0">
                                </li><!-- Divider -->


                                <li class="list-group-item py-3">
                                    <a href="#" class="h6 mb-0">
                                        <i class="bi fa-fw bi-geo-alt text-primary fs-5 me-2"></i>{{ $wisata->address }}
                                    </a>
                                </li>

                                <li class="list-group-item py-0">
                                    <hr class="my-0">
                                </li><!-- Divider -->

                                <li class="list-group-item py-3">
                                    <a href="#" class="h6 mb-0">
                                        <i
                                            class="bi fa-fw bi-tag text-primary fs-5 me-2"></i>{{ $wisata->tour_category->name }}
                                    </a>
                                </li>

                                <li class="list-group-item py-0">
                                    <hr class="my-0">
                                </li><!-- Divider -->

                            </ul>
                            <div class="d-grid gap-2"><a class="float-end btn btn-primary btn-block btn-md mt-3"
                                    href="#"><i class="bi bi-geo"></i> Menuju Lokasi </a></div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card border-0 rounded bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Wisata Lainnya</h5>
                            <p class="card-text">Wisata lainnya terkait dengan {{ $wisata->name }}</p>
                            <hr>
                            <div class="row">
                                @foreach ($relatedtours as $wisata)
                                    <div class="col-md-3 mb-4">
                                        <div class="card d-flex align-items-stretch">
                                            <img src="{{ $wisata->image }}" class="card-img-top"
                                                alt="{{ $wisata->name }}">
                                            <div class="card-body">
                                                <h6 class="card-title">{{ $wisata->name }}</h6>
                                                <p class="card-text">{{ $wisata->tour_category->name }}</p>
                                                <a href="{{ route('web.produk.show', $wisata->slug) }}"
                                                    class="btn w-100 btn-primary"><i class="bi bi-geo"></i> Beli
                                                    Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
