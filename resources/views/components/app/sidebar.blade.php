<div>
  <!-- Sidebar backdrop (mobile only) -->
  <div class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
    :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

  <!-- Sidebar -->
  <div id="sidebar"
    class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false" @keydown.escape.window="sidebarOpen = false"
    x-cloak="lg">

    <!-- Sidebar header -->
    <div class="flex justify-between mb-10 pr-3 sm:px-2">
      <!-- Close button -->
      <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar"
        :aria-expanded="sidebarOpen">
        <span class="sr-only">Close sidebar</span>
        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
        </svg>
      </button>
      <!-- Logo -->
      <a class="block" href="{{ route('dashboard') }}">
        <img src="{{ asset('images/logo-pelindo.png') }}" alt="">
      </a>
    </div>

    <!-- Links -->
    <div class="space-y-8">
      <!-- Pages group -->
      <div>
        <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
          <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6" aria-hidden="true">•••</span>
          <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">Pages</span>
        </h3>
        <ul class="mt-3">
          <!-- Dashboard -->
          <li class="px-3 py-2 rounded-sm mb-0.5 hover:bg-slate-600 last:mb-0 @if (Request::is('dashboard')) {{ 'bg-slate-900' }} @endif"
            x-data="{ open: {{ in_array(Request::segment(1), ['dashboard']) ? 1 : 0 }} }">
            <a class="block text-slate-200 hover:text-white truncate transition duration-100 @if (Request::is('dashboard')) {{ '!text-indigo-500' }} @endif"
              href="{{ route('dashboard') }}">
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    <path class="fill-current @if (Request::is('dashboard')) {{ 'text-indigo-500' }}@else{{ 'text-slate-400' }} @endif"
                      d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                    <path class="fill-current @if (Request::is('dashboard')) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                      d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                    <path class="fill-current @if (Request::is('dashboard')) {{ 'text-indigo-200' }}@else{{ 'text-slate-400' }} @endif"
                      d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                  </svg>
                  <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                </div>
              </div>
            </a>
          </li>
          <!-- Kapal -->
          <li
            class="px-3 py-2 cursor-pointer rounded-sm mb-0.5 hover:bg-slate-600 last:mb-0 @if (Request::is('dashboard/kapal*')) {{ 'bg-slate-900' }} @elseif (Request::is('dashboard/details*')) {{ 'bg-slate-900' }} @endif"
            x-data="{ open: {{ Request::is('dashboard/kapal*', 'dashboard/details*') ? 1 : 0 }} }">
            <div
              class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(2), ['kapal'])) {{ 'hover:text-white' }} @endif"
              @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    <path class="fill-current @if (Request::is('dashboard/kapal*')) {{ 'text-indigo-300' }} @elseif (Request::is('dashboard/details*')) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                      d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z" />
                    <path class="fill-current @if (Request::is('dashboard/kapal*')) {{ 'text-indigo-600' }} @elseif (Request::is('dashboard/details*')) {{ 'text-indigo-600' }}@else{{ 'text-slate-700' }} @endif"
                      d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z" />
                    <path class="fill-current @if (Request::is('dashboard/kapal*')) {{ 'text-indigo-500' }} @elseif (Request::is('dashboard/details*')) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                      d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z" />
                  </svg>
                  <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Kapal</span>
                </div>
                <!-- Icon -->
                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                  <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(2), ['details'])) {{ 'rotate-180' }} @endif"
                    :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                  </svg>
                </div>
              </div>
            </div>
            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
              <ul
                class="pl-9 mt-1 ml-3 @if (!Request::is('dashboard/kapal*')) {{ 'hidden' }} @elseif (!Request::is('dashboard/details*')) {{ 'hidden' }} @endif"
                :class="open ? '!block' : 'hidden'">
                <li class="mb-1 last:mb-0">
                  <a class="block text-slate-400 hover:text-white transition duration-150 truncate @if (Route::is('kapal.index')) {{ '!text-indigo-500' }} @endif"
                    href="{{ route('kapal.index') }}">
                    <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">List Kapal</span>
                  </a>
                </li>
                <li class="mb-1 last:mb-0">
                  <a class="block text-slate-400 hover:text-white transition duration-150 truncate @if (Route::is('kapal.create')) {{ '!text-indigo-500' }} @endif"
                    href="{{ route('kapal.create') }}">
                    <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Tambah Data
                      Kapal</span>
                  </a>
                </li>
                <li class="mb-1 last:mb-0">
                  <a class="block text-slate-400 hover:text-white transition duration-150 truncate @if (Route::is('details.index')) {{ '!text-indigo-500' }} @endif"
                    href="{{ route('details.index') }}">
                    <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Rincian Data
                      Kapal</span>
                  </a>
                </li>
                <li class="mb-1 last:mb-0">
                  <a class="block text-slate-400 hover:text-white transition duration-150 truncate @if (Route::is('details.create')) {{ '!text-indigo-500' }} @endif"
                    href="{{ route('details.create') }}">
                    <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Tambah Rincian
                      Kapal</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <!-- Penjadwalan -->
          <li
            class="px-3 py-2 cursor-pointer rounded-sm mb-0.5 hover:bg-slate-600 last:mb-0 @if (Request::is('dashboard/schedules*')) {{ 'bg-slate-900' }} @endif"
            x-data="{ open: {{ Request::is('dashboard/schedules*') ? 1 : 0 }} }">
            <div
              class="block text-slate-200 hover:text-white truncate transition duration-150 @if (Request::is('dashboard/schedules*')) {{ 'hover:text-white' }} @endif"
              @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    <path class="fill-current @if (Request::is('dashboard/schedules*')) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                      d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z" />
                    <path class="fill-current @if (Request::is('dashboard/schedules*')) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                      d="M1 1h22v23H1z" />
                    <path class="fill-current @if (Request::is('dashboard/schedules*')) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                      d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z" />
                  </svg>
                  <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Penjadwalan
                    Kapal</span>
                </div>
                <!-- Icon -->
                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                  <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['tasks'])) {{ 'rotate-180' }} @endif"
                    :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                  </svg>
                </div>
              </div>
            </div>
            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
              <ul class="pl-9 mt-1 ml-3 @if (!Request::is('dashboard/schedules')) {{ 'hidden' }} @endif" :class="open ? '!block' : 'hidden'">
                <li class="mb-1 last:mb-0">
                  <a class="block text-slate-400 hover:text-white transition duration-150 truncate @if (Route::is('schedules.index')) {{ '!text-indigo-500' }} @endif"
                    href="{{ route('schedules.index') }}">
                    <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">List Jadwal</span>
                  </a>
                </li>
                <li class="mb-1 last:mb-0">
                  <a class="block text-slate-400 hover:text-white transition duration-150 truncate @if (Route::is('schedules.create')) {{ '!text-indigo-500' }} @endif"
                    href="{{ route('schedules.create') }}">
                    <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Tambah Jadwal</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          {{-- Rekapitulasi Data --}}
          <li class="px-3 py-2 rounded-sm mb-0.5 hover:bg-slate-600 last:mb-0 @if (Request::is('dashboard/rekapitulasi*')) {{ 'bg-slate-900' }} @endif"
            x-data="{ open: {{ Request::is('dashboard/rekapitulasi*') ? 1 : 0 }} }">
            <a class="block text-slate-200 hover:text-white truncate transition duration-100 @if (Request::is('dashboard/rekapitulasi*')) {{ '!text-indigo-500' }} @endif"
              href="{{ route('rekapitulasi.index') }}">
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    <path class="fill-current @if (Request::is('dashboard/rekapitulasi*')) {{ 'text-indigo-500' }}@else{{ 'text-slate-400' }} @endif"
                      d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                    <path class="fill-current @if (Request::is('dashboard/rekapitulasi*')) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                      d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                    <path class="fill-current @if (Request::is('dashboard/rekapitulasi*')) {{ 'text-indigo-200' }}@else{{ 'text-slate-400' }} @endif"
                      d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                  </svg>
                  <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Rekapitulasi
                    Data</span>
                </div>
              </div>
            </a>
          </li>
          <!-- Settings -->
          <li
            class="px-3 py-2 cursor-pointer rounded-sm mb-0.5 hover:bg-slate-600 last:mb-0 @if (in_array(Request::segment(1), ['settings'])) {{ 'bg-slate-900' }} @endif"
            x-data="{ open: {{ in_array(Request::segment(1), ['settings']) ? 1 : 0 }} }">
            <div
              class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['settings'])) {{ 'hover:text-white' }} @endif"
              @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    <path class="fill-current @if (in_array(Request::segment(1), ['settings'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                      d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z" />
                    <path class="fill-current @if (in_array(Request::segment(1), ['settings'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                      d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z" />
                    <path class="fill-current @if (in_array(Request::segment(1), ['settings'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                      d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z" />
                    <path class="fill-current @if (in_array(Request::segment(1), ['settings'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                      d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z" />
                  </svg>
                  <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Settings</span>
                </div>
                <!-- Icon -->
                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                  <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['settings'])) {{ 'rotate-180' }} @endif"
                    :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                  </svg>
                </div>
              </div>
            </div>
            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
              <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), ['settings'])) {{ 'hidden' }} @endif" :class="open ? '!block' : 'hidden'">
                <li class="mb-1 last:mb-0">
                  <a class="block text-slate-400 hover:text-white transition duration-150 truncate @if (Route::is('account')) {{ '!text-indigo-500' }} @endif"
                    href="{{ route('profile.show') }}">
                    <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">My Account</span>
                  </a>
                </li>
                <li class="mb-1 last:mb-0">
                  <a class="block text-slate-400 hover:text-white transition duration-150 truncate @if (Route::is('notifications')) {{ '!text-indigo-500' }} @endif"
                    href="/tambah-akun">
                    <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Tambah Akun</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- Expand / collapse button -->
    <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
      <div class="px-3 py-2">
        <button @click="sidebarExpanded = !sidebarExpanded">
          <span class="sr-only">Expand / collapse sidebar</span>
          <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
            <path class="text-slate-400" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
            <path class="text-slate-600" d="M3 23H1V1h2z" />
          </svg>
        </button>
      </div>
    </div>

  </div>
</div>
