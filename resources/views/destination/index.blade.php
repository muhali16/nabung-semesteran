@extends("layouts.main")

@section("container")
    @include("layouts.header")
    @include("layouts.nav")

    <!-- Main -->
    <main class="relative p-4 md:px-72">
        <h1 class="text-2xl font-semibold text-white border-b pb-1 mb-5">Destination</h1>
        @if(session("success-deletedestination"))
            <div class="px-4 py-2 my-3 bg-lightgreen text-green rounded-md">
                <p><strong>Success |</strong> {{session("success-deletedestination")}}</p>
            </div>
        @endif
        @if(session("failed-deletedestination"))
            <div class="px-4 py-2 my-3 bg-lightred text-red rounded-md">
                <p><strong>Failed |</strong> {{session("failed-deletedestination")}}</p>
            </div>
        @endif
        @if(session("success-editdestination"))
            <div class="px-4 py-2 my-3 bg-lightgreen text-green rounded-md">
                <p><strong>Success |</strong> {{session("success-editdestination")}}</p>
            </div>
        @endif
        @if(session("failed-editdestination"))
            <div class="px-4 py-2 my-3 bg-lightred text-red rounded-md">
                <p><strong>Failed |</strong> {{session("failed-editdestination")}}</p>
            </div>
        @endif
        @if(session("success-destination"))
            <div class="px-4 py-2 my-3 bg-lightgreen text-green rounded-md">
                <p><strong>Success |</strong> {{session("success-destination")}}</p>
            </div>
        @endif
        @if(session("failed-destination"))
            <div class="px-4 py-2 my-3 bg-lightred text-red rounded-md">
                <p><strong>Failed |</strong> {{session("failed-destination")}}</p>
            </div>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $message)
                <div class="px-4 py-2 my-3 bg-lightred text-red rounded-md">
                    <p><strong>Failed |</strong> {{$message}}!</p>
                </div>
            @endforeach
        @endif
        @auth()
        <button type="button" id="add_destination" class="button-primary rounded-md">Add Destination</button>
        @endauth
        <div class="overflow-auto mt-4">
            <table class="table table-auto w-full text-white">
                <thead class="text-center">
                <td class="border w-10 p-2">No</td>
                <td class="border p-2">Destination Name</td>
                <td class="border p-2">Maps Link</td>
                </thead>
                <tbody>
                @forelse($destinations as $destination)
                    <tr class="hover:bg-white/20">
                        <td class="border p-2 text-center">{{$loop->iteration}}</td>
                        <td class="border p-2">
                            <details>
                                <summary class="font-semibold">{{$destination->name}}</summary>
                                <p class="mt-2 text-lightgreen">@date_formatter($destination->tanggal_kunjungan) @time_formatter($destination->start) -  @time_formatter($destination->end)</p>
                                <div class="flex flex-row gap-2 mt-2">
                                    <form action="{{route("destination.delete")}}" method="post">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="bg-red/70 px-2 py-1 rounded-md border-2 border-red hover:bg-red/40" name="id" value="{{$destination->id}}">Delete</button>
                                    </form>
                                    <button type="button" class="button-primary rounded-md" onclick="document.location.href = '{{route("destination.show", ["id" => $destination->id])}}'">Edit</button>
                                </div>
                            </details>
                        </td>
                        <td class="border p-2"><a href="{{$destination->maps}}" class="after:content-['_↗'] visited:text-primary/70">Google Maps</a></td>
                    </tr>
                @empty
                    <tr class="hover:bg-white/20">
                        <td class="text-white font-semibold text-center border" colspan="3">No destinations found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
{{--            <table class="table table-auto w-full text-white">--}}
{{--                <thead class="text-center">--}}
{{--                <td class="border w-10 p-2">No</td>--}}
{{--                <td class="border p-2">Destination Name</td>--}}
{{--                <td class="border p-2">Date</td>--}}
{{--                <td class="border p-2">Time</td>--}}
{{--                <td class="border p-2">Maps Link</td>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @forelse($destinations as $destination)--}}
{{--                    <tr class="hover:bg-white/20">--}}
{{--                        <td class="border p-2 text-center">{{$loop->iteration}}</td>--}}
{{--                        <td class="border p-2">{{$destination->name}}</td>--}}
{{--                        <td class="border p-2">@date_formatter($destination->tanggal_kunjungan)</td>--}}
{{--                        <td class="border p-2">@time_formatter($destination->start) - @time_formatter($destination->end)</td>--}}
{{--                        <td class="border p-2"><a href="{{$destination->maps}}" target="_blank" class="after:content-['_↗'] visited:text-primary/70">Google Maps</a></td>--}}
{{--                    </tr>--}}
{{--                    @empty--}}
{{--                    <tr class="hover:bg-white/20">--}}
{{--                        <td class="text-white font-semibold text-center border">No destinations found.</td>--}}
{{--                    </tr>--}}
{{--                @endforelse--}}

{{--                </tbody>--}}
{{--            </table>--}}
        </div>

        <!-- Add Destination Modal -->
        <section id="add_destination_modal" class="absolute top-0 w-full h-screen bg-silver px-7 py-10 m-5 -translate-x-10 md:w-1/2 hidden">
            <div class="flex flex-row justify-between items-center">
                <h1 class="text-white text-lg ">Add destination to list</h1>
                <button id="close_button_modal" type="button" class="py-1 px-3 bg-red text-white rounded-md border border-red hover:bg-red/40">❌</button>
            </div>
            <form action="{{route("destination.store")}}" method="post" class="w-full flex flex-col gap-3 items-end mt-3 p-5">
                @csrf
                @method("post")
                <label for="destination_name" class="w-full flex flex-col gap-1 text-sm text-white">
                    Destination Name
                    <input type="text" name="name" id="destination_name"  class="input-primary" value="{{old("name")}}">
                </label>
                <label for="date" class="w-full flex flex-col gap-1 text-sm text-white">
                    Date
                    <input type="date" name="tanggal_kunjungan" id="date" class="input-primary" value="{{old("tanggal_kunjungan")}}">
                </label>
                <label for="start" class="w-full flex flex-col gap-1 text-sm text-white">
                    Start Time
                    <input type="time" name="start" id="start"  class="input-primary" value="{{old("start")}}">
                </label>
                <label for="end" class="w-full flex flex-col gap-1 text-sm text-white">
                    End Time
                    <input type="time" name="end" id="end"  class="input-primary" value="{{old("end")}}">
                </label>
                <label for="link" class="w-full flex flex-col gap-1 text-sm text-white">
                    Maps Link
                    <textarea type="text" name="maps" id="link"  class="input-primary" value="{{old("maps")}}"></textarea>
                </label>
                <button type="submit" class="button-primary w-32 rounded-md">Add</button>
            </form>
        </section>
        <!-- Add Destination Modal End -->
    </main>
    <!-- Main End -->

    <script type="text/javascript">
        const btn = document.getElementById('add_destination')
        const modal = document.getElementById('add_destination_modal')
        const closeBtn = document.getElementById('close_button_modal')

        btn.addEventListener('click', function () {
            modal.classList.remove('hidden')
        })
        closeBtn.addEventListener('click', function(){
            modal.classList.add('hidden')
        })
    </script>
@endsection
