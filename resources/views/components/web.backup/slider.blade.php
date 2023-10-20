<section class="py-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-11 mx-auto">
				<!-- Slider START -->
				<div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
					<div class="tiny-slider-inner" data-gutter="0" data-arrow="true" data-dots="false" data-items="1">

                        @foreach ($sliders as $slider)
                        <div class="card overflow-hidden h-400px h-sm-600px rounded-0" style="background-image:url({{ $slider->image }}); background-position: center left; background-size: cover;">
							<!-- Background dark overlay -->
							<div class="bg-overlay bg-dark opacity-3"></div>
							<!-- Card image overlay -->
                            <div class="card-img-overlay d-flex align-items-center">
								<div class="container">
									<div class="row">
										<div class="col-11 col-lg-7">
											<h6 class="text-white fw-normal mb-0"></h6>
											<!-- Title -->
											<h1 class="text-white display-6">{{ $slider->name ?? '' }}</h1>

										</div>
									</div>
								</div>
                            </div>
						</div>

                        @endforeach
					</div>
				</div>
				<!-- Slider END -->
			</div>
		</div>
	</div>
</section>
