<!-- Start Sidebar Area -->
<nav class="side-menu-area">
    <nav class="sidebar-nav" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <ul id="sidebar-menu" class="sidebar-menu metismenu">
                                <li class="active">
                                    <a href="{{route('index')}}" class="box-style d-flex align-items-center">
                                        <div class="icon">
                                            <img src="{{asset('admin/assets/images/icon/element.svg')}}" alt="element">
                                        </div>
                                        <span class="menu-title">Dashboards</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="has-arrow box-style d-flex align-items-center">
                                        <div class="icon">
                                            <img src="{{asset('admin/assets/images/icon/document-copy.svg')}}" alt="document-copy">
                                        </div>
                                        <span class="menu-title">Category</span>
                                    </a>

                                    <ul class="sidemenu-nav-second-level mm-collapse">
                                        <li>
                                            <a href="{{route('category.index')}}">
                                                <span class="menu-title">Add Category</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('category.list')}}">
                                                <span class="menu-title">Category List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="has-arrow box-style d-flex align-items-center">
                                        <div class="icon">
                                            <img src="{{asset('admin/assets/images/icon/layer.svg')}}" alt="layer">
                                        </div>
                                        <span class="menu-title">Listing</span>
                                    </a>

                                    <ul class="sidemenu-nav-second-level mm-collapse">
                                        <li>
                                            <a href="{{route('listing.index')}}">
                                                <span class="meni-title">Add Listing</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('listing.list')}}">
                                                <span class="meni-title">Listing List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 440px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
        </div>
    </nav>
</nav>
<!-- Start Sidebar Area -->