@include('layouts.header')
@include('layouts.navbar')

<div class="container-fluid">
    <div class="wrapper">
        @include('layouts.sidebar')

        <div class="content-page">

            @yield('main-section')
            @include('layouts.bottom-bar')

        </div>
    </div>
</div>

@include('layouts.right-sidebar')
@include('layouts.footer')
