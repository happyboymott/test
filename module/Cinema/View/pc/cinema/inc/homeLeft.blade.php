<div class="ub-menu-layout">
    <a class="toggle" href="javascript:;" onclick="$('body').toggleClass('ub-menu-layout-shrink')">
        <i class="iconfont icon-list"></i>
    </a>
    <div class="body">
        @foreach(\Module\Nav\Util\NavUtil::listByPositionWithCache(\Module\Cinema\Core\CinemaHomeLeftNavPositionBiz::NAME) as $nav)
            <a class="item item-main {{modstart_baseurl_active($nav['link'])}}" href="{{$nav['link']}}" {{\Module\Nav\Type\NavOpenType::getBlankAttributeFromValue($nav)}}>
                <i class="icon {{$nav['icon']}}"></i>
                <span class="text">{{$nav['name']}}</span>
            </a>
        @endforeach
        <div class="item-title">频道</div>
        @foreach(\Module\Cinema\Model\CinemaChannel::recordAll() as $c)
            <a class="item {{!empty($channel)&&$c['id']==$channel['id']?'active':''}}"
               href="{{modstart_web_url('cinema/channel-'.$c['id'])}}">
                @if(!empty($c['icon']))
                    <i class="icon {{$c['icon']}}"></i>
                @else
                    <img class="icon" src="{{$c['cover']}}" />
                @endif
                <span class="text">{{$c['title']}}</span>
            </a>
        @endforeach
        <div class="foot">
            <div class="link">
                @foreach(\Module\Nav\Util\NavUtil::listByPositionWithCache(\Module\Cinema\Core\CinemaHomeLeftFootPositionBiz::NAME) as $nav)
                    <a href="{{$nav['link']}}" {{\Module\Nav\Type\NavOpenType::getBlankAttributeFromValue($nav)}}>
                        {{$nav['name']}}
                    </a>
                @endforeach
            </div>
            <div class="copy">
                <a href="http://beian.miit.gov.cn" class="ub-text-sm" target="_blank">
                    {{modstart_config('siteBeian','[网站备案信息]')}}
                </a>
                @if(modstart_config('siteBeianGonganText'))
                    <br />
                    <a href="{{modstart_config('siteBeianGonganLink')}}" class="ub-text-sm" target="_blank">
                        <img src="@asset('vendor/Site/image/gongan.png')" />
                        {{modstart_config('siteBeianGonganText')}}
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
