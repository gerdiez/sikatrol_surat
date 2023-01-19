<aside class="flex-shrink-0 w-60 flex flex-col border-r transition-all duration-300" :class="{ '-ml-48': !sidebarOpen }">
    <div class="h-14 flex justify-end">
        <button class="p-1 mr-2 bg-white" x-on:click="sidebarOpen = !sidebarOpen">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
    <nav class="flex-1 ml-10 flex flex-col bg-white">
        <a href="#" class="p-2">Agenda</a>
        <a href="{{ route('surat.masuk') }}" class="p-2 mt-5">Surat Masuk</a>
        <a href="{{ route('surat.keluar') }}" class="p-2 mt-5">Surat Keluar</a>
        <a href="{{ route('surat.perintah') }}" class="p-2 mt-5">Surat Perintah</a>
        <a href="{{ route('surat.keputusan') }}" class="p-2 mt-5">Surat Keputusan</a>
        <a href="{{ route('surat.tugas') }}" class="p-2 mt-5">Surat Tugas</a>
        <a href="#" class="p-2 mt-5">User Management</a>
    </nav>
</aside>
