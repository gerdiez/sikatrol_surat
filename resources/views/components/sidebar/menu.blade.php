@props(['route' => null, 'name' => null])
<li :class="{ 'flex justify-end': !sidebarOpen }">
    <a href="{{ $route }}"
        class="mb-4 flex items-center rounded-lg p-2 text-base font-semibold hover:bg-blue-700 hover:text-white">
        <i class="fa-solid fa-circle duration-300 ease-in-out" :class="{ 'mr-1 order-last': !sidebarOpen }"></i>
        <span class="ml-3 duration-300 ease-in-out" :class="{ 'opacity-0': !sidebarOpen }">
            {{ $name }} </span>
    </a>
</li>
