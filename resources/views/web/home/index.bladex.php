<x-meta-tags :description="isset($metaDescription) ? $metaDescription : null" :ogUrl="isset($ogUrl) ? $ogUrl : null" :ogTitle="isset($ogTitle) ? $ogTitle : null" :ogDescription="isset($ogDescription) ? $ogDescription : null" :ogImage="isset($ogImage) ? $ogImage : null" :twitterDomain="isset($twitterDomain) ? $twitterDomain : null"
    :twitterUrl="isset($twitterUrl) ? $twitterUrl : null" :twitterTitle="isset($twitterTitle) ? $twitterTitle : null" :twitterDescription="isset($twitterDescription) ? $twitterDescription : null" :twitterImage="isset($twitterImage) ? $twitterImage : null" />

<x-web-layout>

    <x-hero />


    <section>
        <div class="relative overflow-hidden">
            <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
                <!-- Gradients -->
                <div aria-hidden="true" class="flex absolute left-0 -z-[1]">
                    <div
                        class="bg-purple-200 opacity-20 blur-3xl w-[1036px] h-[300px] dark:bg-purple-900 dark:opacity-20">
                    </div>
                </div>
                <!-- End Gradients -->

                <!-- Grid -->
                <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
                    <div class="hidden lg:block lg:col-span-2">
                        <img class="rounded-xl"
                            src="https://images.unsplash.com/photo-1671726203390-cdc4354ee2eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            alt="Image Description">
                    </div>
                    <!-- End Col -->

                    <div class="lg:col-span-4">
                        <!-- Blockquote -->
                        <blockquote>
                            <svg class="w-24 h-auto mb-4" viewBox="-0.3 0 320.3999999999999 99.9"
                                xmlns="http://www.w3.org/2000/svg" width="2500" height="779">
                                <path
                                    d="M168.7 25.1c0 3.6-2.9 6.5-6.5 6.5s-6.5-2.9-6.5-6.5 2.8-6.5 6.5-6.5c3.7.1 6.5 3 6.5 6.5zm-26.8 13.1v1.6s-3.1-4-9.7-4c-10.9 0-19.4 8.3-19.4 19.8 0 11.4 8.4 19.8 19.4 19.8 6.7 0 9.7-4.1 9.7-4.1V73c0 .8.6 1.4 1.4 1.4h8.1V36.8h-8.1c-.8 0-1.4.7-1.4 1.4zm0 24.1c-1.5 2.2-4.5 4.1-8.1 4.1-6.4 0-11.3-4-11.3-10.8s4.9-10.8 11.3-10.8c3.5 0 6.7 2 8.1 4.1zm15.5-25.5h9.6v37.6h-9.6zm143.4-1c-6.6 0-9.7 4-9.7 4V18.7h-9.6v55.7h8.1c.8 0 1.4-.7 1.4-1.4v-1.7s3.1 4.1 9.7 4.1c10.9 0 19.4-8.4 19.4-19.8s-8.5-19.8-19.3-19.8zm-1.6 30.5c-3.7 0-6.6-1.9-8.1-4.1V48.8c1.5-2 4.7-4.1 8.1-4.1 6.4 0 11.3 4 11.3 10.8s-4.9 10.8-11.3 10.8zm-22.7-14.2v22.4h-9.6V53.2c0-6.2-2-8.7-7.4-8.7-2.9 0-5.9 1.5-7.8 3.7v26.2h-9.6V36.8h7.6c.8 0 1.4.7 1.4 1.4v1.6c2.8-2.9 6.5-4 10.2-4 4.2 0 7.7 1.2 10.5 3.6 3.4 2.8 4.7 6.4 4.7 12.7zm-57.7-16.3c-6.6 0-9.7 4-9.7 4V18.7h-9.6v55.7h8.1c.8 0 1.4-.7 1.4-1.4v-1.7s3.1 4.1 9.7 4.1c10.9 0 19.4-8.4 19.4-19.8.1-11.4-8.4-19.8-19.3-19.8zm-1.6 30.5c-3.7 0-6.6-1.9-8.1-4.1V48.8c1.5-2 4.7-4.1 8.1-4.1 6.4 0 11.3 4 11.3 10.8s-4.9 10.8-11.3 10.8zm-26-30.5c2.9 0 4.4.5 4.4.5v8.9s-8-2.7-13 3v26.3H173V36.8h8.1c.8 0 1.4.7 1.4 1.4v1.6c1.8-2.1 5.7-4 8.7-4zM91.5 71c-.5-1.2-1-2.5-1.5-3.6-.8-1.8-1.6-3.5-2.3-5.1l-.1-.1C80.7 47.2 73.3 32 65.5 17l-.3-.6c-.8-1.5-1.6-3.1-2.4-4.7-1-1.8-2-3.7-3.6-5.5C56 2.2 51.4 0 46.5 0c-5 0-9.5 2.2-12.8 6-1.5 1.8-2.6 3.7-3.6 5.5-.8 1.6-1.6 3.2-2.4 4.7l-.3.6C19.7 31.8 12.2 47 5.3 62l-.1.2c-.7 1.6-1.5 3.3-2.3 5.1-.5 1.1-1 2.3-1.5 3.6C.1 74.6-.3 78.1.2 81.7c1.1 7.5 6.1 13.8 13 16.6 2.6 1.1 5.3 1.6 8.1 1.6.8 0 1.8-.1 2.6-.2 3.3-.4 6.7-1.5 10-3.4 4.1-2.3 8-5.6 12.4-10.4 4.4 4.8 8.4 8.1 12.4 10.4 3.3 1.9 6.7 3 10 3.4.8.1 1.8.2 2.6.2 2.8 0 5.6-.5 8.1-1.6 7-2.8 11.9-9.2 13-16.6.8-3.5.4-7-.9-10.7zm-45.1 5.2C41 69.4 37.5 63 36.3 57.6c-.5-2.3-.6-4.3-.3-6.1.2-1.6.8-3 1.6-4.2 1.9-2.7 5.1-4.4 8.8-4.4s7 1.6 8.8 4.4c.8 1.2 1.4 2.6 1.6 4.2.3 1.8.2 3.9-.3 6.1-1.2 5.3-4.7 11.7-10.1 18.6zm39.9 4.7c-.7 5.2-4.2 9.7-9.1 11.7-2.4 1-5 1.3-7.6 1-2.5-.3-5-1.1-7.6-2.6-3.6-2-7.2-5.1-11.4-9.7 6.6-8.1 10.6-15.5 12.1-22.1.7-3.1.8-5.9.5-8.5-.4-2.5-1.3-4.8-2.7-6.8-3.1-4.5-8.3-7.1-14.1-7.1s-11 2.7-14.1 7.1c-1.4 2-2.3 4.3-2.7 6.8-.4 2.6-.3 5.5.5 8.5 1.5 6.6 5.6 14.1 12.1 22.2-4.1 4.6-7.8 7.7-11.4 9.7-2.6 1.5-5.1 2.3-7.6 2.6-2.7.3-5.3-.1-7.6-1-4.9-2-8.4-6.5-9.1-11.7-.3-2.5-.1-5 .9-7.8.3-1 .8-2 1.3-3.2.7-1.6 1.5-3.3 2.3-5l.1-.2c6.9-14.9 14.3-30.1 22-44.9l.3-.6c.8-1.5 1.6-3.1 2.4-4.6.8-1.6 1.7-3.1 2.8-4.4 2.1-2.4 4.9-3.7 8-3.7s5.9 1.3 8 3.7c1.1 1.3 2 2.8 2.8 4.4.8 1.5 1.6 3.1 2.4 4.6l.3.6c7.6 14.9 15 30.1 21.9 45v.1c.8 1.6 1.5 3.4 2.3 5 .5 1.2 1 2.2 1.3 3.2.8 2.6 1.1 5.1.7 7.7z"
                                    fill="#ff5a5f" />
                            </svg>

                            <p
                                class="text-xl font-medium text-gray-800 lg:text-2xl lg:leading-normal dark:text-gray-200">
                                To say that switching to Preline has been life-changing is an understatement. My
                                business has tripled and I got my life back.
                            </p>

                            <footer class="mt-6">
                                <div class="flex items-center">
                                    <div class="lg:hidden flex-shrink-0">
                                        <img class="h-12 w-12 rounded-full"
                                            src="https://images.unsplash.com/photo-1671726203390-cdc4354ee2eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                            alt="Image Description">
                                    </div>
                                    <div class="ml-4 lg:ml-0">
                                        <p class="font-medium text-gray-800 dark:text-gray-200">
                                            Nicole Grazioso
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Head of Finance
                                        </p>
                                    </div>
                                </div>
                            </footer>
                        </blockquote>
                        <!-- End Blockquote -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
        </div>
    </section>
    <section>
        <!-- Card Blog -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="mx-auto  mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Kegiatan Pesantren</h2>
                <p class="mt-1 text-gray-600 dark:text-gray-400">See how game-changing companies are making the most of
                    every engagement with Preline.</p>
            </div>
            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card -->
                @for ($i = 0; $i < 6; $i++)
                <a class="group relative block transform transition-transform duration-300 hover:scale-105" href="#">
                    <div
                        class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[250px] before:absolute before:inset-x-0 before:w-full before:h-full before:bg-gradient-to-t before:from-gray-900/[.7] before:z-[1]">
                        <img class="w-full h-full absolute top-0 left-0 object-cover"
                            src="https://images.unsplash.com/photo-1619238538198-0a71b158ea7c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                            alt="Image Description">
                    </div>

                    <div class="absolute bottom-0 inset-x-0 z-10">
                        <div class="flex flex-col h-full p-4 sm:p-6">
                            <h3 class="text-md md:text-lg font-semibold text-white group-hover:text-white/[.8] overflow-ellipsis line-clamp-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis rerum quod ratione impedit amet facilis sunt hic provident
                            </h3>
                        </div>
                    </div>
                </a>

                @endfor

                <!-- End Card -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Blog -->
    </section>


    <section>
        <!-- Card Blog -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Title -->
            <div class="mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Berita Terkini</h2>
                <p class="mt-1 text-gray-600 dark:text-gray-400">See how game-changing companies are making the most of
                    every engagement with Preline.</p>
            </div>
            <!-- End Title -->

            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-1">
                @for ($i = 0; $i < 6; $i++)
                <!-- Card -->
                <a class="group hover:bg-gray-100 rounded-xl p-2 transition-all dark:hover:bg-white/[.05]"
                    href="#">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1657299171054-e679f630a776?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            alt="Image Description">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 font-bold dark:text-gray-300 dark:group-hover:text-white">
                        Atlassian powers sales and support at scale with Preline.
                    </h3>
                    <p
                        class="mt-3 inline-flex items-center gap-x-2 text-sm font-semibold text-gray-800 dark:text-gray-200">
                        Learn more
                        <svg class="w-2.5 h-2.5 transition ease-in-out group-hover:translate-x-1" width="16"
                            height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
                                fill="currentColor" />
                        </svg>
                    </p>
                </a>
                <!-- End Card -->
                @endfor
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Blog -->
    </section>

</x-web-layout>
