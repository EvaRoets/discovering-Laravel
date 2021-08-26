<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="images/home.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Home
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar navbar-light">
                    <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Welcome</a>
                    <a class="nav-link" href="{{ route('form') }}">Form</a>
                </div>
            </div>
        </div>
    </nav>
</header>


