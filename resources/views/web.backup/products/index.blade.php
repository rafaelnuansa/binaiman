@extends('layouts.app')

@section('content')
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
                    <div class="col-12 col-md-4 col-lg-3 mb-4">
                        <div class="card d-flex align-items-stretch border-0 bg-white shadow h-100">
                            <img src="{{ $product->image }}" class="card-img-top" alt="Soto Kuning Pak Yusuf"
                                style="width: 100%; height: 100%; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">
                                    {{ $product->title }}</h5>
                                <span>
                                    <i class="bi">Rp. </i>{{ $product->price }}
                                </span><br><span><i class="fa fa-tag me-1"></i>{{ $product->product_category->name }}</span>

                            </div>
                            <div class="card-footer">

                                <a href="{{ route('web.produk.show', $product->slug) }}" class="btn btn-success w-100">Beli
                                    Sekarang<i class="bi bi-whatsapp ms-1"></i></a>

                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 mt-3">
                    {{ $products->links() }}
                </div>
            </div>

        </div>
    </section>
@endsection
