@extends($_viewFrame)

{!! \ModStart\ModStart::js('asset/vendor/jqueryMark.js') !!}
{!! \ModStart\ModStart::style('[data-markjs]{color:red !important;background:transparent;}') !!}
{!! \ModStart\ModStart::script("$('.item-video-cover .title').mark(".json_encode($keywords).",{});") !!}

@section('pageTitleMain'){{$pageTitle}}@endsection
@section('pageKeywords'){{$pageTitle}}@endsection
@section('pageDescription'){{$pageTitle}}@endsection

@section('bodyContent')

    <div class="ub-container">
        <div class="ub-breadcrumb">
            <a href="{{modstart_web_url('')}}">首页</a>
            <a href="javascript:;" class="active">{{$channel['title']}}</a>
        </div>
    </div>

    <div class="ub-container">
        @if(!empty($keywords))
            <div class="ub-search-result margin-bottom">
                搜索 <span class="keyword">{{$keywords}}</span> ，共找到 <span class="count">{{$total}}</span> 条记录
            </div>
        @endif
        <div class="ub-nav-tab">
            @foreach($channels as $c)
                <a href="{{modstart_web_url('cinema/list-'.$c['id'])}}" class="{{$channel['id']==$c['id']?'active':''}}">
                    {{$c['title']}}
                </a>
            @endforeach
        </div>
        <div class="ub-nav-group margin-top">
            @foreach($groupsDetail as $gd)
                <div class="group">
                    <div class="label">
                        <div class="text">{{$gd['groupTitle']}}</div>
                    </div>
                    <div class="items">
                        <a class="{{!$gd['hasTagIn']?'active':''}}" href="?{{\ModStart\Core\Input\Request::mergeQueries(['tagIds'=>empty($gd['leftTagIds'])?null:join('_',$gd['leftTagIds'])])}}">全部</a>
                        @foreach($gd['tags'] as $t)
                            <a href="?{{\ModStart\Core\Input\Request::mergeQueries(['tagIds'=>join('_',array_merge($gd['leftTagIds'],[$t['id']]))])}}"
                               class="{{in_array($t['id'],$tagIds)?'active':''}}">
                                {{$t['title']}}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="ub-container margin-top">
        @if(empty($records))
            <div class="ub-empty tw-my-20">
                <div class="icon">
                    <div class="iconfont icon-empty-box"></div>
                </div>
                <div class="text">暂无记录</div>
            </div>
        @else
            <div class="tw--mx-3">
                <div class="ub-list-items ">
                    <div class="row">
                        @foreach($records as $s)
                            <div class="col-md-3 col-6">
                                @include('module::Cinema.View.pc.cinema.inc.seriesItem',['channel'=>$c])
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
                <div class="ub-page">
                    {!! $pageHtml !!}
                </div>
            </div>
        @endif
    </div>


@endsection
