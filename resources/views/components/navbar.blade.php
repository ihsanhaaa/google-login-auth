@auth
        <div class="d-flex user-logged nav-item dropdown no-arrow">
            <a
            href="#"
            role="button"
            id="dropdownMenuLink"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            >
            Halo, {{Auth::user()->name}}! @if (Auth::user()->avatar)
            <img
                src="{{Auth::user()->avatar}}"
                class="user-photo"
                alt=""
                style="border-radius: 50%"
            />
            @else
            <img
                src="https://ui-avatars.com/api/?name={{Auth::user()->name}}"
                class="user-photo"
                alt=""
                style="border-radius: 50%"
            />
            @endif
            <ul
                class="dropdown-menu"
                aria-labelledby="dropdownMenuLink"
                style="right: 0; left: auto"
            >
                <li>
                <a href="{{route('dashboard')}}" class="dropdown-item"
                    >My Dashboard</a
                >
                </li>
                <li>
                <a
                    href="{{ route('logout') }}"
                    class="dropdown-item"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                    >Sign Out</a
                >
                <form
                    id="logout-form"
                    action="{{ route('logout') }}"
                    method="post"
                    style="display: none"
                >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </form>
                </li>
            </ul>
            </a>
        </div>
        @else
        <div class="d-flex">
            <a href="{{route('login')}}" class="btn btn-master btn-secondary me-3"
            ><i class="fas fa-user"></i>
            &nbsp;Masuk
            </a>
        </div>
        @endauth