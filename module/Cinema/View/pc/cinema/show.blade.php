@extends($_viewFrame)

@section('pageTitleMain'){{$show['title']}} - {{$series['title']}}@endsection
@section('pageKeywords'){{$show['title']}} - {{$series['title']}}@endsection
@section('pageDescription'){{$show['title']}} - {{$series['title']}}@endsection

@if(count($allShows)<=1)
    @section('bodyProperties','class="pb-series-show-player-full"')
@endif

@section('bodyContent')

    {!! \ModStart\ModStart::css('vendor/Cinema/style/video.css') !!}
    {!! \ModStart\ModStart::js('vendor/Cinema/entry/video.js') !!}
    {!! \ModStart\ModStart::js('asset/vendor/xgplayer.js') !!}
    <div class="pb-series-show-player margin-bottom @if(count($allShows)<=1) single @endif" data-series-show-player>
        <div class="ub-video-container">
            <div class="video-player">
                <div class="player-box">
                    @if($accessCheck->check && empty($accessCheck->data))
                        <div class="buy-tip tw-py-10 tw-text-center">
                            <div>
                                @if($show['_hasTry'])
                                    <div class="tw-text-gray-400 tw-mb-4">
                                        <a href="javascript:;" class="btn btn-round btn-primary btn-lg" data-try-now>
                                            <i class="iconfont icon-play"></i>
                                            立即试看
                                        </a>
                                    </div>
                                @endif
                                <div>
                                    当前视频为付费视频，您无权查看
                                </div>
                                <div class="tw-pt-10">
                                    @if($accessCheck->vipSupport)
                                        <a href="{{modstart_web_url('member_vip')}}" class="btn btn-primary btn-round">
                                            开通VIP
                                        </a>
                                    @endif
                                    @if($accessCheck->creditSupport)
                                        <a href="javascript:;" data-ajax-request-loading
                                           data-ajax-request="{{modstart_api_url('cinema/show_credit_buy',['seriesId'=>$series['id'],'showId'=>$series['id']])}}"
                                           class="btn btn-primary btn-round">
                                            使用 {{$accessCheck->creditCost}}{{\ModStart\Module\ModuleManager::getModuleConfig('Member', 'creditName', '积分')}} 购买
                                        </a>
                                    @endif
                                </div>
                                @if($accessCheck->vipSupport)
                                    <div class="tw-text-gray-400 tw-mt-4">
                                        VIP需开通
                                        @foreach($accessCheck->vipList as $v)
                                            {{$v['title']}}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if($show['_hasTry'])
                            <div id="tryPlayer" class="player body-scroll-lock-hide try-video-player"></div>
                            <script>
                                $(function () {
                                    window.__tryPlayer = new Player({
                                        id: 'tryPlayer',
                                        fitVideoSize: 'auto',
                                        fluid: false,
                                        url: '{{$show['_tryPlayUrl']}}',
                                        'x5-video-player-type': 'h5',
                                        playsinline: false,
                                        playbackRate: [0.5, 0.75, 1, 1.5, 2],
                                        defaultPlaybackRate: 1.0
                                    });
                                });
                            </script>
                        @endif
                    @else
                        <div id="player" class="player body-scroll-lock-hide"></div>
                        <script>
                            $(function () {
                                window.__player = new Player({
                                    id: 'player',
                                    fitVideoSize: 'auto',
                                    fluid: false,
                                    url: '{{$show['_playUrl']}}',
                                    'x5-video-player-type': 'h5',
                                    playsinline: false,
                                    autoplay:true,
                                    playbackRate: [0.5, 0.75, 1, 1.5, 2],
                                    defaultPlaybackRate: 1.0
                                });
                            });
                        </script>
                    @endif
                </div>
                <div class="player-tools">
                    @if($accessCheck->check)
                        @if(empty($accessCheck->data))
                            <a class="item ub-color-vip" href="javascript:;" data-buy-now>
                                <i class="iconfont icon-vip-alt"></i>
                                立即购买
                            </a>
                        @else
                            <div class="item ub-color-vip">
                                <i class="iconfont icon-vip-alt"></i>
                                付费视频
                            </div>
                        @endif
                    @endif
                    @if(!\ModStart\Core\Util\AgentUtil::isMobile())
                        <a class="item full-enter" href="javascript:;" data-video-play-mode>
                            <i class="iconfont icon-desktop"></i>
                            剧场模式
                        </a>
                        <a class="item full-exit" href="javascript:;" data-video-play-mode>
                            <i class="iconfont icon-desktop"></i>
                            退出剧场模式
                        </a>
                    @endif
                    @if(0)
                    <a class="item" href="#">
                        <i class="iconfont icon-star"></i>
                        收藏
                    </a>
                    @endif
                </div>
            </div>
            @if(count($allShows)>1)
                <div class="video-tools">
                    <div class="title">
                        {{$series['title']}}
                    </div>
                    <div class="shows">
                        @foreach($allShows as $sI=>$s)
                            <a class="item {{$s['id']==$show['id']?'active':''}}" href="{{modstart_web_url('cinema/series-'.$series['id'].'/'.$s['id'])}}">
                                {{$sI+1}}
                                @if($s['freeStatus']!=\Module\Cinema\AssetAccess\Type\FreeStatus::FREE)
                                    <i class="vip-icon iconfont icon-vip ub-color-vip"></i>
                                @endif
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div class="ub-container">
        <div class="ub-video-info margin-bottom">
            <h1>{{$show['title']}} - {{$series['title']}}</h1>
            <div class="stat">
                @foreach($series['_tags'] as $t)
                    <a href="{{modstart_web_url('cinema/list-'.$channel['id'],['tagIds'=>$t['id']])}}">{{$t['title']}}</a>
                @endforeach
                <a href="javascript:;">
                    <i class="iconfont icon-play"></i>
                    {{$show['viewCount']?$show['viewCount']:0}}
                </a>
                @if(0)
                <a href="#">
                    <i class="iconfont icon-thumb-up"></i>
                    333
                </a>
                @endif
            </div>
            <div class="summary">
                {{ $series['description'] }}
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                @if(modstart_module_enabled('MemberComment'))
                    <div class="margin-bottom" style="">
                        @include('module::MemberComment.View.pc.public.comment',['biz'=>'cinema_s','bizId'=>$show['id']])
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                <div class="ub-panel margin-bottom">
                    <div class="head">
                        <div class="title">
                            视频介绍
                        </div>
                    </div>
                    <div class="body">
                        <div class="ub-html lg">
                            {!! $series['content'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
