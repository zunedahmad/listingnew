<!-- Start Header Area -->
<div class="header-area header-style-two">
    <div class="container-fluid">
        <div class="header-content-wrapper">
            <div class="header-content d-flex justify-content-between align-items-center">
                <div class="header-left-content d-flex">
                    <div class="responsive-burger-menu d-block d-lg-none">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </div>

                    <div class="main-logo">
                        <a href="javascript:void(0);">
                            <img src="{{asset('admin/assets/images/main-logo.svg')}}" alt="main-logo">
                        </a>
                    </div>

                    <form class="search-bar d-flex">
                        <img src="{{asset('admin/assets/images/icon/search-normal.svg')}}" alt="search-normal">

                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>

                    <div class="option-item for-mobile-devices d-block d-lg-none">
                        <i class="search-btn ri-search-line"></i>
                        <i class="close-btn ri-close-line"></i>

                        <div class="search-overlay search-popup">
                            <div class="search-box">
                                <form class="search-form">
                                    <input class="search-input" name="search" placeholder="Search" type="text">

                                    <button class="search-button" type="submit">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-right-content d-flex align-items-center">
                    <div class="header-right-option">
                        <a href="javascript:void(0);" class="dropdown-item fullscreen-btn" id="fullscreen-button">
                            <img src="{{asset('admin/assets/images/icon/maximize.svg')}}" alt="maximize">
                        </a>
                    </div>
                    <div class="header-right-option dropdown profile-nav-item pt-0 pb-0">
                        <a class="dropdown-item dropdown-toggle avatar d-flex align-items-center" href="javascript:void(0);" id="navbarDropdown-4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('admin/assets/images/avatar.png')}}" alt="avatar">
                            <div class="d-none d-lg-block d-md-block">
                                <h3>John Smilga</h3>
                                <span>Super Admin</span>
                            </div>
                        </a>

                        <div class="dropdown-menu">
                            <div class="dropdown-header d-flex flex-column align-items-center">
                                <div class="figure mb-3">
                                    <img src="{{asset('admin/assets/images/avatar.png')}}" class="rounded-circle" alt="avatar">
                                </div>

                                <div class="info text-center">
                                    <span class="name mb-3">John Smilga</span>
                                </div>
                            </div>

                            <div class="dropdown-wrap">
                                <ul class="profile-nav p-0 pt-3">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="ri-user-line"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="ri-mail-send-line"></i>
                                            <span>My Inbox</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="ri-edit-box-line"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="ri-settings-5-line"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-footer">
                                <ul class="profile-nav">
                                    <li class="nav-item">
                                        <a href="{{route('logout')}}" class="nav-link">
                                            <i class="ri-login-circle-line"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Header Area -->