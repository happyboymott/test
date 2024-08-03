<div class="tw-bg-white tw-rounded">
    @if(empty($groups))
        <div class="ub-empty">
            暂无标签
        </div>
    @else
        <table class="ub-table">
            @foreach($groups as $group)
                <tr>
                    <td width="100">{{$group['groupTitle']}}</td>
                    <td>
                        @foreach($group['tags'] as $tag)
                            <label class="tw-leading-6">
                                <input type="checkbox" class="tw-align-middle" name="groupTagItem[]" value="{{$tag['id']}}" />
                                <span>{{$tag['title']}}</span>
                            </label>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

</div>
