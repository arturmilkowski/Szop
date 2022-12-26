    <footer class="flex justify-between px-4 mt-8 pt-3 pb-3 border-t-[1px] border-black text-xs sm:text-xs md:text-sm lg:text-base xl:text-base 2xl:text-base">
        <div>
            Root name: <span class="font-semibold">{{ Route::currentRouteName() }}</span> &mdash;
            Root action: <span class="font-semibold">{{ Route::currentRouteAction() }}</span>
        </div>
        <div>
            Laravel: {{ Illuminate\Foundation\Application::VERSION }} &mdash; PHP: {{ PHP_VERSION }}
        </div>
    </footer>
