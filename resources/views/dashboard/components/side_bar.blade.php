<div class="left_sidebar">
    <nav class="sidebar">
        <div class="user-info mt-6">
            <div class="image"><a href="{{url('profile.index')}}"><img src="{{ Auth::user()->profile_photo_path ? '/assets/images/users/'.Auth::user()->profile_photo_path : '/assets/images/users/default.png' }}"
                        alt="User"></a></div>
            <div class="detail mt-3">
                <h5 class="mb-0">{{Auth::user()->name}}</h5>
                <small>Email : {{Auth::user()->email}}</small>
            </div>
            <div class="social">
                <a href="javascript:void(0)" title="profil"><i class="fa fa-calendar"></i>
                    {{ date('d-m-Y', strtotime(Auth::user()->updated_at)) }}</a>
            </div>
        </div>
        <ul id="main-menu" class="metismenu">
            <li class="g_heading">Genel</li>
            <li><a href="{{url('dashboard/files')}}"><i class="ti-home"></i><span>Anasayfa</span></a></li>
            <li><a href="{{url('dashboard/files')}}"><i class="fa fa-file-pdf-o"></i><span>Dosyalar</span></a></li>
        </ul>
    </nav>
</div>