<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Cache; use Illuminate\Support\Facades\Cache; class CacheUtil { private static function client() { return Cache::store(); } public static function rememberForever($Tf8Ew, $Ri3Vj) { return self::client()->rememberForever($Tf8Ew, $Ri3Vj); } public static function remember($Tf8Ew, $gJWst, $Ri3Vj) { return self::client()->remember($Tf8Ew, intval($gJWst / 60), $Ri3Vj); } public static function forget($Tf8Ew) { return self::client()->forget($Tf8Ew); } public static function get($Tf8Ew) { return self::client()->get($Tf8Ew); } public static function put($Tf8Ew, $v0Qpl, $gJWst) { self::client()->put($Tf8Ew, $v0Qpl, ceil($gJWst / 60)); } public static function forever($Tf8Ew, $v0Qpl) { self::client()->forever($Tf8Ew, $v0Qpl); } }