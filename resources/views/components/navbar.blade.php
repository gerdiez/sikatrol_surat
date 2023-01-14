<nav class="rounded border-b bg-white px-2 py-5">
    <div class="mx-3 flex flex-wrap items-center justify-between">
        @yield('name')
        <div class="flex w-auto items-center gap-3">
            <p class="text-gray-600 font-semibold">Boa Gerday <strong x-text="open"></strong></p>
            <div class="dropdown-end dropdown">
                <button tabIndex={0} type="button"
                    class="mr-3 flex rounded-full bg-gray-800 text-sm focus:ring-4 focus:ring-gray-300 md:mr-0">
                    <img class="h-10 w-10 rounded-full"
                        src="https://ui-avatars.com/api/?background=1D4ED8&color=FFFFFF&rounded=true&name=Boa+Gerday"
                        alt="user photo" />
                </button>
                <div tabIndex={0}
                    class="dropdown-content z-50 w-36 my-3 list-none divide-y divide-gray-100 rounded bg-white text-base shadow">
                    <ul class="py-1">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Sign out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
