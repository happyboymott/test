@extends($_viewFrame)

@section('pageTitle'){{modstart_config('siteName').' | '.modstart_config('siteSlogan')}}@endsection

@section('body')

    @include('theme.default.pc.share.header')

    @if(!\ModStart\Core\Util\AgentUtil::isMobile())
        @include('module::Cinema.View.pc.cinema.inc.homeLeft')
    @endif

    <div class="{{\ModStart\Core\Util\AgentUtil::isMobile()?'':'ub-menu-layout-container'}}">
        <div class="lg:tw-px-6 lg:tw-py-4">
            <div class="tw-bg-white tw-rounded">
                {!! \Module\Banner\View\BannerView::basic(\Module\Cinema\Core\CinemaBannerPositionBiz::NAME) !!}
            </div>
        </div>
        <div class="lg:tw-px-4">
            @foreach($channels as $c)
                <div class="tw-px-2 tw-py-2">
                    <span class="tw-text-lg tw-font-bold">
                        {{$c['title']}}
                    </span>
                    <a href="{{modstart_web_url('cinema/channel-'.$c['id'])}}" class="ub-text-tertiary tw-ml-4">
                        更多
                        <i class="iconfont icon-angle-right"></i>
                    </a>
                </div>
                <div class="ub-list-items" style="padding:0.5rem;">
                    <div class="row">
                        @foreach($c['_series'] as $s)
                            <div class="col-md-3 col-6">
                                @include('module::Cinema.View.pc.cinema.inc.seriesItem',['channel'=>$c])
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
