<!doctype html>
<html lang="en">
    <head>
      @include('partials._head')
    </head>
    <body>
    @include('partials._nav')
        <div class="container">
            @include('partials._messages')
                @yield('content')
            <hr>
        </div>
    @include('partials._javascript')
    </body>
</html>
