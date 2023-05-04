@extends("dashboard.layouts.main")

@section("dashboard-content")
    <section>
        @if(session("success-changerole"))
            <div
                class="mb-3 hidden w-full items-center rounded-lg bg-green-100 py-5 px-6 text-base text-green-800 data-[te-alert-show]:inline-flex"
                role="alert"
                data-te-alert-init
                data-te-alert-show>
                <strong class="mr-2">Berhasil! </strong> {{session("success-changerole")}}
                <button
                    type="button"
                    class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-alert-dismiss
                    aria-label="Close">
            <span
                class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="h-6 w-6">
                <path
                    fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
              </svg>
            </span>
                </button>
            </div>
        @endif

        @if(session("success-resetpass"))
            <div
                class="mb-3 hidden w-full items-center rounded-lg bg-green-100 py-5 px-6 text-base text-green-800 data-[te-alert-show]:inline-flex"
                role="alert"
                data-te-alert-init
                data-te-alert-show>
                <strong class="mr-2">Berhasil! </strong> {{session("success-resetpass")}}
                <button
                    type="button"
                    class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-alert-dismiss
                    aria-label="Close">
            <span
                class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="h-6 w-6">
                <path
                    fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
              </svg>
            </span>
                </button>
            </div>
        @endif
        @if(session("failed-resetpass"))
            <div
                class="mb-3 hidden w-full items-center rounded-lg bg-red-100 py-5 px-6 text-base text-red-800 data-[te-alert-show]:inline-flex"
                role="alert"
                data-te-alert-init
                data-te-alert-show>
                <strong class="mr-2">Berhasil! </strong> {{session("failed-resetpass")}}
                <button
                    type="button"
                    class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-alert-dismiss
                    aria-label="Close">
            <span
                class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="h-6 w-6">
                <path
                    fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
              </svg>
            </span>
                </button>
            </div>
        @endif
        @if(session("success-resetuser"))
            <div
                class="mb-3 hidden w-full items-center rounded-lg bg-green-100 py-5 px-6 text-base text-green-800 data-[te-alert-show]:inline-flex"
                role="alert"
                data-te-alert-init
                data-te-alert-show>
                <strong class="mr-2">Berhasil! </strong> {{session("success-resetuser")}}
                <button
                    type="button"
                    class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-alert-dismiss
                    aria-label="Close">
        <span
            class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="h-6 w-6">
            <path
                fill-rule="evenodd"
                d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                clip-rule="evenodd" />
          </svg>
        </span>
                </button>
            </div>
        @endif
        @if(session("failed-resetuser"))
                <div
                    class="mb-3 hidden w-full items-center rounded-lg bg-red-100 py-5 px-6 text-base text-red-800 data-[te-alert-show]:inline-flex"
                    role="alert"
                    data-te-alert-init
                    data-te-alert-show>
                    <strong class="mr-2">Berhasil! </strong> {{session("failed-resetuser")}}
                    <button
                        type="button"
                        class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-alert-dismiss
                        aria-label="Close">
            <span
                class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="h-6 w-6">
                <path
                    fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
              </svg>
            </span>
                    </button>
                </div>
            @endif
        @if(session("success-delete"))
            <div
                class="mb-3 hidden w-full items-center rounded-lg bg-green-100 py-5 px-6 text-base text-green-800 data-[te-alert-show]:inline-flex"
                role="alert"
                data-te-alert-init
                data-te-alert-show>
                <strong class="mr-2">Berhasil! </strong> {{session("success-delete")}}
                <button
                    type="button"
                    class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-alert-dismiss
                    aria-label="Close">
    <span
        class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="h-6 w-6">
        <path
            fill-rule="evenodd"
            d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
            clip-rule="evenodd" />
      </svg>
    </span>
                </button>
            </div>
        @endif
        @if(session("failed-delete"))
                <div
                    class="mb-3 hidden w-full items-center rounded-lg bg-red-100 py-5 px-6 text-base text-red-800 data-[te-alert-show]:inline-flex"
                    role="alert"
                    data-te-alert-init
                    data-te-alert-show>
                    <strong class="mr-2">Berhasil! </strong> {{session("failed-delete")}}
                    <button
                        type="button"
                        class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-alert-dismiss
                        aria-label="Close">
            <span
                class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="h-6 w-6">
                <path
                    fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
              </svg>
            </span>
                    </button>
                </div>
            @endif
        @if(session("success-createuser"))
                <div
                    class="mb-3 hidden w-full items-center rounded-lg bg-green-100 py-5 px-6 text-base text-green-800 data-[te-alert-show]:inline-flex"
                    role="alert"
                    data-te-alert-init
                    data-te-alert-show>
                    <strong class="mr-2">Berhasil! </strong> {{session("success-createuser")}}
                    <button
                        type="button"
                        class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-alert-dismiss
                        aria-label="Close">
            <span
                class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="h-6 w-6">
                <path
                    fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
              </svg>
            </span>
                    </button>
                </div>
            @endif
        <div class="flex flex-wrap justify-between">
            <h1 class="text-2xl text-white font-bold flex flex-row gap-3 mb-5">
                <div class="w-10 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H544c53 0 96-43 96-96V96c0-53-43-96-96-96H96zM64 96c0-17.7 14.3-32 32-32H544c17.7 0 32 14.3 32 32V416c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V96zm159.8 80a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM96 309.3c0 14.7 11.9 26.7 26.7 26.7h56.1c8-34.1 32.8-61.7 65.2-73.6c-7.5-4.1-16.2-6.4-25.3-6.4H149.3C119.9 256 96 279.9 96 309.3zM461.2 336h56.1c14.7 0 26.7-11.9 26.7-26.7c0-29.5-23.9-53.3-53.3-53.3H421.3c-9.2 0-17.8 2.3-25.3 6.4c32.4 11.9 57.2 39.5 65.2 73.6zM372 289c-3.9-.7-7.9-1-12-1H280c-4.1 0-8.1 .3-12 1c-26 4.4-47.3 22.7-55.9 47c-2.7 7.5-4.1 15.6-4.1 24c0 13.3 10.7 24 24 24H408c13.3 0 24-10.7 24-24c0-8.4-1.4-16.5-4.1-24c-8.6-24.3-29.9-42.6-55.9-47zM512 176a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM320 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                </div>
                Table of Users
            </h1>
            <a href="{{route("dashboard.users.create")}}">
                <button
                    title="Add User"
                    type="button"
                    class="border border-white rounded px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-blue-400/50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                </button>
            </a>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-white text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">Name</th>
                                <th scope="col" class="px-6 py-4">Username</th>
                                <th scope="col" class="px-6 py-4">Role</th>
                                <th scope="col" class="px-6 py-4">Level</th>
                                <th scope="col" class="px-6 py-4">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-blue-100/50 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$loop->iteration}}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{$user->name}}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{$user->username}}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{$user->level->name}}</td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <form action="{{route("dashboard.user.change.role")}}" method="post">
                                        @csrf
                                        <div class="flex flex-wrap justify-center items-center gap-3">
                                            <input type="number" name="user_id" value="{{$user->id}}" hidden>
                                            <div class="w-24">
                                                <select  data-te-select-init name="level_id">
                                                    <option @if($user->level->id == 1) selected @endif value="1">1 | Admin</option>
                                                    <option @if($user->level->id == 2) selected @endif value="2">2 | User</option>
                                                </select>
                                            </div>
                                            <button
                                            type="submit"
                                            class="inline-block rounded bg-primary p-1.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                                            data-te-ripple-init
                                            data-te-ripple-color="white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-current" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 96c38.4 0 73.7 13.5 101.3 36.1l-32.6 32.6c-4.6 4.6-5.9 11.5-3.5 17.4s8.3 9.9 14.8 9.9H416c8.8 0 16-7.2 16-16V64c0-6.5-3.9-12.3-9.9-14.8s-12.9-1.1-17.4 3.5l-34 34C331.4 52.6 280.1 32 224 32c-10.9 0-21.5 .8-32 2.3V99.2c10.3-2.1 21-3.2 32-3.2zM100.1 154.7l32.6 32.6c4.6 4.6 11.5 5.9 17.4 3.5s9.9-8.3 9.9-14.8V64c0-8.8-7.2-16-16-16H32c-6.5 0-12.3 3.9-14.8 9.9s-1.1 12.9 3.5 17.4l34 34C20.6 148.6 0 199.9 0 256c0 10.9 .8 21.5 2.3 32H67.2c-2.1-10.3-3.2-21-3.2-32c0-38.4 13.5-73.7 36.1-101.3zM445.7 224H380.8c2.1 10.3 3.2 21 3.2 32c0 38.4-13.5 73.7-36.1 101.3l-32.6-32.6c-4.6-4.6-11.5-5.9-17.4-3.5s-9.9 8.3-9.9 14.8V448c0 8.8 7.2 16 16 16H416c6.5 0 12.3-3.9 14.8-9.9s1.1-12.9-3.5-17.4l-34-34C427.4 363.4 448 312.1 448 256c0-10.9-.8-21.5-2.3-32zM224 416c-38.4 0-73.7-13.5-101.3-36.1l32.6-32.6c4.6-4.6 5.9-11.5 3.5-17.4s-8.3-9.9-14.8-9.9H32c-8.8 0-16 7.2-16 16l0 112c0 6.5 3.9 12.3 9.9 14.8s12.9 1.1 17.4-3.5l34-34C116.6 459.4 167.9 480 224 480c10.9 0 21.5-.8 32-2.3V412.8c-10.3 2.1-21 3.2-32 3.2z"/></svg>
                                        </button>
                                        </div>
                                    </form>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <a href="{{route("dashboard.reset-password", ["username" => $user->username])}}">
                                        <button
                                            type="button"
                                            title="Reset Password"
                                            onclick="return confirm('Yakin ingin mereset password {{$user->username}}?')"
                                            class="inline-block rounded bg-yellow-600 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-yellow-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-current" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>
                                        </button>
                                    </a>
                                    <a href="{{route("dashboard.reset-username", ["username" => $user->username])}}">
                                        <button
                                            title="Reset Username"
                                            onclick="return confirm('Yakin ingin mereset username {{$user->username}}?')"
                                            type="button"
                                            class="inline-block rounded bg-orange-600 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-orange-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-current" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H322.8c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7l40.3-40.3c-32.1-31-75.7-50.1-123.9-50.1H178.3zm435.5-68.3c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM375.9 417c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L576.1 358.7l-71-71L375.9 417z"/></svg>
                                        </button>
                                    </a>
                                    <a href="{{route("dashboard.delete", ["username" => $user->username])}}">
                                        <button
                                            title="Delete User"
                                            type="button"
                                            onclick="return confirm('Yakin ingin delete user {{$user->username}}?')"
                                            class="inline-block rounded bg-red-600 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-red-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-current" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM471 143c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
