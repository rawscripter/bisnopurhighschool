    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link
                     @if ($page != 'dashboard')
                        collapsed
                    @endif
                      "
                    href=" /home">
                    <i class="bi bi-people"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link
                @if ($page != 'student')
                        collapsed
                    @endif"
                    href="{{ route('students') }}">
                    <i class="bi bi-people"></i>
                    <span>Students</span>
                </a>
            </li>
        </ul>

    </aside>
