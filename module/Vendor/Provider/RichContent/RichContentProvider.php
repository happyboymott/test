<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\RichContent; use Module\Vendor\Provider\RichContent\AbstractRichContentProvider; use Module\Vendor\Provider\RichContent\UEditorRichContentProvider; class RichContentProvider { private static $instances = array(UEditorRichContentProvider::class); public static function register($CjF8A) { self::$instances[] = $CjF8A; } public static function all() { foreach (self::$instances as $PPiLF => $SNE7X) { if ($SNE7X instanceof \Closure) { self::$instances[$PPiLF] = call_user_func($SNE7X); } else { if (is_string($SNE7X)) { self::$instances[$PPiLF] = app($SNE7X); } } } return self::$instances; } public static function getByName($MXTsP) { foreach (self::all() as $TlCN9) { if ($TlCN9->name() == $MXTsP) { return $TlCN9; } } return null; } }