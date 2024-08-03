<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Captcha; use ModStart\Core\Exception\BizException; class CaptchaProvider { private static $instances = array(DefaultCaptchaProvider::class); public static function register($CjF8A) { self::$instances[] = $CjF8A; } public static function all() { foreach (self::$instances as $PPiLF => $SNE7X) { if ($SNE7X instanceof \Closure) { self::$instances[$PPiLF] = call_user_func($SNE7X); } else { if (is_string($SNE7X)) { self::$instances[$PPiLF] = app($SNE7X); } } } return self::$instances; } public static function nameTitleMap() { return array_build(self::all(), function ($PPiLF, $SNE7X) { return array($SNE7X->name(), $SNE7X->title()); }); } public static function get($MXTsP) { foreach (self::all() as $LKQ89) { if ($LKQ89->name() == $MXTsP) { return $LKQ89; } } return null; } public static function hasProvider() { $CjF8A = app()->config->get('CaptchaProvider'); return !empty($CjF8A); } }