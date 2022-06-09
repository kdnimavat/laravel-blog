<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">KD's Blog</a>
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
                </ul>

                @auth
                    <a href="{{ url('profile/' . Auth::user()->id) }}" class="nav-link btn text-white">Profile</a>
                    <a class="nav-link float-right btn-secondary text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span
                            class="glyphicon glyphicon-log-in"></span>Logout</a>
                    <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">
                        @csrf
                    </form>
                @endauth

                @guest
                    <a class="nav-link float-right btn-secondary text-white" href="{{ route('login') }}"><span
                            class="glyphicon glyphicon-log-in"></span>Login</a>
                @endguest
            </div>
        </div>
    </nav>
</div>
