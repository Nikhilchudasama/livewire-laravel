<div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
     class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

<div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
     class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center mt-8">
        <div class="flex items-center">
            <svg class="h-12 w-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z"
                    fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path
                    d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z"
                    fill="white"/>
            </svg>

            <span class="text-white text-2xl mx-2 font-semibold">Dashboard</span>
        </div>
    </div>

    <nav class="mt-10">

        <x-backend.sidebar :url="'user/dashboard'">
            <x-slot name="icon">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
                </svg>
            </x-slot>
            <x-slot name="name">
                Dashboard
            </x-slot>
        </x-backend.sidebar>

        <x-backend.sidebar :dropdown="true" :url="'user/auth*'">
            <x-slot name="icon">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>

            </x-slot>
            <x-slot name="name">
                Access
            </x-slot>
            <x-slot name="submenu">
                <a href="{{ route('admin.auth.user.index') }}" class="py-3 px-6 block text-sm {{ active_class(Active::checkUriPattern('user/auth/user'), 'bg-blue-500 text-white', 'text-gray-400 hover:bg-blue-500 hover:text-white') }}">User Management</a>
                <a class="py-3 px-6 block text-sm text-gray-400 hover:bg-blue-500 hover:text-white" href="#">Role Management</a>
            </x-slot>
        </x-backend.sidebar>

{{--        SAMPLE SIDEBAR MENU CODE --}}

{{--        <a class="flex items-center py-3 px-6 transform transition-transform ease-in duration-200 bg-gray-700 bg-opacity-75 text-gray-100 transform hover:translate-x-2"--}}
{{--           href="/ui-elements">--}}
{{--            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                 stroke="currentColor">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                      d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"/>--}}
{{--            </svg>--}}

{{--            <span class="mx-3">UI Elements</span>--}}
{{--        </a>--}}

{{--        <a class="flex items-center py-3 px-6 text-gray-400 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 transform hover:translate-x-2 transition-transform ease-in duration-200"--}}
{{--           href="/tables">--}}
{{--            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                 stroke="currentColor">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                      d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>--}}
{{--            </svg>--}}

{{--            <span class="mx-3">Tables</span>--}}
{{--        </a>--}}


{{--        <div x-data="{ open: false }">--}}
{{--            <a @click="open = !open"--}}
{{--               class="flex justify-between items-center py-3 px-6 text-gray-400 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 transform hover:translate-x-2 transition-transform ease-in duration-200">--}}
{{--                <span class="flex items-center">--}}
{{--                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path--}}
{{--                            d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"--}}
{{--                            stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
{{--                            stroke-linejoin="round"></path>--}}
{{--                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"--}}
{{--                              stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
{{--                              stroke-linejoin="round"></path>--}}
{{--                    </svg>--}}

{{--                    <span class="mx-4 font-medium">Accounts</span>--}}
{{--                </span>--}}

{{--                <span>--}}
{{--                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"--}}
{{--                              stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>--}}
{{--                        <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"--}}
{{--                              stroke-linecap="round" stroke-linejoin="round"></path>--}}
{{--                    </svg>--}}
{{--                </span>--}}
{{--            </a>--}}

{{--            <div x-show="open" class="bg-gray-800">--}}
{{--                <a class="py-3 px-6 block text-sm text-gray-400 hover:bg-blue-500 hover:text-white" href="#">All--}}
{{--                    Accounts</a>--}}
{{--                <a class="py-3 px-6 block text-sm text-gray-400 hover:bg-blue-500 hover:text-white" href="#">Create--}}
{{--                    Account</a>--}}
{{--                <a class="py-3 px-6 block text-sm text-gray-400 hover:bg-blue-500 hover:text-white" href="#">Accounts--}}
{{--                    Roles</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </nav>
</div>
