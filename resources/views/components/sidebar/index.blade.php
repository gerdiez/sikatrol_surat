<aside class="pt-3 pr-1 flex-shrink-0 w-60 flex flex-col border-r bg-white"
    :class="{ '-ml-40 transition-all duration-1000': !sidebarOpen }">
    <div class="h-14 flex justify-end">
        <button class="p-1 mr-2 bg-blue-700 py-2 px-4 text-2xl rounded-lg hover:brightness-125"
            x-on:click="sidebarOpen = !sidebarOpen">
            <i class="fa-solid fa-bars text-white"></i>
        </button>
    </div>
    {{ $notif }}
    <nav class="flex-1 mx-4 flex flex-col">
        <ul class="mt-14 text-gray-600 text-base font-normal cursor-pointer">
            <x-sidebar.menu name="Agenda" route="{{ route('agenda') }}" id="agenda" />
            <li x-data="{ dropdown: true }" :class="{ 'flex justify-end': !sidebarOpen }">
                <x-sidebar.menu-dropdown name="Surat Masuk" />
                <ul class="space-y-1 py-1 hidden" :class="{ '!block': dropdown }">
                    <x-sidebar.sub-menu name="Belum Disposisi" route="{{ route('surat.masuk.belum') }}"
                        id="belum" />
                    <x-sidebar.sub-menu name="Sudah Disposisi" route="{{ route('surat.masuk.sudah') }}"
                        id="disposisi" />
                </ul>
            </li>
            <li x-data="{ dropdown: true }" :class="{ 'flex justify-end': !sidebarOpen }">
                <x-sidebar.menu-dropdown name="Surat Keluar" />
                <ul class="space-y-1 py-1 hidden" :class="{ '!block': dropdown }">
                    @cannot('sekretaris')
                        <x-sidebar.sub-menu name="Belum Dinomori" route="{{ route('surat.keluar.belum.dinomori') }}"
                            id="dinomori" />
                    @endcannot
                    <x-sidebar.sub-menu name="Pengajuan" route="{{ route('surat.keluar.pengajuan') }}" id="pengajuan" />
                    <x-sidebar.sub-menu name="Disetujui" route="{{ route('surat.keluar.disetujui') }}" id="disetujui" />
                </ul>
            </li>
            <x-sidebar.menu name="Surat Perintah" route="{{ route('surat.perintah') }}" id="perintah" />
            <x-sidebar.menu name="Surat Keputusan" route="{{ route('surat.keputusan') }}" id="keputusan" />
            <x-sidebar.menu name="Surat Tugas" route="{{ route('surat.tugas') }}" id="tugas" />
        </ul>
    </nav>
</aside>
