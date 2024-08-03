<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Cinema\Model; use Illuminate\Database\Eloquent\Model; use Illuminate\Support\Facades\Cache; use ModStart\Core\Dao\ModelUtil; class CinemaChannelTag extends Model { protected $table = 'cinema_channel_tag'; public static function clearCache() { Cache::forget('CinemaChannelTagMap'); } public static function listRecordsByGroup($zuxU6) { return ModelUtil::all('cinema_channel_tag', array('groupId' => $zuxU6), array('id', 'groupId', 'title'), array('sort', 'asc')); } public static function mapByIds($MZyvH) { goto TIIXC; LwKvf: foreach ($MZyvH as $lTGiT) { if (isset($SbXv2[$lTGiT])) { $MNGd0[] = $SbXv2[$lTGiT]; } } goto QPXDU; QPXDU: return $MNGd0; goto hk5C8; IBqTz: $MNGd0 = array(); goto LwKvf; TIIXC: $SbXv2 = self::allMap(); goto IBqTz; hk5C8: } public static function allMap() { return Cache::rememberForever('CinemaChannelTagMap', function () { $mvkYF = ModelUtil::all('cinema_channel_tag', array(), array('id', 'groupId', 'title'), array('sort', 'asc')); $SbXv2 = array(); foreach ($mvkYF as $VeWu4) { $SbXv2[$VeWu4['id']] = $VeWu4; } return $SbXv2; }); } }