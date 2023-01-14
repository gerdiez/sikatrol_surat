<a x-on:click="dropdown = !dropdown"
    class="mb-4 flex items-center rounded-lg p-2 text-base font-semibold hover:bg-blue-700 hover:text-white">
    <i class="fa-solid fa-circle duration-100 ease-in-out" :class="{ 'mr-1 order-last': sidebarOpen }"></i>
    <span class="ml-3 duration-300 ease-in-out" :class="{ 'opacity-0': sidebarOpen }">
        {{ $name }}</span>
    <template x-if="dropdown">
        <i class="fa-solid fa-chevron-up ml-auto" :class="{ 'opacity-0': sidebarOpen }"></i>
    </template>
    <template x-if="!dropdown">
        <i class="fa-solid fa-chevron-down ml-auto " :class="{ 'opacity-0': sidebarOpen }"></i>
    </template>
</a>
