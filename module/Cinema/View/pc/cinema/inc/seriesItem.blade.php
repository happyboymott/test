<div class="item-video-cover trans">
    <a class="cover" href="{{modstart_web_url('cinema/series-'.$s['id'])}}" style="background-image:url({{$s['cover']}})"></a>
    <a class="title" href="{{modstart_web_url('cinema/series-'.$s['id'])}}">{{$s['title']}}</a>
    <div class="category">
        <div class="stat">
            <a href="{{modstart_web_url('cinema/series-'.$s['id'])}}">
                <i class="iconfont icon-play"></i>
                {{$s['viewCount']?$s['viewCount']:0}}
            </a>
        </div>
        @if(!empty($s['_mainTags']))
            @foreach($s['_mainTags'] as $mtI=>$mt)
                @if($mtI<3)
                    <a href="{{modstart_web_url('cinema/list-'.$channel['id'],['tagIds'=>$mt['id']])}}">{{$mt['title']}}</a>
                @endif
            @endforeach
        @else
            &nbsp;
        @endif
    </div>
</div>
