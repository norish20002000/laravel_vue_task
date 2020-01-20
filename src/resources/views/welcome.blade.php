@extends('layouts.app')

@section('content')
        <div class="slider">
                <img src="img/01.jpg" width="500" height="500" alt="" style="position:absolute">
                <img src="img/02.jpg" width="500" height="500" alt="" style="position:absolute">
                <img src="img/03.jpg" width="500" height="500" alt="" style="position:absolute">
            </div>
        <img src='img/night-sky.jpg' style="position:absolute; width:100%">
            <p style="position:absolute; color:#7af8ee; font-size:50px;">demo string</p>
        </div>
</div>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div>
                    <p>{{ $name }}</p>
                </div>
                <div class="title m-b-md">
                <a href="{{ route('task') }}">sample view</a>
                </div>
                <div class="title m-b-md">
                <a href="{{ route('todo') }}">sample view1</a>
                </div>
                <div class="title m-b-md">
                <a href="{{ route('profile') }}">save picture</a>
                </div>

                <!-- <div class="links">
                    <a href="{{ route('task') }}">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
@endsection
    <!-- </body>
</html> -->
