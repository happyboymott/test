<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use ModStart\Core\Util\Support\MP3File; class AudioUtil { public static function mp3Duration($Z814E) { $itoQ0 = new MP3File($Z814E); return $itoQ0->getDuration(); } }