<nav
    id="main-navbar"
    class="fixed top-0 right-0 left-0 flex w-full flex-nowrap items-center justify-between bg-[#1A202C] py-[0.6rem] text-gray-500 shadow-lg dark:bg-zinc-700 lg:flex-wrap lg:justify-start xl:pl-60"
    data-te-navbar-ref>
    <!-- Container wrapper -->
    <div
        class="flex w-full flex-wrap items-center justify-between px-4">
        <!-- Toggler -->
        <button
            data-te-sidenav-toggle-ref
            data-te-target="#sidenav-1"
            class="block border-0 py-2 rounded border border-rounded px-2.5 text-gray-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 xl:hidden"
            aria-controls="#sidenav-1"
            aria-haspopup="true">
            <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="h-5 w-5">
                <path
                    fill-rule="evenodd"
                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                    clip-rule="evenodd" />
              </svg>
            </span>
        </button>
        <div class="flex justify-center">
            <div>
                <div class="relative" data-te-dropdown-ref>
                    <a
                        class="flex items-center whitespace-nowrap rounded border px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white"
                        href="#"
                        type="button"
                        id="dropdownMenuButton2"
                        data-te-dropdown-toggle-ref
                        aria-expanded="false"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        <img src="{{url("/img/users-white.svg")}}" class="mr-2" width="20px" alt="">
                        {{auth()->user()->username}}
                        <span class="ml-2 w-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        class="h-5 w-5">
                      <path
                          fill-rule="evenodd"
                          d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                          clip-rule="evenodd" />
                    </svg>
                  </span>
                    </a>
                    <ul
                        class="absolute z-[1000] float-left m-0 hidden w-full min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton2"
                        data-te-dropdown-menu-ref>
                        <li>
                            <a
                                class="block w-full whitespace-nowrap text-red-600 bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="{{route("home")}}"
                                data-te-dropdown-item-ref
                            >Home</a>
                        </li>
                        <li>
                            <a
                                class="block w-full whitespace-nowrap text-red-600 bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="/logout"
                                data-te-dropdown-item-ref
                            >Logout</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Container wrapper -->
</nav>
