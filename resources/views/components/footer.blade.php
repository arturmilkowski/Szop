    <footer class="flex justify-between px-4 mt-8 pt-1 border-t-[1px] border-black text-xs text-gray-500">
        <div>
            Root name: <span class="font-semibold">{{ Route::currentRouteName() }}</span> &mdash;
            Root action: <span class="font-semibold">{{ Route::currentRouteAction() }}</span>
        </div>
        <div>
            Laravel: {{ Illuminate\Foundation\Application::VERSION }} &mdash; PHP: {{ PHP_VERSION }}
        </div>
    </footer>
