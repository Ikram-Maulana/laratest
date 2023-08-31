<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    title="Menu">
                    <span class="sr-only">Open sidebar</span>
                    <x-lucide-menu class="w-6 h-6" aria-hidden="true" />
                </button>
                <a href="{{ route('dashboard') }}" class="flex ml-2 md:mr-24">
                    <img src="https://monitorindonesia.com/devnews/uploads/logo_image/logo_43.png" class="h-8 mr-3"
                        alt="Monitor Indonesia Logo" />
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ml-3">
                    <a href="https://monitorindonesia.com/devnews/" target="_blank"
                        class="py-2.5 px-5 mr-8 text-sm font-medium focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 line-clamp-1 hidden md:block">
                        <div class="flex flex-row items-center gap-1">
                            <x-lucide-home class="w-4 h-4" />
                            <span>
                                Visit Home Page
                            </span>
                        </div>
                    </a>
                    <div>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                {{ Auth::user()->name }}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                {{ Auth::user()->email }}
                            </p>
                        </div>
                        <ul role="none">
                            <li class="block p-4 md:hidden">
                                <a href="https://monitorindonesia.com/devnews/" target="_blank"
                                    class="flex flex-row items-center gap-1 px-4 py-2 text-sm text-white bg-blue-500 rounded-lg hover:bg-blue-800 dark:text-white dark:hover:bg-gray-100 dark:hover:text-white"
                                    role="menuitem">
                                    <x-lucide-home class="w-4 h-4" />
                                    <span>
                                        Visit Home Page
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard') }}"
                                    class="flex flex-row items-center gap-1 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">
                                    <x-lucide-layout-dashboard class="w-4 h-4" />
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard') }}"
                                    class="flex flex-row items-center gap-1 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">
                                    <x-lucide-user-cog class="w-4 h-4" />
                                    <span>Profile</span>
                                </a>
                            </li>
                            </form>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                        class="flex flex-row items-center gap-1 px-4 py-2 text-sm text-red-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">
                                        <x-lucide-log-out class="w-4 h-4" />
                                        <span>Logout</span>
                                    </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
