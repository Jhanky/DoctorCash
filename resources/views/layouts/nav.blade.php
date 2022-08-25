<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
      <h2 ><a class="navbar-brand" href="{{ url('#') }}" style="color: #78bc18">
        Hola {{ Auth::user()->name }}!
    </a></h2>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->

                <li class="nav-item">
                    <!-- Button trigger modal -->
                    <a type="button" href="/preguntas/responder" class="nav-link">
                        <i class="fa-solid fa-square-plus" style="color: #78bc18; font-size: 25px"></i>
                    </a>

                </li>
                <li class="nav-item">
                    <a type="button" href="" class="nav-link"><i class="fa-solid fa-gear" style="color: #78bc18 ; font-size: 25px"></i></a>
                </li>
                <li class="nav-item dropdown">

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: #78bc18 ">
                        <i class="fa-solid fa-user-astronaut" style="color: #78bc18 ; font-size: 25px" ></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item text-center" href="/perfil">{{ __('Mi perfil') }}</a>

                        <a class="dropdown-item text-center" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>




                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
