<div id="tagsSelect"></div>
<input type="hidden" name="tags" value="{{$tags}}"/>
<script>
    $(function () {
        function change() {
            var channelId = $('[name=channelId]').val();
            MS.api.post("{{modstart_admin_url('cinema/series/tags_by_channel')}}", {channelId: channelId}, res => {
                MS.api.defaultCallback(res, {
                    success: function (res) {
                        $('#tagsSelect').html(res.data.groupsTagSelectHtml);
                        var tagIds = $('[name=tags]').val();
                        if (tagIds) {
                            tagIds = tagIds.substr(1, tagIds.length - 2).split('::');
                            for (var tagId of tagIds) {
                                $('#tagsSelect input[type=checkbox][value=' + tagId + ']').prop('checked', true);
                            }
                        }
                    }
                });
            });
        }

        $('[name=channelId]').on('change', change);
        change();
        $('#tagsSelect').on('change', 'input[type=checkbox]', function () {
            var tagIds = [];
            $('#tagsSelect input[type=checkbox]:checked').each(function (i, o) {
                tagIds.push($(o).val());
            })
            tagIds = tagIds.join('::');
            if (tagIds) {
                tagIds = ':' + tagIds + ':';
            }
            $('[name=tags]').val(tagIds);
        });
    });
</script>
