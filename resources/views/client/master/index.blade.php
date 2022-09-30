<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.includes.head')
</head>

<body >
    
    {{-- class="animsition"  --}}
    <!-- Header -->
    @include('client.includes.header')

    <!-- Cart -->
    @include('client.includes.cart')

    {{-- content --}}
    @yield('content')

    <!-- Footer -->
    @include('client.includes.footer')
    @include('client.includes.js')



</body>

</html>
