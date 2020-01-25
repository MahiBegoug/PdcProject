


<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu" data-keep-expanded="false"  data-auto-scroll="true"  data-slide-speed="200">

            <li class="">
                <a href="">
                    <i class="fa fa-gears"></i>
                    <span class="title">quickadmin.test.new</span>
                </a>
            </li>

            <li class="">
                <a href="">
                    <i class="fa fa-gears"></i>
                    <span class="title">results Title</span>
                </a>
            </li>


            <li class="">
                <a href="{{ url('/notions') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title"> Topics Title</span>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="fa fa-gears"></i>
                    <span class="title">Question title</span>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="fa fa-gears"></i>
                    <span class="title">Questions options </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">user-management title</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="">
                        <a href="">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                roles title
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="fa fa-user"></i>
                            <span class="title">
                               users title
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                user actions
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title"> {{ __('Logout') }}</span>
                </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
            </li>
        </ul>


    </div>
</div>
