<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shayna Admin</title>
    <meta name="description" content="ShaynaAdmin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Styles --}}
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    {{-- Sidebar --}}
    @include('includes.sidebar')

    <div id="right-panel" class="right-panel">

        {{-- Navbar --}}
        @include('includes.navbar')

        <div class="content">
            {{-- Content --}}
            @yield('content')
        </div>

        <div class="clearfix"></div>
    </div>

    {{-- Script --}}
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

</body>

</html>