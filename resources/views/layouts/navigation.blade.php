<ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('indexstudents') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-child') }}"></use>
            </svg>
            {{ __('Student') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('indexteachers') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-smile') }}"></use>
            </svg>
            {{ __('Teacher') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('indexcourses') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-book') }}"></use>
            </svg>
            {{ __('Courses') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('indexbatches') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-folder') }}"></use>
            </svg>
            {{ __('Batch') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('indexenrollments') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-school') }}"></use>
            </svg>
            {{ __('Enrollment') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('indexpayments') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-wallet') }}"></use>
            </svg>
            {{ __('Payment') }}
        </a>
    </li>

    <li class="nav-group" aria-expanded="false">
        <a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-settings') }}"></use>
            </svg>
            Settings
        </a>
        <ul class="nav-group-items" style="height: 0px;">
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.update') }}" target="_top">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('icons/coreui.svg#cil-contact') }}"></use>
                    </svg>
                    Edit User
                </a>
            </li>
        </ul>
    </li>
</ul>