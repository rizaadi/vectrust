<aside>
    <!--    dashboard menu -->
    <div class="user-db-menu-ds">
        <ul class="profile-menu-ds">
            <li><a href="26-profile-info.html"><svg class="crumina-icon">
                        <use xlink:href="#user-icon"></use>
                    </svg>Profile Info</a></li>
            <li><a href=""><svg class="crumina-icon">
                        <use xlink:href="#dashboard-icon"></use>
                    </svg>Dashboard</a></li>
            @role('creator')
            <li><a href="{{route('products.anyar')}}"><svg class="crumina-icon">
                        <use xlink:href="#picture-icon"></use>
                    </svg>Upload Service</a></li>
            <li><a href="{{route('profile.uploadvector')}}"><svg class="crumina-icon">
                        <use xlink:href="#picture-icon"></use>
                    </svg>Upload Vector</a></li>
            <li><a href="{{route('manage.index')}}"><svg class="crumina-icon">
                        <use xlink:href="#picture-icon"></use>
                    </svg>Manage Items</a></li>
            @endrole
            <li><a href=""><svg class="crumina-icon">
                        <use xlink:href="#circle-checked-icon"></use>
                    </svg>Get Verified Creator</a></li>
            <!-- Authentication -->
            <form id="form1" method="POST" action="{{ route('logout') }}">
                @csrf
                <li><a href="javascript:;"onclick="document.getElementById('form1').submit();"><svg class="crumina-icon">
                            <use xlink:href="#logout-icon"></use>
                        </svg>logout</a></li>
            </form>
        </ul>
    </div>
</aside>
