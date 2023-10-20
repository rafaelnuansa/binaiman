<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-4">
        <div class="w-full">
            <h2 class="text-3xl font-semibold leading-6 tracking-tight">Desa Sadar Wisata</h2>
            <p class="text-sm text-muted-foreground">Desa Sadar Wisata di Kecamatan Tenjolaya.</p>
        </div>
        <ul role="list" class="grid gap-x-8 gap-y-12 grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 xl:col-span-4">

            @foreach ($villages as $village)
            
            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full"
                        src="{{  $village->image }}"
                        alt="">
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{  $village->name }}</h3>
                        {{-- <p class="text-sm font-semibold leading-6 text-indigo-600">{{  }}</p> --}}
                    </div>
                </div>
            </li>
                
            @endforeach

            <!-- More people... -->
        </ul>
    </div>
</div>
<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>