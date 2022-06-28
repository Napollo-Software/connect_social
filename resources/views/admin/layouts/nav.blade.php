<div class="sidebar-wrapper" data-simplebar="true">

            <div class="sidebar-header">
                <div>
                    <img src="{{url('img/coin.png')}}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h5 class="text-primary logo-text mt-2" style="font-size: 20px  "> Connect Social</h5>
                </div>
                <div class="toggle-icon ms-auto mt-2"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li class="menu-label">Menus</li>
                <li>
                    <a href="{{route('home')}}">
                        <div class="parent-icon"><i class='bx bx-cookie'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                @can('super-admin-views')
                    <li>
                    <a href="{{route('invite')}}">
                        <div class="parent-icon"><i class='bx bx-send'></i></div>
                        <div class="menu-title">Invite</div>
                    </a>
                </li>

                <li>
                    <a href="{{route('users')}}">
                        <div class="parent-icon"><i class='bx bx-user'></i></div>
                        <div class="menu-title">Users</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('roles')}}">
                        <div class="parent-icon"><i class='bx bxs-user-account'></i></div>
                        <div class="menu-title">Roles</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('permission')}}">
                        <div class="parent-icon"><i class='bx bxs-user-account'></i></div>
                        <div class="menu-title">Permissions</div>
                    </a>
                </li>
                @endcan

{{--                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-category"></i>
                        </div>
                        <div class="menu-title">Application</div>
                    </a>
                    <ul>
                        <li> <a href="{{ url('app-emailbox') }}"><i class="bx bx-right-arrow-alt"></i>Email</a>
                        </li>
                        <li> <a href="{{ url('app-chat-box') }}"><i class="bx bx-right-arrow-alt"></i>Chat Box</a>
                        </li>
                        <li> <a href="{{ url('app-file-manager') }}"><i class="bx bx-right-arrow-alt"></i>File Manager</a>
                        </li>
                        <li> <a href="{{ url('app-contact-list') }}"><i class="bx bx-right-arrow-alt"></i>Contatcs</a>
                        </li>
                        <li> <a href="{{ url('app-to-do') }}"><i class="bx bx-right-arrow-alt"></i>Todo List</a>
                        </li>
                        <li> <a href="{{ url('app-invoice') }}"><i class="bx bx-right-arrow-alt"></i>Invoice</a>
                        </li>
                        <li> <a href="{{ url('app-fullcalender') }}"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
                        </li>
                    </ul>
                </li>--}}
            </ul>
            <!--end navigation-->
        </div>