<nav class="rounded border-b bg-white px-2 py-5">
    <div class="mx-3 flex flex-wrap items-center justify-between">
        @yield('name')
        <div class="flex w-auto items-center gap-3">
            <p class="text-gray-600 font-semibold">{{ auth()->user()->name }}<strong x-text="open"></strong></p>
            <div class="dropdown-end dropdown">
                <button tabIndex={0} type="button"
                    class="mr-3 flex rounded-full bg-gray-800 text-sm focus:ring-4 focus:ring-gray-300 md:mr-0">
                    <img class="h-10 w-10 rounded-full"
                        src="https://ui-avatars.com/api/?background=1D4ED8&color=FFFFFF&rounded=true&name={{ auth()->user()->name }}"
                        alt="user photo" />
                </button>
                <div tabIndex={0}
                    class="dropdown-content z-50 my-3 list-none divide-y divide-gray-100 rounded bg-white border border-gray-300 text-base shadow-2xl">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->username }}</span>
                        <span
                            class="block text-sm font-medium text-gray-500 dark:text-gray-400">{{ auth()->user()->email }}</span>
                    </div>
                    <ul class="py-1">
                        <li>
                            <form action="/logout" method="post" class="mb-0 text-sm text-gray-700 hover:bg-gray-100">
                                @csrf
                                <button type="submit" class="px-4 py-2 block w-full text-left">
                                    Sign out
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
