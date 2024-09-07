<!DOCTYPE html>
<html lang="en">

@include('components.header')

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            @include('components.navbar')

            @include('components.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>

    @include('components.script')
</body>

</html>
