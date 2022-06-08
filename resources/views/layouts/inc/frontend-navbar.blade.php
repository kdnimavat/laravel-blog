<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>

                    @php
                        $categories = App\Models\Catagory::where('navbar_status', '0')
                            ->where('status', '0')
                            ->get();
                    @endphp

                    @foreach ($categories as $cateitems)
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ url('tutorial/' . $cateitems->slug) }}">{{ $cateitems->name }}</a>
                        </li>
                    @endforeach

                    @if (Auth::check())
                        <li><a class="nav-link btn-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endif

                    @guest
                        <li><a class="lispan" href="{{ route('login') }}"><span
                                    class="glyphicon glyphicon-log-in"></span>Login</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
