<ul class="list-unstyled topnav-menu float-right mb-0">

    <li class="dropdown notification-list dropdown d-none d-lg-inline-block ml-2">
        <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <img src="assets/images/flags/us.jpg" alt="lang-image" height="12">
        </a>
        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <img src="assets/images/flags/germany.jpg" alt="lang-image" class="mr-1" height="12"> <span
                    class="align-middle">German</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <img src="assets/images/flags/italy.jpg" alt="lang-image" class="mr-1" height="12"> <span
                    class="align-middle">Italian</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <img src="assets/images/flags/spain.jpg" alt="lang-image" class="mr-1" height="12"> <span
                    class="align-middle">Spanish</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <img src="assets/images/flags/russia.jpg" alt="lang-image" class="mr-1" height="12"> <span
                    class="align-middle">Russian</span>
            </a>

        </div>
    </li>

    <li class="dropdown notification-list">
        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <i class="dripicons-bell noti-icon"></i>
            <span class="badge badge-pink rounded-circle noti-icon-badge">4</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

            <div class="dropdown-header noti-title">
                <h5 class="text-overflow m-0"><span class="float-right">
                    <span class="badge badge-danger float-right">5</span>
                    </span>Notification</h5>
            </div>

            <div class="slimscroll noti-scroll">

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-primary">
                        <i class="mdi mdi-settings-outline"></i>
                    </div>
                    <p class="notify-details">New settings
                        <small class="text-muted">There are new settings available</small>
                    </p>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-warning">
                        <i class="mdi mdi-bell-outline"></i>
                    </div>
                    <p class="notify-details">Updates
                        <small class="text-muted">There are 2 new updates available</small>
                    </p>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon">
                        <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                    <p class="notify-details">Karen Robinson</p>
                    <p class="text-muted mb-0 user-msg">
                        <small>Wow ! this admin looks good and awesome design</small>
                    </p>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-danger">
                        <i class="mdi mdi-account-plus"></i>
                    </div>
                    <p class="notify-details">New user
                        <small class="text-muted">You have 10 unread messages</small>
                    </p>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-info">
                        <i class="mdi mdi-comment-account-outline"></i>
                    </div>
                    <p class="notify-details">Caleb Flakelar commented on Admin
                        <small class="text-muted">4 days ago</small>
                    </p>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-secondary">
                        <i class="mdi mdi-heart"></i>
                    </div>
                    <p class="notify-details">Carlos Crouch liked
                        <b>Admin</b>
                        <small class="text-muted">13 days ago</small>
                    </p>
                </a>
            </div>

            <!-- All-->
            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                View all
                <i class="fi-arrow-right"></i>
            </a>

        </div>
    </li>

    <li class="dropdown notification-list">
        <a class="nav-link  nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="{{route('admin.logout')}}" role="button" aria-haspopup="false" aria-expanded="false">
            <span class="pro-user-name ml-1">
                Logout<i class="md"></i>
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
            <!-- item-->


            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-settings"></i>
                <span>Settings</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-lock"></i>
                <span>Lock Screen</span>
            </a>

            <div class="dropdown-divider"></div>

            <!-- item-->
            <a href="{{route('admin.logout')}}" class="dropdown-item notify-item">
                <i class="fa fa-sign-out"></i>
                <span>Logout</span>
            </a>

        </div>
    </li>




</ul>
