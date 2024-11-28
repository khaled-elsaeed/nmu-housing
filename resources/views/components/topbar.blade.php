<!-- Start Topbar -->
<div class="topbar">
    <!-- Start row -->
    <div class="row align-items-center">
        <!-- Start col -->
        <div class="col-md-12 align-self-center">
            <div class="togglebar">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <div class="menubar">
                            <a class="menu-hamburger" href="javascript:void();">
                                <img src="{{ asset('images/svg-icon/close.svg') }}" class="img-fluid menu-hamburger-close" alt="close">
                                <img src="{{ asset('images/svg-icon/collapse.svg') }}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="infobar">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <div class="notifybar">
                            <div class="dropdown">
                                <a class="dropdown-toggle infobar-icon" href="#" role="button" id="notoficationlink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('images/svg-icon/notifications.svg') }}" class="img-fluid" alt="notifications">
                                    <span class="live-icon"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notoficationlink">
                                    <div class="notification-dropdown-title">
                                        <h4>
                                            <i class="feather icon-bell"></i>
                                            Notifications
                                        </h4>
                                    </div>
                                    <ul class="list-unstyled">
                                        @if(auth()->user()->notifications->isEmpty())
                                            <li class="d-flex p-2 mt-1 dropdown-item">
                                                <div class="media-body">
                                                    <p>No new notifications</p>
                                                </div>
                                            </li>
                                        @else
                                            @foreach(auth()->user()->notifications as $notification)
                                                <li class="d-flex p-2 mt-1 dropdown-item">
                                                    <span class="action-icon badge badge-info">
                                                        <i class="feather icon-check-circle"></i>
                                                    </span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">{{ $notification->data['title'] }}</h5>
                                                        <p>{{ $notification->data['message'] }}</p>
                                                        <p><span class="timing">{{ \Carbon\Carbon::parse($notification->created_at)->setTimezone('Africa/Cairo')->diffForHumans() }}</span></p>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="profilebar">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ auth()->user()->profile_picture ? asset('storage/profile_pictures/' . auth()->user()->profile_picture) : asset('images/users/boy.svg') }}" class="img-fluid" alt="profile">
                                    <span class="feather icon-chevron-down live-icon"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                    <div class="dropdown-item">
                                        <div class="profilename">
                                        <h5>{{ auth()->user()->username_en }}</h5>

                                        </div>
                                    </div>
                                    <div class="userbox">
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex p-2 mt-1 dropdown-item">
                                                <a href="{{ route('admin.profile') }}" class="profile-icon"><img src="{{ asset('images/svg-icon/user.svg') }}" class="img-fluid" alt="user">My Profile</a>
                                            </li>
                                         
                                            <li class="d-flex p-2 mt-1 dropdown-item">
                                                <a href="javascript:void(0);" class="profile-icon" onclick="logout();">
                                                    <img src="{{ asset('images/svg-icon/logout.svg') }}" class="img-fluid" alt="logout">Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Topbar -->

<script>
function logout() {
    if (confirm("Are you sure you want to logout?")) {
        // Create a form dynamically
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = "{{ route('logout') }}"; // Set the logout route

        // Create a hidden input for CSRF token
        var csrfInput = document.createElement('input');
        csrfInput.type = 'hidden';
        csrfInput.name = '_token'; // CSRF token field name
        csrfInput.value = '{{ csrf_token() }}'; // CSRF token value

        // Append CSRF input to the form
        form.appendChild(csrfInput);

        // Append the form to the body and submit it
        document.body.appendChild(form);
        form.submit();

        // Prevent back navigation by manipulating history
        window.history.pushState(null, "", window.location.href);
    }
}

// Handle back navigation
window.onpopstate = function () {
    window.history.pushState(null, "", window.location.href);
    // Optionally, redirect to the login page or display a message
    // window.location.href = '{{ route('login') }}'; // Uncomment if you want to redirect
};


</script>
