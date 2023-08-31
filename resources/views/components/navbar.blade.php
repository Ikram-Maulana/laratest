<div class="top-bar-ads bg-red-800 py-2">
    <div class="container w-full flex justify-center mx-auto">
        <p class="text-zinc-50 text-md">Available Ads space</p>
    </div>
</div>
<div class="top-bar-logo">
    <a href="#">
    <div class="container w-full flex justify-between lg:justify-center py-4 items-center mx-auto">
            <img src={{asset("logo.png")}} alt="Logo" class="max-w-[10rem] md:max-w-[14rem]">
        </a>
        <div class="flex gap-4 lg:hidden items-center">
        <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-zinc-500 rounded-lg hover:bg-zinc-100 focus:outline-none focus:ring-2 focus:ring-zinc-200 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:focus:ring-zinc-600" aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>  
    <button type="button" class="text-zinc-50 mt-2 block lg:hidden bg-red-800 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign in</button>   
        </div>
    </div>
</div>
<nav class="lg:bg-red-800 border-zinc-200 dark:bg-zinc-900 dark:border-zinc-700 ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
    <div class="hidden w-full lg:block" id="navbar-dropdown">
      <div class="flex justify-between w-full">
        <ul class="flex flex-col overflow-auto w-full font-normal p-4 lg:p-0 mt-4 border border-zinc-100  bg-zinc-50 lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0 lg:bg-red-800 dark:bg-zinc-800 lg:dark:bg-zinc-900 dark:border-zinc-700">
        <li class="md:py-4 md:px-2 md:hover:bg-red-700/40">
          <a href="#" class="block px-2 py-2  text-zinc-50 bg-red-800 rounded md:bg-transparent md:text-blue-white md:p-0" aria-current="page">Home</a>
        </li>
        <li class="md:py-4 md:px-2 md:hover:bg-red-700/40">
          <a href="#" class="block px-2 py-2  md:text-zinc-50 text-zinc-900 rounded hover:bg-zinc-100 md:hover:bg-transparent md:border-0 md:p-0 ">Nasional</a>
        </li>
        <li class="md:py-4 md:px-2 md:hover:bg-red-700/40">
          <a href="#" class="block px-2 py-2  md:text-zinc-50 text-zinc-900 rounded hover:bg-zinc-100 md:hover:bg-transparent md:border-0  md:p-0 ">Politik</a>
        </li>
        <li class="md:py-4 md:px-2 md:hover:bg-red-700/40">
          <a href="#" class="block px-2 py-2  md:text-zinc-50 text-zinc-900 rounded hover:bg-zinc-100 md:hover:bg-transparent md:border-0  md:p-0 ">Ekonomi</a>
        </li>
        <li class="md:py-4 md:px-2 md:hover:bg-red-700/40">
          <a href="#" class="block px-2 py-2  md:text-zinc-50 text-zinc-900 rounded hover:bg-zinc-100 md:hover:bg-transparent md:border-0  md:p-0 ">Megapolitan</a>
        </li>
        <li class="md:py-4 md:px-2 md:hover:bg-red-700/40">
          <a href="#" class="block px-2 py-2  md:text-zinc-50 text-zinc-900 rounded hover:bg-zinc-100 md:hover:bg-transparent md:border-0  md:p-0 ">Investigasi</a>
        </li>
        <li class="md:py-4 md:px-2 md:hover:bg-red-700/40">
          <a href="#" class="block px-2 py-2  md:text-zinc-50 text-zinc-900 rounded hover:bg-zinc-100 md:hover:bg-transparent md:border-0  md:p-0 ">Sport</a>
        </li>
        <li class="md:py-4 md:px-2 md:hover:bg-red-700/40">
          <a href="#" class="block px-2 py-2 md:text-zinc-50 text-zinc-900 rounded hover:bg-zinc-100 md:hover:bg-transparent md:border-0  md:p-0 ">Lifestyle</a>
        </li>
            <li class="md:py-4 md:px-2 md:hover:bg-red-700/40">
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center px-2 py-2 justify-between w-full  md:text-zinc-50 text-zinc-900 rounded hover:bg-zinc-100 md:hover:bg-transparent md:border-0  md:p-0 md:w-auto dark:text-zinc-50 md:dark:hover:text-blue-500 dark:focus:text-zinc-50 dark:border-zinc-700 dark:hover:bg-zinc-700 md:dark:hover:bg-transparent">Nusantara<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white border divide-y divide-zinc-100 rounded-lg shadow-sm w-44 dark:bg-zinc-700 dark:divide-zinc-600">
                <ul class="py-2 text-sm text-zinc-900 dark:text-zinc-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-zinc-50">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-zinc-50">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-zinc-50">Earnings</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-zinc-700 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:text-zinc-400 dark:hover:text-zinc-50">Sign out</a>
                </div>
            </div>
        </li>
      </ul>
      <div class="lg:flex hidden flex-row items-center text-zinc-50 gap-2 justify-end w-24">
        <x-lucide-log-in class="w-4 h-4" />
        <a href="#">Sign in</a>
      </div>
      </div>
    </div>
  </div>
</nav>
