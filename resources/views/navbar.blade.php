    <style>
        :root {
            --primary-color: #BC8AB4;
            --primary-hover: #BC8AB4;
            --text-light: #f8f9fa;
            --gray-light: #6c757d;
        }

        .navbar {
            padding-left: 50px;
            padding-right: 50px;
            background-color: #EADAE7;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #333 !important;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-family: "Bruno Ace", sans-serif;
            /* font-weight: 400; */
            font-style: normal;
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
            position: relative;
            padding: 0.5rem 1rem !important;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .dropdown-toggle::after {
            margin-left: 0.25rem;
            vertical-align: middle;
        }

        .dropdown-menu {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border: none;
            margin-top: 0.2rem;
        }

        .dropdown-item {
            padding: 0.75rem 1.25rem;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        .dropdown-item:hover {
            background-color: var(--primary-color);
            color: white !important;
            border-radius: 6px;
        }

        .form-control {
            border-radius: 20px;
            border: 1px solid #ced4da;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
        }

        .btn-outline-success {
            border-color: var(--primary-color);
            color: var(--primary-color);
            border-radius: 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-outline-success:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-1px);
        }

        .btn-logout {
            background-color: var(--primary-color);
            color: white;
            border-radius: 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-logout:hover {
            background-color: var(--primary-hover);
            transform: translateY(-1px);
        }

        .user-icon {
            margin-right: 0.5rem;
        }

        ul {
            font-size: 15px;
            color: #333 !important;
            letter-spacing: 1px;
            font-family: "Bruno Ace", sans-serif;
            font-style: normal;
            /* padding-bottom: 15px; */
       
        }
    </style>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('hello') }}">RMRNAI1S</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" aria-current="page" data-bs-toggle="dropdown" href="{{ url('appointments') }}">Записи</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('appointments') }}">Все записи</a></li>
                            <li><a class="dropdown-item" href="{{ url('appointments/create') }}">Добавить запись</a></li>

                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('service') }}">Услуги</a></li>
                </ul>
                
                @if(!Auth::user())
                    <div class="d-flex">
                        <a class="btn btn-outline-success" href="{{ route('login', ['redirect' => url()->current()]) }}">Войти</a>
                    </div>
                    @else
                    <ul class="navbar-nav d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active d-flex align-items-center" href="#">
                                <i class="fa fa-user user-icon"></i>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-logout ms-2" href="{{ url('logout') }}">Выйти</a>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>
</header>