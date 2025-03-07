<nav class="border-b border-gray-100 bg-white" x-data="{ open: false }">
  <!-- Primary Navigation Menu -->
  <div class="mx-auto bg-[#F1D7D8] rounded-full mt-4 mr-4 px-4 sm:px-6 lg:px-8">
    <div class="flex h-12 justify-between -ml-12">
      <div class="flex">
        <!-- Navigation Links -->
        <div class="hidden space-x-4 sm:-my-px sm:ms-10 sm:flex">
          <x-nav-link :href="route('dashboard.index')" :active="request()->routeIs('dashboard.index')">
            {{ __('Dashboard') }}
          </x-nav-link>
          <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
            {{ __('Users') }}
          </x-nav-link>
          <x-nav-link :href="route('dashboard.index')" :active="request()->routeIs('#')">
            {{ __('Links') }}
          </x-nav-link>
          <x-nav-link :href="route('dashboard.index')" :active="request()->routeIs('#')">
            {{ __('Links') }}
          </x-nav-link>
          <x-nav-link :href="route('dashboard.index')" :active="request()->routeIs('#')">
            {{ __('Links') }}
          </x-nav-link>
        </div>
      </div>

      <!-- Settings Dropdown -->
      <div class="hidden sm:ms-6 sm:flex sm:items-center">
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            <button
            class="inline-flex items-center rounded-md border border-transparent bg-[#D42329] px-3 py-2 text-sm font-medium leading-4 text-white transition duration-150 ease-in-out hover:text-white/70 focus:outline-none"
            >
            <div class="mr-4">
              <i class="fa-regular fa-bell"></i>
            </div>
              <i class="fa-solid fa-gear"></i>
              <div class="ms-1">
                <svg
                  class="h-4 w-4 fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  />
                </svg>
              </div>
            </button>
          </x-slot>

          <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
              {{ __('Profile') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                                                this.closest('form').submit();"
              >
                {{ __('Log Out') }}
              </x-dropdown-link>
            </form>
          </x-slot>
        </x-dropdown>
      </div>

      <!-- Hamburger -->
      <div class="-me-2 flex items-center sm:hidden">
        <button
          class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none"
          @click="open = ! open"
        >
          <svg
            class="h-6 w-6"
            stroke="currentColor"
            fill="none"
            viewBox="0 0 24 24"
          >
            <path
              class="inline-flex"
              :class="{ 'hidden': open, 'inline-flex': !open }"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
            <path
              class="hidden"
              :class="{ 'hidden': !open, 'inline-flex': open }"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div class="hidden sm:hidden" :class="{ 'block': open, 'hidden': !open }">
    <div class="space-y-1 pb-3 pt-2">
      <x-responsive-nav-link :href="route('dashboard.index')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
      </x-responsive-nav-link>
    </div>

    <!-- Responsive Settings Options -->
    <div class="border-t border-gray-200 pb-1 pt-4">
      <div class="px-4">
        <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
        <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
      </div>

      <div class="mt-3 space-y-1">
        <x-responsive-nav-link :href="route('profile.edit')">
          {{ __('Profile') }}
        </x-responsive-nav-link>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                                        this.closest('form').submit();"
          >
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </form>
      </div>
    </div>
  </div>
</nav>
