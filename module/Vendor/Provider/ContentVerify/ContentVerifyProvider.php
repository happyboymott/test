<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\ContentVerify; class ContentVerifyProvider { private static $instances = array(); public static function register($CjF8A) { self::$instances[] = $CjF8A; } public static function all() { foreach (self::$instances as $PPiLF => $SNE7X) { if ($SNE7X instanceof \Closure) { self::$instances[$PPiLF] = call_user_func($SNE7X); } else { if (is_string($SNE7X)) { self::$instances[$PPiLF] = app($SNE7X); } } } return self::$instances; } public static function get($MXTsP) { goto G79h1; YmhNk: return null; goto vSXL1; F52Vy: foreach (self::all() as $LKQ89) { if ($LKQ89->name() == $MXTsP) { return $LKQ89; } } goto YmhNk; G79h1: if (empty($MXTsP)) { return null; } goto F52Vy; vSXL1: } }