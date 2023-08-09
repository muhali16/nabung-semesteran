<!-- Sidenav -->
<nav
    id="sidenav-1"
    class="bg-[#1A202C] fixed top-0 left-0 z-[1035] h-screen w-60 -translate-x-full overflow-hidden shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] dark:bg-zinc-800 xl:data-[te-sidenav-hidden='false']:translate-x-0"
    data-te-sidenav-init
    data-te-sidenav-hidden="false"
    data-te-sidenav-mode-breakpoint-over="0"
    data-te-sidenav-mode-breakpoint-side="md"
    data-te-sidenav-content="#content"
    data-te-sidenav-accordion="true">
    <a
        class="mb-3 flex items-center justify-center py-6 outline-none"
        href="#"
        data-te-ripple-init
        data-te-ripple-color="primary">
        <span class="text-[#D4372D] text-xl font-bold">Nabung Semesteran</span>
    </a>

    <span class="text-md px-6 outline-none text-white">Role: <strong>{{auth()->user()->level->name}}</strong></span>

    <ul
        class="relative m-0 mt-5 list-none px-[0.2rem]"
        data-te-sidenav-menu-ref>
        <li class="relative text-gray-200">
            <a
                class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem] outline-none transition duration-300 ease-linear hover:bg-blue-400/10 hover:text-blue-600 hover:outline-none focus:bg-blue-400/10 focus:text-blue-600 focus:outline-none active:bg-blue-400/10 active:text-blue-600 active:outline-none data-[te-sidenav-state-active]:text-blue-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                href="/dashboard"
                data-te-sidenav-link-ref>
              <span
                  class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-blue-600 group-focus:[&>svg]:fill-blue-600 group-active:[&>svg]:fill-blue-600 group-[te-sidenav-state-active]:[&>svg]:fill-blue-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm320 96c0-26.9-16.5-49.9-40-59.3V88c0-13.3-10.7-24-24-24s-24 10.7-24 24V292.7c-23.5 9.5-40 32.5-40 59.3c0 35.3 28.7 64 64 64s64-28.7 64-64zM144 176a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm-16 80a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM400 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
              </span>
                <span>Dashboard</span></a
            >
        </li>
        @can("is_admin")
            <li class="relative text-gray-100">
                <a
                    class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem] outline-none transition duration-300 ease-linear hover:bg-blue-400/10 hover:text-blue-600 hover:outline-none focus:bg-blue-400/10 focus:text-blue-600 focus:outline-none active:bg-blue-400/10 active:text-blue-600 active:outline-none data-[te-sidenav-state-active]:text-blue-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    href="/dashboard/administrator"
                    data-te-sidenav-link-ref>
                  <span
                      class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-blue-600 group-focus:[&>svg]:fill-blue-600 group-active:[&>svg]:fill-blue-600 group-[te-sidenav-state-active]:[&>svg]:fill-blue-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M176 88v40H336V88c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zm-48 40V88c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56v40h28.1c12.7 0 24.9 5.1 33.9 14.1l51.9 51.9c9 9 14.1 21.2 14.1 33.9V304H384V288c0-17.7-14.3-32-32-32s-32 14.3-32 32v16H192V288c0-17.7-14.3-32-32-32s-32 14.3-32 32v16H0V227.9c0-12.7 5.1-24.9 14.1-33.9l51.9-51.9c9-9 21.2-14.1 33.9-14.1H128zM0 416V336H128v16c0 17.7 14.3 32 32 32s32-14.3 32-32V336H320v16c0 17.7 14.3 32 32 32s32-14.3 32-32V336H512v80c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64z"/></svg>
                  </span>
                    <span>Administrator</span></a
                >
            </li>
            <li class="relative text-gray-100">
            <a
                class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem] outline-none transition duration-300 ease-linear hover:bg-blue-400/10 hover:text-blue-600 hover:outline-none focus:bg-blue-400/10 focus:text-blue-600 focus:outline-none active:bg-blue-400/10 active:text-blue-600 active:outline-none data-[te-sidenav-state-active]:text-blue-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                href="/dashboard/users"
                data-te-sidenav-link-ref>
              <span
                  class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-blue-600 group-focus:[&>svg]:fill-blue-600 group-active:[&>svg]:fill-blue-600 group-[te-sidenav-state-active]:[&>svg]:fill-blue-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
              </span>
                <span>Users</span></a
            >
        </li>
            <li class="relative text-gray-100">
                <a
                    class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem] outline-none transition duration-300 ease-linear hover:bg-blue-400/10 hover:text-blue-600 hover:outline-none focus:bg-blue-400/10 focus:text-blue-600 focus:outline-none active:bg-blue-400/10 active:text-blue-600 active:outline-none data-[te-sidenav-state-active]:text-blue-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    href="/dashboard/users"
                    data-te-sidenav-link-ref>
              <span
                  class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-blue-600 group-focus:[&>svg]:fill-blue-600 group-active:[&>svg]:fill-blue-600 group-[te-sidenav-state-active]:[&>svg]:fill-blue-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M448 256A192 192 0 1 0 64 256a192 192 0 1 0 384 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 80a80 80 0 1 0 0-160 80 80 0 1 0 0 160zm0-224a144 144 0 1 1 0 288 144 144 0 1 1 0-288zM224 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
              </span>
                    <span>Goals</span></a
                >
            </li>
        @endcan
    </ul>
</nav>
<!-- Sidenav -->
