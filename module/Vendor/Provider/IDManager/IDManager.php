<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\IDManager; class IDManager { private static $instances = array(); public static function register($CjF8A) { self::$instances[] = $CjF8A; } public static function all() { foreach (self::$instances as $PPiLF => $SNE7X) { if ($SNE7X instanceof \Closure) { self::$instances[$PPiLF] = call_user_func($SNE7X); } else { if (is_string($SNE7X)) { self::$instances[$PPiLF] = app($SNE7X); } } } return self::$instances; } public static function get($MXTsP) { goto JVFai; U77dz: return null; goto vUzUV; JVFai: $MXTsP = modstart_config($MXTsP, $MXTsP); goto hexyX; hexyX: foreach (self::all() as $KCstx) { if ($KCstx->name() == $MXTsP) { return $KCstx; } } goto U77dz; vUzUV: } }