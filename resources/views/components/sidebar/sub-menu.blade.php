@props(['route' => null, 'name' => null, 'id' => null])
<li :class="{ 'hidden': !sidebarOpen }">
    <a href="{{ $route }}"
        class="mb-4 flex items-center rounded-lg p-2 pl-9 text-base font-semibold hover:bg-blue-700 hover:text-white">
        <i class="fa-solid fa-circle duration-100 ease-in-out"></i>
        <span class="ml-3 duration-6000 ease-in-out relative">
            {{ $name }}
            <div id="{{ $id }}"
                class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-blue-700 border-2border-white rounded-full -top-4 -right-5 ">
            </div>
        </span>
    </a>
</li>
