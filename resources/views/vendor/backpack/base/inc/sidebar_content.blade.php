{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<!--li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></!--li-->

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Пользователи</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Пользователи</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Роли</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Разрешения</span></a></li>
    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-broadcast-tower"></i>Скважины</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('borehole') }}"><i class="nav-icon la la-broadcast-tower"></i> Скважины</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('type-boreholes') }}"><i class="nav-icon la la-filter"></i> Тип скважин</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('equipment') }}"><i class="nav-icon la la-filter"></i> Тип техники</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('construction-borehole-pipes') }}"><i class="nav-icon la la-filter"></i> Конструкция труб скважины</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('material') }}"><i class="nav-icon la la-filter"></i> Материал</a></li>
    </ul>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Logs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('backup') }}'><i class='nav-icon la la-hdd-o'></i> Backups</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-cog'></i> <span>Settings</span></a></li>


