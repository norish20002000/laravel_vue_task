<header>
    <div class="header">
        <div class="top-left">
            <a href="/">
                <img src="img/titlelogo.png">
            </a>
        </div>
        @if (Route::has('login'))
            <div class="top-right links">
                <a href=" {{ route('todo') }} ">sample view1</a>
                @auth
                    <a href="/">Home</a>
                    <!-- <a href="{{ url('/home') }}">Home</a> -->
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</header>
