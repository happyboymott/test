@extends($_viewFrame)

@section('pageTitle'){{modstart_config('siteName').' | '.modstart_config('siteSlogan')}}@endsection

@section('body')

    @include('theme.default.pc.share.header')

    @if(!\ModStart\Core\Util\AgentUtil::isMobile())
        @include('module::Cinema.View.pc.cinema.inc.homeLeft')
    @endif

    <div class="{{\ModStart\Core\Util\AgentUtil::isMobile()?'':'ub-menu-layout-container'}}">
        <div class="tw-px-4">
            @if(empty($mainGroupDetail))
                @foreach($latestSeries as $s)
                    <div class="tw-px-2 tw-py-2">
                        <span class="tw-text-lg tw-font-bold">
                            最近更新
                        </span>
                        <a href="{{modstart_web_url('cinema/list-'.$channel['id'])}}" class="ub-text-tertiary tw-ml-4">
                            更多
                            <i class="iconfont icon-angle-right"></i>
                        </a>
                    </div>
                    <div class="ub-list-items" style="padding:0.5rem;">
                        <div class="row">
                            @foreach($latestSeries as $s)
                                <div class="col-md-3 col-6">
                                    @include('module::Cinema.View.pc.cinema.inc.seriesItem')
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @else
                @foreach($mainGroupDetail['tags'] as $t)
                    <div class="tw-px-2 tw-py-2">
                        <span class="tw-text-lg tw-font-bold">
                            {{$t['title']}}
                        </span>
                        <a href="{{modstart_web_url('cinema/list-'.$channel['id'],['tagIds'=>$t['id']])}}" class="ub-text-tertiary tw-ml-4">
                            更多
                            <i class="iconfont icon-angle-right"></i>
                        </a>
                    </div>
                    <div class="ub-list-items" style="padding:0.5rem;">
                        <div class="row">
                            @foreach($t['_series'] as $s)
                                <div class="col-md-3 col-6">
                                    @include('module::Cinema.View.pc.cinema.inc.seriesItem')
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection
