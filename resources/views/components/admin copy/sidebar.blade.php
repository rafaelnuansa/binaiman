

    <!-- Sidebar -->
    <div id="application-sidebar"
        class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 left-0 bottom-0 z-[60] w-64 bg-white border-r border-gray-200 pt-7 pb-10 overflow-y-auto scrollbar-y lg:block lg:translate-x-0 lg:right-auto lg:bottom-0 dark:scrollbar-y dark:bg-gray-800 dark:border-gray-700">
        <div class="px-6">
            <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="{{ env('APP_NAME') }}">{{ env('APP_NAME') }}</a>
        </div>

        <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
            <ul class="space-y-1.5">
                <x-admin.navlink :label="'Dashboard'" :url="route('admin.dashboard.index')"></x-admin.navlink>
                <x-admin.navlink :label="'Artikel'" :url="route('admin.posts.index')"></x-admin.navlink>
                <x-admin.navlink :label="'Pages'" :url="route('admin.pages.index')"></x-admin.navlink>
                <x-admin.navlink :label="'Gallery'" :url="route('admin.photos.index')"></x-admin.navlink>

              </ul>
        </nav>
    </div>
    <!-- End Sidebar -->
