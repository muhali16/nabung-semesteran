@extends('layouts.main')

@section('container')
    @include('layouts.header')
    @include('layouts.nav')
    <!-- Main -->
    <main class="p-4 md:px-72">
        <h1 class="text-2xl font-semibold text-white pl-5">Profile: {{auth()->user()->name}}</h1>
        <section class="mx-5 p-5 bg-silver mt-3 rounded-md">
            <h2 class="text-lg text-white font-semibold">Edit Profile</h2>
            @if(session("success-update"))
                <div class="px-4 py-2 my-3 bg-lightgreen text-green rounded-md">
                    <p><strong>Success |</strong> {{session("success-update")}}!</p>
                </div>
            @endif
            <form action="" method="post" class="flex flex-col gap-2 mt-4 items-end">
                @csrf
                @method("patch")
                <label for="name" class="w-full text-white text-sm flex flex-col gap-1">
                    Name
                    <input type="text" name="name" id="name" class="input-primary" placeholder="Name" value="{{auth()->user()->name}}">
                    @error('name')
                    <span class="text-right text-sm text-red mb-4">{{ $message }}</span>
                    @enderror
                </label>
                <label for="username" class="w-full text-white text-sm flex flex-col gap-1">
                    Username
                    <input type="text" id="username" name="username" class="input-primary" placeholder="Username" value="{{auth()->user()->username}}">
                    @error('username')
                    <span class="text-right text-sm text-red mb-4">{{ $message }}</span>
                    @enderror
                </label>
                <label for="level" class="w-full text-white text-sm flex flex-col gap-1">
                    Level
                    <input type="text" id="level" name="level" class="input-primary" value="{{auth()->user()->level_id}}" disabled>
                </label>
                <button type="submit" class="mt-2 button-primary rounded-md w-24">Edit</button>
            </form>
        </section>
        <section class="mx-5 p-5 bg-silver mt-3 rounded-md">
            <h2 class="text-lg text-white font-semibold">Change Password</h2>
            @if(session("success-changepassword"))
                <div class="px-4 py-2 my-3 bg-lightgreen text-green rounded-md">
                    <p><strong>Success |</strong> {{session("success-changepassword")}}!</p>
                </div>
            @endif
            @if(session("failed-changepassword"))
                <div class="px-4 py-2 my-3 bg-lightgreen text-green rounded-md">
                    <p><strong>Failed |</strong> {{session("failed-changepassword")}}!</p>
                </div>
            @endif
            <form action="{{route("profile.changepassword")}}" method="post" class="flex flex-col gap-2 mt-4 items-end">
                @csrf
                @method("patch")
                <label for="password" class="w-full text-white text-sm flex flex-col gap-1">
                    Old Password
                    <input type="password" name="old_password" id="password" class="input-primary">
                    @error('old_password')
                    <span class="text-right text-sm text-red mb-4">{{ $message }}</span>
                    @enderror
                </label>
                <label for="new_password" class="w-full text-white text-sm flex flex-col gap-1">
                    New Password
                    <input type="password" name="new_password" id="new_password" class="input-primary">
                    @error('new_password')
                    <span class="text-right text-sm text-red mb-4">{{ $message }}</span>
                    @enderror
                </label>
                <label for="new_password_confirmation" class="w-full text-white text-sm flex flex-col gap-1">
                    New Password Confirmation
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="input-primary">
                    @error('new_password_confirmation')
                    <span class="text-right text-sm text-red mb-4">{{ $message }}</span>
                    @enderror
                </label>
                <button type="submit" class="mt-2 button-primary rounded-md w-24">Change</button>
            </form>
        </section>

    </main>
    <!-- Main End -->
@endsection
