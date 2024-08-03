<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider; trait BizTrait { private static $list = array(); public static function register($strQF) { self::$list[] = $strQF; } public static function registerAll(...$UQrfr) { foreach ($UQrfr as $strQF) { self::register($strQF); } } public static function listAll() { foreach (self::$list as $PPiLF => $SNE7X) { if ($SNE7X instanceof \Closure) { self::$list[$PPiLF] = call_user_func($SNE7X); } else { if (is_string($SNE7X)) { self::$list[$PPiLF] = app($SNE7X); } } } return self::$list; } public static function getByName($MXTsP) { foreach (self::listAll() as $LKQ89) { if ($LKQ89->name() == $MXTsP) { return $LKQ89; } } return null; } public static function allMap() { return array_build(self::listAll(), function ($PPiLF, $SNE7X) { return array($SNE7X->name(), $SNE7X->title()); }); } public static function allMapEnabled() { return array_build(array_filter(self::listAll(), function ($SNE7X) { return $SNE7X->enable(); }), function ($PPiLF, $SNE7X) { return array($SNE7X->name(), $SNE7X->title()); }); } }