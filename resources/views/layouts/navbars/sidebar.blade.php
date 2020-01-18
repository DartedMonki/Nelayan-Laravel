<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
<!--             <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a> -->
            <a href="#" class="simple-text logo-normal">{{ __('Nelayan Cerdas K1000') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug ?? '' == 'dashboard') class="active" @else class="inactive" @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Beranda') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#produksi" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Produksi') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse" id="produksi">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug ?? '' == 'penebaran') class="active" @else class="inactive" @endif>
                            <a href="{{ route('pages.penebaran')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Penebaran') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug ?? '' == 'pencucian') class="active" @else class="inactive" @endif>
                            <a href="{{ route('pages.pencucian')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Pencucian') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug ?? '' == 'pemindahan') class="active" @else class="inactive" @endif>
                            <a href="{{ route('pages.pemindahan')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Pemindahan') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug ?? '' == 'panen') class="active" @else class="inactive" @endif>
                            <a href="{{ route('pages.panen')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Panen') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li @if ($pageSlug ?? '' == 'profile') class="active" @else class="inactive" @endif>
                <a href="{{ route('profile.edit')  }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('Profil User') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'users') class="active" @else class="inactive" @endif>
                <a href="{{ route('user.index')  }}">
                    <i class="tim-icons icon-bullet-list-67"></i>
                    <p>{{ __('Manajemen User') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'icons') class="active" @else class="inactive" @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'maps') class="active" @else class="inactive" @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'notifications') class="active" @else class="inactive" @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'tables') class="active" @else class="inactive" @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'typography') class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
            <li class=" {{ $pageSlug ?? '' == 'upgrade' ? 'active' : '' }}">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
