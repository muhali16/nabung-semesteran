@extends("layouts.main")

@section("container")
<header class="bg-[#262626]">
    @include("dashboard.layouts.sidenav")
    @include("dashboard.layouts.nav")
</header>

<main style="margin-top: 58px" class="p-10 lg:pl-72">
    @yield("dashboard-content")
</main>
@endsection
