@include('partials.headcontent')

<body>

@include('partials.navbar')

<div class="container">
    @yield('content')
</div>

@include('partials.footercontent')
