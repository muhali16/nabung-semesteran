@extends('layouts.main')

@section('container')
    @include('layouts.header')
    @include('layouts.nav')
    @guest()
        <!-- Main -->
        <main class="p-4 md:px-72">
            <section class="p-5 bg-darksilver rounded-md text-white my-2">
                <h1 class="text-3xl font-semibold"><a href="{{route("login")}}">Login First!</a></h1>
            </section>
            <section class="p-5">
                <h3 class="text-lg text-white">Data Transaksi</h3>
                <form action="" method="get" class="w-full mt-4 flex justify-end">
                    <input type="date" class="w-56 px-3 py-1 bg-darksilver text-white rounded-l-md focus:outline-none focus:ring-inset focus:ring-2 focus:ring-primary" id="transaction-date" placeholder="Tanggal Transaksi" name="td" required>
                    <button type="submit" class="button-primary rounded-r-md">Cari</button>
                </form>
                <div class="w-full overflow-auto mt-3">
                    <table class="w-full table table-auto mt-3">
                        <thead class="border text-white text-center">
                        <td class="w-10 p-2 border">No</td>
                        <td class="p-2 border">Kredit</td>
                        <td class="p-2 border">Debit</td>
                        <td class="p-2 hidden md:block">Saldo</td>
                        <td class="p-2 border">Tanggal</td>
                        <td class="p-2 hidden md:block">Status</td>
                        </thead>
                        <tbody class="text-white border">
                            <tr class="hover:bg-white/20">
                                <td class="text-center p-2 border font-semibold" colspan="6">No data found!</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
        <!-- Main End -->
    @endguest
    @auth()
        <!-- Main -->
        <main class="p-4 md:px-72">
            <section class="p-5 bg-darksilver rounded-md text-white my-2">
                <h1 class="text-3xl font-semibold">Welcome back, {{auth()->user()->name}}.</h1>
                <h3 class="mt-3">Saldo tabungan:</h3>
                <h2 class="text-2xl">@currency(auth()->user()->wallet->balance)</h2>
            </section>
            <section class="p-5">
                <h3 class="text-lg text-white">Data Transaksi</h3>
                <form action="" method="get" class="w-full mt-4 flex justify-end">
                    <input type="date" class="w-56 px-3 py-1 bg-darksilver text-white rounded-l-md focus:outline-none focus:ring-inset focus:ring-2 focus:ring-primary" id="transaction-date" placeholder="Tanggal Transaksi" name="td" required>
                    <button type="submit" class="button-primary rounded-r-md">Cari</button>
                </form>
                <div class="w-full overflow-auto mt-3">
                    <table class="w-full table table-auto mt-3">
                        <thead class="border text-white text-center">
                        <td class="w-10 p-2 border">No</td>
                        <td class="p-2 border">Kredit</td>
                        <td class="p-2 border">Debit</td>
                        <td class="p-2 hidden md:block">Saldo</td>
                        <td class="p-2 border">Tanggal</td>
                        <td class="p-2 hidden md:block">Status</td>
                        </thead>
                        <tbody class="text-white border">
                        @foreach($transactions as $transaction)
                            <tr class="hover:bg-white/20">
                                <td class="text-center p-2 border">{{$loop->iteration}}</td>
                                <td class="p-2 border">@currency($transaction->kredit)</td>
                                <td class="p-2 border">@currency($transaction->debit)</td>
                                <td class="p-2 hidden border md:block">@currency($transaction->saldo)</td>
                                <td class="text-center p-2 border">@date_formatter($transaction->created_at)</td>
                                <td class="text-center p-2 border hidden md:block">{{$transaction->status}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
        <!-- Main End -->
    @endauth

@endsection
