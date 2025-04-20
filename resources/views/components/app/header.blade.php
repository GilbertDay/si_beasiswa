<header class="sticky top-0 before:absolute before:inset-0 before:backdrop-blur-md max-lg:before:bg-[#5452D7] dark:max-lg:before:bg-[#5452D7] before:-z-10 z-30 {{ $variant === 'v2' || $variant === 'v3' ? 'before:bg-white after:absolute after:h-px after:inset-x-0 after:top-full after:bg-[#5452D7] dark:after:bg-gray-700/60 after:-z-10' : 'max-lg:shadow-xs lg:before:bg-[#5452D7] dark:lg:before:bg-[#5452D7]' }} {{ $variant === 'v2' ? 'dark:before:bg-[#5452D7]' : '' }} {{ $variant === 'v3' ? 'dark:before:bg-[#5452D7]' : '' }}">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 {{ $variant === 'v2' || $variant === 'v3' ? '' : 'lg:border-b border-gray-200 dark:border-gray-700/60' }}">

            <!-- Header: Left side -->
            <div class="flex">

                <!-- Hamburger button -->
                <button
                    class="text-white hover:text-gray-600 dark:hover:text-gray-400 lg:hidden"
                    @click.stop="sidebarOpen = !sidebarOpen"
                    aria-controls="sidebar"
                    :aria-expanded="sidebarOpen"
                >
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="5" width="16" height="2" />
                        <rect x="4" y="11" width="16" height="2" />
                        <rect x="4" y="17" width="16" height="2" />
                    </svg>
                </button>

            </div>

            <!-- Header: Right side -->
            <div class="flex items-center space-x-3">

                {{-- <!-- Search Button with Modal -->
                <x-modal-search />

                <!-- Notifications button -->
                <x-dropdown-notifications align="right" />

                <!-- Info button -->
                <x-dropdown-help align="right" />

                <!-- Dark mode toggle -->
                <x-theme-toggle />

                <!-- Divider -->
                <hr class="w-px h-6 bg-gray-200 dark:bg-gray-700/60 border-none" /> --}}

                <!-- User button -->
                <x-dropdown-profile align="right" />

            </div>

        </div>
    </div>
</header>
