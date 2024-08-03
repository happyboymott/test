<header class="ub-header-c">
    <div class="menu">
        @foreach(\Module\Nav\Util\NavUtil::listByPositionWithCache('head') as $nav)
            <a href="{{$nav['link']}}" class="item-icon {{modstart_baseurl_active($nav['link'])}}" {{\Module\Nav\Type\NavOpenType::getBlankAttributeFromValue($nav)}}>
                <div class="icon">
                    <i class="{{$nav['icon']}}"></i>
                </div>
                <div class="text">{{$nav['name']}}</div>
            </a>
        @endforeach
        @if(\Module\Member\Auth\MemberUser::id())
            <div class="item">
                <a href="{{modstart_web_url('member')}}" class="sub-title">
                    <i class="iconfont icon-user"></i>
                    {{\Module\Member\Auth\MemberUser::get('username')}}
                </a>
                <div class="sub-nav">
                    {!! \Module\Member\Config\MemberNavMenu::render() !!}
                    <a class="sub-nav-item" href="javascript:;"
                       data-href="{{modstart_web_url('logout')}}" data-confirm="确认退出登录？">
                        退出登录
                    </a>
                </div>
            </div>
        @else
            <a href="{{modstart_web_url('login',['redirect'=>\ModStart\Core\Input\Request::redirectUrl()])}}" rel="nofollow">
                <i class="iconfont icon-user"></i> 
                登录
            </a>
        @endif
    </div>
    <div class="logo">
        <a class="logo-link" href="{{modstart_web_url('')}}">
            <img class="logo-image" src="{{\ModStart\Core\Assets\AssetsUtil::fix(modstart_config('siteLogo'))}}"/>
        </a>
    </div>
    <div class="search">
        <div class="box">
            <form action="{{modstart_web_url('cinema/search')}}" method="get">
                <input class="input" type="text" name="keywords" value="{{empty($keywords)?'':$keywords}}" placeholder="搜索内容"/>
                <button class="submit" type="submit">
                    <i class="iconfont icon-search"></i>
                    搜索
                </button>
            </form>
        </div>
    </div>
    <div class="menu-mask" onclick="$(this).closest('.ub-header-c').removeClass('show')"></div>
    <a class="menu-toggle" href="javascript:;" onclick="$(this).closest('.ub-header-c').toggleClass('show')">
        <i class="show iconfont icon-list"></i>
        <i class="close iconfont icon-close"></i>
    </a>
    <div class="search-mask" onclick="$(this).closest('.ub-header-c').removeClass('show-search')"></div>
    <a class="search-toggle" href="javascript:;" onclick="$(this).closest('.ub-header-c').toggleClass('show-search')">
        <i class="show iconfont icon-search"></i>
        <i class="close iconfont icon-close"></i>
    </a>
</header>
<div class="ub-header-c-placeholder"></div>
