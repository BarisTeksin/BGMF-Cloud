<nav class="navbar custom-navbar navbar-expand-lg py-2">
    <div class="container-fluid px-0">
        <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-align-left"></i></a>
        <a href="{{route('dashboard.index')}}"><img src="/assets/images/logo-light.png" alt="Öndeyim" height="30"></a>
        <div id="navbar_main">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl py-0">
                        <div class="py-3 px-3">
                            <h5 class="heading h6 mb-0">Bildirimler</h5>
                        </div>
                        <div class="py-3 text-center">
                            <a href="{{url('dashboard.notifications')}}" class="link link-sm link--style-3">Tümünü görüntüle</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                    
                    <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">Kullanıcı Menüsü</h6>
                        <a class="dropdown-item" href="{{url('profile.index')}}"><i class="fa fa-user text-primary"></i>Profil</a>
                        <a href="{{url('dashboard.faturalar')}}" class="dropdown-item" ><i class="fa fa-file-pdf-o text-primary"></i><span>Faturalar</span></a>
                        <div class="dropdown-divider" role="presentation"></div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item">
                                <i class="fa fa-power-off text-primary"></i>Çıkış Yap
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>