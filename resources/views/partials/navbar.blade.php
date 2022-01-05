


    <div id="navbarSupportedContent">
        <ul>
            <li>
                <a class="nav-link" href="/games">Visi aukcionai</a>
            </li>
            @if( auth()->check() )
                <li >
                    <a class="nav-link font-weight-bold" href="#">Sveiki {{ auth()->user()->name }}</a>
                </li>
                <li>
                    <a class="nav-link" href="/games/create">Įkelti aukcioną</a>
                </li>
                <li >
                    <a class="nav-link" href="/mylist">Mano aukcionai</a>
                </li>

                @if(  auth()->user()->name === 'ADMIN' )
                    <li >
                        <a class="nav-link" href="/approval">Aukcionų patvirtinimas</a>
                    </li>
                @endif
                <li >
                    <a class="nav-link" href="/logout">Atsijungti</a>
                </li>

            @else
                <li>
                    <a class="nav-link" href="/login">Prisijungti</a>
                </li>
                <li>
                    <a class="nav-link" href="/register">Registracija</a>
                </li>
            @endif

        </ul>
    </div>
</nav>
