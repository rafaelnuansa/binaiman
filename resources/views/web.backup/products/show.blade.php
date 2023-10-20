@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-4"><img class="img-fluid rounded w-100" src="{{ $produk->image }}"
                        alt="Macaroni Panggang">
                    <div class="card border-0 bg-white">
                        <div class="card-body">
                            <h4>{{ $produk->title }}</h4>
                            <div>
                                {{ $produk->content }}
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
                                        <i class="fa-fw  text-primary fs-5 me-2">Rp.</i>{{ $produk->price }}
                                    </a>
                                </li>

                                <li class="list-group-item py-0">
                                    <hr class="my-0">
                                </li><!-- Divider -->

                                <li class="list-group-item py-3">
                                    <a href="#" class="h6 mb-0">
                                        <i class="bi fa-fw bi-telephone-forward text-primary fs-5 me-2"></i>
                                        <span class="fw-light me-1"></span>{{ $produk->phone }}</a>
                                </li>

                                <li class="list-group-item py-0">
                                    <hr class="my-0">
                                </li><!-- Divider -->


                                <li class="list-group-item py-3">
                                    <a href="#" class="h6 mb-0">
                                        <i class="bi fa-fw bi-geo-alt text-primary fs-5 me-2"></i>{{ $produk->address }}
                                    </a>
                                </li>

                                <li class="list-group-item py-0">
                                    <hr class="my-0">
                                </li><!-- Divider -->

                                <li class="list-group-item py-3">
                                    <a href="#" class="h6 mb-0">
                                        <i
                                            class="bi fa-fw bi-tag text-primary fs-5 me-2"></i>{{ $produk->product_category->name }}
                                    </a>
                                </li>

                                <li class="list-group-item py-0">
                                    <hr class="my-0">
                                </li><!-- Divider -->

                            </ul>
                            <div class="d-grid gap-2"><a class="float-end btn btn-success btn-block btn-md mt-3"
                                    href="#"><i class="bi bi-whatsapp"></i> Beli Sekarang</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card border-0 rounded bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Produk Serupa</h5>
                            <p class="card-text">Produk yang serupa dengan {{ $produk->title }}</p>
                            <hr>
                            <div class="row">
                                @foreach ($relatedProducts as $relatedProduct)
                                    <div class="col-md-3 mb-4">
                                        <div class="card d-flex align-items-stretch">
                                            <img src="{{ $relatedProduct->image }}" class="card-img-top"
                                                alt="{{ $relatedProduct->title }}">
                                            <div class="card-body">
                                                <h6 class="card-title">{{ $relatedProduct->title }}</h6>
                                                <p class="card-text">{{ $relatedProduct->product_category->name }}</p>
                                                <a href="{{ route('web.produk.show', $relatedProduct->slug) }}"
                                                    class="btn w-100 btn-success"><i class="bi bi-whatsapp"></i> Beli
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
