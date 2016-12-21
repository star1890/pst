<!-- BEGIN OF TOPBAR -->
<div class="topbar">
    <div class="topbar-actual">
        <div class="container-full">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li><a href="#menu-toggle" id="menu-toggle"><i class="mdi ico-menu"></i></a></li>
                        <li>
                            <a href="#menu-toggle" id="menu-toggle">
                                <img src="{{ asset("/public/assets/backend/images/logo-dashboard.png") }}" width="130" height="21" class="logo-new">
                                <img src="{{ asset("/public/assets/backend/images/logo-crop.png") }}" width="39" height="30" class="logo-crop">
                            </a>
                        </li>
                        <li class="pull-right">
                            <a href="#" class="btn btn-preview"><i class="fa fa-eye" aria-hidden="true"></i> Live Preview</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="topbar-panel">
    <ul>
        <li>

            <div class="profile-badge">
                <a href="#" id="gravatar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <p>
                        <img src="{{ asset("/public/assets/backend/images/128.jpg") }}" alt="user" class="gravatar">
                        <span class="username">{{ Auth::guard('admin')->user()->name }}</span><br/>
                        <i class="on">on</i><span class="status">Administrator</span>
                        <i class="mdi ico-keyboard-arrow-down pull-right"></i>
                    </p>
                </a>
                <ul class="dropdown-menu" aria-labelledby="gravatar">
                    <li><a href="my_profile.html"><i class="mdi ico-account-circle"></i> My Profile</a></li>
                    <li><a href="{{ url('admin/logout') }}"><i class="mdi ico-lock-open"></i> Logout</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
<!-- END OF TOPBAR -->