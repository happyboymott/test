<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SiteTemplate; class SiteTemplateProvider { private static $instances = array(DefaultSiteTemplateProvider::class); public static function register($CjF8A) { self::$instances[] = $CjF8A; } public static function registerQuick($MXTsP, $A8WB0, $ZcYui = null) { self::register(QuickSiteTemplateProvider::make($MXTsP, $A8WB0, $ZcYui)); } public static function all() { foreach (self::$instances as $PPiLF => $SNE7X) { if ($SNE7X instanceof \Closure) { self::$instances[$PPiLF] = call_user_func($SNE7X); } else { if (is_string($SNE7X)) { self::$instances[$PPiLF] = app($SNE7X); } } } return self::$instances; } public static function get($MXTsP) { foreach (self::all() as $CjF8A) { if ($CjF8A->name() == $MXTsP) { return $CjF8A; } } return null; } public static function map() { return array_build(self::all(), function ($PPiLF, $SNE7X) { return array($SNE7X->name(), $SNE7X->title()); }); } }