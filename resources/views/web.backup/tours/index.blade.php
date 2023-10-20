@extends('layouts.app')

@section('content')
    <section>
        <div class="container">


            <div class="row g-4">

                @foreach ($tours as $wisata)
                    <!-- Card item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-hover-shadow pb-0 h-100">
                            <!-- Overlay item -->
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="{{ $wisata->image }}" class="card-img-top" alt="Card image">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-4 z-index-1">
                                    <!-- Card overlay top -->
                                    <div>
                                        <span class="badge text-bg-dark">{{ $wisata->tour_category->name }}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Image -->

                            <!-- Card body START -->
                            <div class="card-body px-3">
                                <!-- Title -->
                                <h5 class="card-title mb-0"><a href="{{ route('web.wisata.show', $wisata->slug )}}" class="stretched-link">{{ $wisata->name }}</a></h5>
                                <span class="small"><i
                                        class="far fa-tag-alt me-2"></i>{{ $wisata->tour_category->name }}</span>


                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START-->
                            <div class="card-footer pt-0">
                                <!-- Price and Button -->
                                <div class="d-sm-flex align-items-center flex-wrap">

                                    {{-- <div class="hstack gap-2">
                                    <h5 class="fw-normal text-success mb-0">$1500</h5>
                                    <small>/per person</small>
                                    <span class="text-decoration-line-through">$1800</span>
                                </div> --}}
                                    <!-- Button -->
                                    <div class="mt-2 mt-sm-0">
                                        <a href="#" class="btn w-100 btn-primary mb-0">View Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card item END -->
                @endforeach

            </div> <!-- Row END -->

            <!-- Pagination -->
            <div class="row">
                <div class="col-12">
                    {{ $tours->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
