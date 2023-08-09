@extends("layouts.main")

@section("container")
    @include("layouts.header")
    @include("layouts.nav")
    <!-- Main -->
    <main class="relative p-4 md:px-72">
        <h1 class="text-2xl font-semibold text-white border-b pb-1 mb-5">Edit Destination {{$destination->name}}</h1>
        @if($errors->any())
            @foreach($errors->all() as $message)
                <div class="px-4 py-2 my-3 bg-lightred text-red rounded-md">
                    <p><strong>Failed |</strong> {{$message}}!</p>
                </div>
            @endforeach
        @endif
        <form action="{{route("destination.update")}}" method="post" class="w-full flex flex-col gap-3 items-end mt-3 p-5">
            @csrf
            @method("patch")
            <input type="text" name="id" value="{{$destination->id}}" hidden required>
            <label for="destination_name" class="w-full flex flex-col gap-1 text-sm text-white">
                Destination Name
                <input type="text" name="name" id="destination_name"  class="input-primary" value="{{$destination->name}}">
            </label>
            <label for="date" class="w-full flex flex-col gap-1 text-sm text-white">
                Date
                <input type="date" name="tanggal_kunjungan" id="date" class="input-primary" value="{{$destination->tanggal_kunjungan}}">
            </label>
            <label for="start" class="w-full flex flex-col gap-1 text-sm text-white">
                Start Time
                <input type="time" name="start" id="start"  class="input-primary" value="{{$destination->start}}">
            </label>
            <label for="end" class="w-full flex flex-col gap-1 text-sm text-white">
                End Time
                <input type="time" name="end" id="end"  class="input-primary" value="{{$destination->end}}">
            </label>
            <label for="link" class="w-full flex flex-col gap-1 text-sm text-white">
                Maps Link
                <textarea type="text" name="maps" id="link"  class="input-primary">{{$destination->maps}}</textarea>
            </label>
            <button type="submit" class="button-primary w-32 rounded-md">Edit</button>
        </form>
    </main>
    <!-- Main End -->
@endsection
