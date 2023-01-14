<aside class="pt-3 pr-1 flex-shrink-0 w-60 flex flex-col border-r transition-all duration-1000 bg-gray-50"
    :class="{ '-ml-40': !sidebarOpen }">
    <div class="h-14 flex justify-end">
        <button class="p-1 mr-2 bg-blue-700 py-2 px-4 text-2xl rounded-lg hover:brightness-125"
            x-on:click="sidebarOpen = !sidebarOpen">
            <i class="fa-solid fa-bars text-white"></i>
        </button>
    </div>
    <nav class="flex-1 mx-4 flex flex-col">
        <ul class="mt-14 text-gray-600 text-base font-normal">
            <li class="" :class="{ 'flex justify-end': !sidebarOpen }">
                <a href=""
                    class="mb-4 flex items-center rounded-lg p-2 text-base font-semibold hover:bg-blue-700 hover:text-white">
                    <i class="fa-solid fa-circle duration-300 ease-in-out"
                        :class="{ 'mr-1 order-last': !sidebarOpen }"></i>
                    <span class="ml-3 duration-6000 ease-in-out" :class="{ 'opacity-0': !sidebarOpen }">
                        Agenda </span>
                </a>
            </li>
            <li class="" :class="{ 'flex justify-end': !sidebarOpen }">
                <a href=""
                    class="mb-4 flex items-center rounded-lg p-2 text-base font-semibold hover:bg-blue-700 hover:text-white">
                    <i class="fa-solid fa-circle duration-100 ease-in-out"
                        :class="{ 'mr-1 order-last': !sidebarOpen }"></i>
                    <span class="ml-3 duration-6000 ease-in-out" :class="{ 'opacity-0': !sidebarOpen }">
                        Surat Masuk </span>
                </a>
            </li>
        </ul>
        {{-- <a href="#" class="p-2">Agenda</a>
        <a href="#" class="p-2 mt-5">Surat Masuk</a>
        <a href="#" class="p-2 mt-5">Surat Keluar</a>
        <a href="#" class="p-2 mt-5">Surat Perintah</a>
        <a href="#" class="p-2 mt-5">Surat Keputusan</a>
        <a href="#" class="p-2 mt-5">Surat Tugas</a>
        <a href="#" class="p-2 mt-5">User Management</a> --}}
    </nav>
</aside>
