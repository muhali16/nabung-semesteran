@extends("dashboard.layouts.main")

@section("dashboard-content")
    @if(session("success-transaction"))
    <div
        class="mb-3 hidden w-full items-center rounded-lg bg-green-100 py-5 px-6 text-base text-green-800 data-[te-alert-show]:inline-flex"
        role="alert"
        data-te-alert-init
        data-te-alert-show>
        <strong class="mr-2">Berhasil! </strong> {{session("success-transaction")}}
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
    @if(session("failed-transaction"))
        <div
            class="mb-3 hidden w-full items-center rounded-lg bg-red-100 py-5 px-6 text-base text-red-800 data-[te-alert-show]:inline-flex"
            role="alert"
            data-te-alert-init
            data-te-alert-show>
            <strong class="mr-2">Gagal! </strong> {{session("failed-transaction")}}
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
    <section class="flex flex-wrap w-full">
        <div class="lg:w-1/3">
           <h1 class="text-white font-bold text-3xl">Buat Transaksi</h1>
           <form action="{{route("transaction.store")}}" method="post" class="p-10 rounded mt-5 max-w-md bg-[#404040]" onsubmit="return confirm('Klik oke untuk melanjutkan atau cancel untuk edit kembali data')">
               @csrf
               <input type="text" name="status" id="status" value="berhasil" hidden>
               <label class="text-white mb-2" for="user_id">User</label>
               <div class="flex justify-center mb-2" name="user_id" id="user_id">
                   <div class="mb-3 xl:w-96">
                       <select data-te-select-init class="text-white" name="user_id" id="user_id" >
                           <option selected>Pilih User</option>
                           @foreach($users as $user)
                               <option value="{{$user->id}}">{{$user->name}}</option>
                           @endforeach
                       </select>
                       @error('user_id')
                       <span class="text-right text-sm text-red-600 mb-4">{{ $message }}</span>
                       @enderror
                   </div>
               </div>
               <label class="text-white mb-2" for="kredit">Kredit</label>
               <div class="flex justify-center mt-2">
                   <div class="relative mb-3 xl:w-96" data-te-input-wrapper-init>
                       <input
                           type="number"
                           class="peer block text-white min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                           id="kredit"
                           name="kredit"
                           placeholder="Kredit" />
                       <label
                           for="kredit"
                           class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                       >Rp.
                       </label>
                   </div>
               </div>
               @error('kredit')
               <span class="text-left text-sm text-red-600 mb-4 block">{{ $message }}</span>
               @enderror
               <label class="text-white mb-2" for="debit">Debit</label>
               <div class="flex justify-center mt-2">
                   <div class="relative mb-3 xl:w-96" data-te-input-wrapper-init>
                       <input
                           type="number"
                           class="peer block min-h-[auto] text-white w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                           id="debit"
                           name="debit"
                           placeholder="Debit" />
                       <label
                           for="debit"
                           class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                       >Rp.
                       </label>
                   </div>
               </div>
               @error('debit')
               <span class="text-left text-sm text-red-600 mb-4 block">{{ $message }}</span>
               @enderror
               @error('status')
               <span class="text-left text-sm text-red-600 mb-4">{{ $message }}</span>
               @enderror
               <div class="flex justify-center space-x-2">
                   <button
                       type="submit"
                       onclick="return confirm('Apakah data sudah benar?')"
                       class="inline-block rounded bg-transparent px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white border border-white">
                       Buat
                   </button>
               </div>
           </form>
        </div>
        <div class="lg:w-2/3 lg:pl-5 mt-5 lg:mt-0 overflow-x-auto">
            <h1 class="text-white font-bold text-3xl">Transaksi Terbaru</h1>
            <!-- Table -->
            <div class="flex flex-col h-[22rem] overflow-x-auto lg:overflow-x-hidden text-white mt-5">
                <div class="sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-center text-lg font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-4">User</th>
                                    <th scope="col" class="px-6 py-4">Kredit</th>
                                    <th scope="col" class="px-6 py-4">Debit</th>
                                    <th scope="col" class="px-6 py-4">Saldo</th>
                                    <th scope="col" class="px-6 py-4">Tanggal</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr class="border-b dark:border-neutral-500 font-thin text-left">
                                        <th>{{$transaction->user->username}}</th>
                                        <th>@currency($transaction->kredit)</th>
                                        <th>@currency($transaction->debit)</th>
                                        <th>@currency($transaction->saldo)</th>
                                        <th>@date_formatter($transaction->created_at)</th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <h1 class="text-white font-bold text-3xl">Data Saldo User</h1>
        <!-- Table -->
        <div class="flex flex-col overflow-x-auto lg:overflow-x-hidden text-white mt-5">
            <div class="sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-center text-lg font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">No</th>
                                <th scope="col" class="px-6 py-4">User</th>
                                <th scope="col" class="px-6 py-4">Saldo</th>
                                <th scope="col" class="px-6 py-4">Transaksi Terakhir</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr class="text-left">
                                    <th class="text-center">{{$loop->iteration}}</th>
                                    <th>{{$user->name}}</th>
                                    <th>@currency($user->wallet->balance)</th>
                                    <th class="text-center">@date_formatter($user->wallet->updated_at)</th>
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
