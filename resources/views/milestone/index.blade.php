@extends('layouts.main')

@section('container')
    @include('layouts.header')
    @include('layouts.nav')
    @guest()
        <!-- Main -->
        <main class="p-4 md:px-72">
            <section class="p-5 flex flex-col gap-2 bg-silver mb-7 rounded-md">
                <h4 class="text-lg text-white mb-2">Personal Milestone</h4>
                <h4 class="text-lg text-white mt-4"><a href="{{route("login")}}">Login first!</a></h4>
            </section>
            <h2 class="text-white text-2xl font-semibold pl-5 border-b border-white pb-2 my-3">Milestone</h2>
            <section class="p-5 flex flex-col gap-2">
                <div>
                    <h4 class="text-lg text-white">Accumulated Balance</h4>
                    <h2 class="text-2xl text-white">@currency($totalBalance)</h2>
                </div>
                <div>
                    <h4 class="text-lg text-white">Accumulated Balance Goals</h4>
                    <h2 class="text-2xl text-white">@currency($targetBalance)</h2>
                </div>
                <div>
                    <p class="text-white text-lg mb-2">Progress</p>
                    <div class="w-full bg-darksilver rounded-md">
                        <div class="bg-primary rounded-md px-4 text-sm text-right text-white" style="width: {{$percentageTotalBalance}}%;">{{$percentageTotalBalance}}%</div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Main End -->
    @endguest
    @auth()
        <!-- Main -->
        <main class="p-4 md:px-72">
            <section class="p-5 flex flex-col gap-2 bg-silver mb-7 rounded-md">
                <h4 class="text-lg text-white mb-2">Personal Milestone</h4>
                <div>
                    <p class="text-white text-sm">Balance</p>
                    <h3 class="text-lg text-white">@currency($userBalance)</h3>
                </div>
                <div>
                    <p class="text-white text-sm">Balance Goals</p>
                    <h3 class="text-lg text-white">@currency($targetUserBalance)</h3>
                </div>
                <div>
                    <p class="text-white text-sm mb-2">Progress</p>
                    <div class="w-full bg-darksilver rounded-md">
                        <div class="bg-primary rounded-md px-4 text-sm text-right text-white" style="width: {{$percentageUserBalance}}%;">{{$percentageUserBalance}}%</div>
                    </div>
                </div>
            </section>
            <h2 class="text-white text-2xl font-semibold pl-5 border-b border-white pb-2 my-3">Milestone</h2>
            <section class="p-5 flex flex-col gap-2">
                <div>
                    <h4 class="text-lg text-white">Accumulated Balance</h4>
                    <h2 class="text-2xl text-white">@currency($totalBalance)</h2>
                </div>
                <div>
                    <h4 class="text-lg text-white">Accumulated Balance Goals</h4>
                    <h2 class="text-2xl text-white">@currency($targetBalance)</h2>
                </div>
                <div>
                    <p class="text-white text-lg mb-2">Progress</p>
                    <div class="w-full bg-darksilver rounded-md">
                        <div class="bg-primary rounded-md px-4 text-sm text-right text-white" style="width: {{$percentageTotalBalance}}%;">{{$percentageTotalBalance}}%</div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Main End -->
    @endauth

@endsection
