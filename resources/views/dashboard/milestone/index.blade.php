@extends("dashboard.layouts.main")

@section("dashboard-content")
    <section class="border rounded-md p-5 flex flex-col gap-2">
        <h2 class="text-white font-bold text-xl">Personal Milestone</h2>
        <p class="text-white text-sm">Tabungan <br><span class="text-xl">@currency($userBalance)</span></p>
        <p class="text-green-300 text-sm">Target Tabungan <br><span class="text-xl">@currency($targetUserBalance)</span></p>
        <div>
            <p class="text-white text-sm mb-2">Progress</p>
            <div class="w-full rounded-md bg-neutral-200 dark:bg-neutral-600">
                <div
                    class="bg-success rounded-md p-0.5 text-center text-xs font-medium leading-none text-primary-100"
                    style="width: {{$percentageUserBalance}}%">
                    {{$percentageUserBalance}}%
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 flex flex-col gap-4">
        <h1 class="text-white font-bold text-3xl border-b pb-2">Milestone</h1>
        <p class="text-white text-lg">Akumulasi Tabungan <br><span class="text-3xl font-bold">@currency($totalBalance)</span></p>
        <p class="text-blue-300 text-lg">Target Akumulasi Tabungan <br><span class="text-3xl font-bold">@currency($targetBalance)</span></p>
        <p class="text-yellow-300 text-lg">Total User <br><span class="text-3xl font-bold">{{$totalValidUsers}}</span></p>
        <div>
            <p class="text-white text-lg mb-2">Total Progress</p>
            <div class="w-full rounded-md bg-neutral-200 dark:bg-neutral-600">
                <div
                    class="bg-primary rounded-md p-0.5 text-center text-xs font-medium leading-none text-primary-100"
                    style="width: {{$percentageTotalBalance}}%">
                    {{$percentageTotalBalance}}%
                </div>
            </div>
        </div>
    </section>
@endsection
