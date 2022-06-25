<div class="navbar navbar-dark bg-info" style="">
    @if (Route::has('login'))
        <div class="nav-item" style="margin:auto;">
            @auth
                <a href="{{ url('/') }}" class="navbar-brand">Home</a>
                 
                <form action="login" method="post" class="navbar-brand " >
                    @method('put')
                    @csrf
                    <button class="btn btn-danger">Logout</button>
                </form>

            @else
                <a href="{{ route('login') }}" class="navbar-brand">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="navbar-brand ">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>