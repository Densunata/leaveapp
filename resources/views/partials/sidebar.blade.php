



  <div class="collapse d-lg-block sidebar" id="sidebarMenu">
    <a href="{{ route('dashboard.index') }}"
       class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
        Overview
    </a>

    <a href="{{ route('attendance.index') }}"
       class="{{ request()->routeIs('attendance.index') ? 'active' : '' }}">
        Attendance
    </a>

    <a href="{{ route('paldo.index') }}"
       class="{{ request()->routeIs('paldo.index') ? 'active' : '' }}">
        Paldo
    </a>

    <a href="{{ route('leave.index') }}"
       class="{{ request()->routeIs('leave.index') ? 'active' : '' }}">
        Leave
    </a>
</div>
