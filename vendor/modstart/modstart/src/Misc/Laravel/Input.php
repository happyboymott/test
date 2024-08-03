<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Illuminate\Support\Facades; class Input extends Facade { public static function get($QmpAx = null, $M1u7C = null) { return static::$app['request']->input($QmpAx, $M1u7C); } protected static function getFacadeAccessor() { return 'request'; } }