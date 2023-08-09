@extends("dashboard.layouts.main")

@section("dashboard-content")
    <h1 class="text-3xl text-white font-semibold mb-5">{{auth()->user()->name}}</h1>
    <div class="md:flex md:flex-wrap md:items-stretch gap-5">
        <div
            class="block max-w-sm rounded-lg bg-white p-6 shadow-lg dark:bg-neutral-700 md:w-1/2">
            <form method="post" action="{{route("dashboard.profile.edit")}}">
                @csrf
                <h1 class="text-xl text-white font-semibold mb-5">Edit Profile</h1>
                <div class="relative mb-6" data-te-input-wrapper-init>
                    <input
                        type="text"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="name"
                        name="name"
                        value="{{auth()->user()->name}}"
                        placeholder="Name" />
                    <label
                        for="name"
                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                    >Name
                    </label>
                </div>
                @error('name')
                <span class="text-right text-sm text-red-600 mb-4">{{ $message }}</span>
                @enderror
                <div class="relative mb-6" data-te-input-wrapper-init>
                    <input
                        type="text"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="username"
                        name="username"
                        value="{{auth()->user()->username}}"
                        placeholder="Username" />
                    <label
                        for="username"
                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                    >Username
                    </label>
                </div>
                @error('username')
                <span class="text-right text-sm text-red-600 mb-4">{{ $message }}</span>
                @enderror
                <div class="relative mb-6" data-te-select-open>
                    <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                            <select data-te-select-init class="w-full" disabled>
                                <option value="2" @if(auth()->user()->level->id == 2) selected @endif>User</option>
                                <option value="1" @if(auth()->user()->level->id == 1) selected @endif>Admin</option>
                            </select>
                        </div>
                    </div>
                </div>
                @error('level_id')
                <span class="text-right text-sm text-red-600 mb-4">{{ $message }}</span>
                @enderror
                <button
                    type="submit"
                    class="w-full rounded bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    Edit
                </button>
            </form>
        </div>
        <div
            class="block max-w-sm mt-5 rounded-lg bg-white p-6 shadow-lg dark:bg-neutral-700 md:w-1/2 md:m-0">
            <form method="post" action="{{route("dashboard.users.changepassword")}}">
                @csrf
                <h1 class="text-xl text-white font-semibold mb-5">Ganti Password</h1>
                <div class="relative mb-6" data-te-input-wrapper-init>
                    <input
                        type="password"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="old_password"
                        name="old_password"
                        placeholder="Old Password" />
                    <label
                        for="old_password"
                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                    >Old Password
                    </label>
                </div>
                @error('old_password')
                <span class="text-right text-sm text-red-600 mb-4">{{ $message }}</span>
                @enderror
                <div class="relative mb-6" data-te-input-wrapper-init>
                    <input
                        type="password"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="new_password"
                        name="new_password"
                        placeholder="Old Password" />
                    <label
                        for="new_password"
                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                    >New Password
                    </label>
                </div>
                @error('new_password')
                <span class="text-right text-sm text-red-600 mb-4">{{ $message }}</span>
                @enderror
                <div class="relative mb-6" data-te-input-wrapper-init>
                    <input
                        type="password"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="new_password_confirmation"
                        name="new_password_confirmation"
                        placeholder="Old Password" />
                    <label
                        for="new_password_confirmation"
                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                    >New Password Confirmation
                    </label>
                </div>
                @error('new_password_confirmation')
                <span class="text-right text-sm text-red-600 mb-4">{{ $message }}</span>
                @enderror
                <button
                    type="submit"
                    class="w-full rounded bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    Edit
                </button>
            </form>
        </div>
    </div>
@endsection
