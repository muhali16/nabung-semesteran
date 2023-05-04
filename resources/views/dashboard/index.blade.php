@extends("dashboard.layouts.main")
@section("dashboard-content")
    <!-- Jumbotron -->
    <div class="rounded-lg bg-neutral-100 p-6 text-neutral-700 shadow-lg dark:bg-neutral-600 dark:text-neutral-200 dark:shadow-black/30">
        <h2 class="mb-5 text-3xl font-semibold">Welcome back, {{auth()->user()->name}}.</h2>
        <p>Saldo tabungan:</p>
        <h1 class="text-4xl">@currency(auth()->user()->wallet->balance)</h1>
    </div>
    <!-- Jumbotron -->

    <h1 class="text-2xl text-white py-5">Data Transaksi</h1>
    <!-- Transaction Daily Search -->
    <form action="" method="get" class="w-1/2 flex gap-4 ">
        <div
            class="relative mb-3 xl:w-96"
            data-te-datepicker-init
            data-te-input-wrapper-init>
            <input
                type="text"
                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                placeholder="Pilih waktu transaksi"
                name="td"
                data-te-datepicker-toggle-ref
                data-te-datepicker-toggle-button-ref />
            <label
                for="floatingInput"
                class="h-fit pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
            >Pilih waktu transaksi</label
            >
        </div>
        <button
            type="submit"
            class="h-fit inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
            Cari
        </button>
    </form>
    <!-- End Transaction Daily Search -->
    <!-- Table -->
    <div class="flex flex-col overflow-x-auto lg:overflow-x-hidden text-white">
        <div class="sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-center text-lg font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">#</th>
                            <th scope="col" class="px-6 py-4">Kredit</th>
                            <th scope="col" class="px-6 py-4">Debit</th>
                            <th scope="col" class="px-6 py-4">Saldo</th>
                            <th scope="col" class="px-6 py-4">Tanggal</th>
                            <th scope="col" class="px-6 py-4">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions as $transaction)
                            <tr  class="text-left">
                                <th class="text-center">{{$loop->iteration}}</th>
                                <th>@currency($transaction->kredit)</th>
                                <th>@currency($transaction->debit)</th>
                                <th>@currency($transaction->saldo)</th>
                                <th  class="text-center">@date_formatter($transaction->created_at)</th>
                                <th  class="text-center">{{$transaction->status}}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
