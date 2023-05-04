@extends("layouts.main")
@section("container")
    <section class="gradient-form h-screen bg-neutral-200 dark:bg-neutral-700">
        <div class="container h-full p-10">
            <div
                class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
                <div class="w-full">
                    <div
                        class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                        <div class="g-0 lg:flex lg:flex-wrap">
                            <div class="px-4 md:px-0 lg:w-6/12">
                                <div class="p-8 md:mx-4 md:p-8">
                                    <form method="post" action="{{route("auth")}}">
                                        @csrf
                                        <p class="mb-8 text-2xl font-bold">Please login to your account</p>
                                        @if (session('failed-login'))
                                            <div class="w-80 bg-red-100 rounded-lg py-2 px-5 mb-4 text-base text-red-700" role="alert">
                                                {{ session('failed-login') }}
                                            </div>
                                        @endif
                                        <div class="relative mb-4" data-te-input-wrapper-init>
                                            <input
                                                type="text"
                                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 @error("username") border border-red-600 @enderror"
                                                id="exampleFormControlInput1"
                                                name="username"
                                                placeholder="Username"
                                                autofocus/>
                                            <label
                                                for="exampleFormControlInput1"
                                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-blue-600 peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                            >Username
                                            </label>
                                        </div>
                                        @error('username')
                                        <span class="text-right text-sm text-red-600 mb-4">{{ $message }}</span>
                                        @enderror
                                        <div class="relative mb-4" data-te-input-wrapper-init>
                                            <input
                                                type="password"
                                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                id="exampleFormControlInput11"
                                                name="password"
                                                placeholder="Password" />
                                            <label
                                                for="exampleFormControlInput11"
                                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-blue-600 peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                            >Password
                                            </label>
                                        </div>
                                        @error('password')
                                        <span class="text-right text-sm text-red-600 mb-4">{{ $message }}</span>
                                        @enderror
                                        <div class="mb-12 pt-1 pb-1 text-center">
                                            <button
                                                class="mb-3 inline-block w-full rounded px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                                                type="submit"
                                                data-te-ripple-init
                                                data-te-ripple-color="light"
                                                style="
                                                    background: #EC7026
                                                  ">
                                                Log in
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
