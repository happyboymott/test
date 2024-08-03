<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Module; use Composer\Autoload\ClassLoader; class ModuleClassLoader { private static $loader = null; private static $namespacesAdded = array(); private static function loaderInit() { if (null == self::$loader) { self::$loader = app(ClassLoader::class); self::$loader->register(true); } } public static function addClass($NZAQB, $itoQ0) { self::loaderInit(); self::$loader->addClassMap(array($NZAQB => $itoQ0)); } public static function addNamespace($JeIzG, $am_Sn) { goto A4liu; Kl9WB: if (!ends_with($JeIzG, '\\')) { $JeIzG = $JeIzG . '\\'; } goto JZGkZ; A4liu: self::loaderInit(); goto Kl9WB; JZGkZ: $eJbDo[$JeIzG] = $am_Sn; goto TGBKm; TGBKm: self::$loader->addPsr4($JeIzG, array($am_Sn)); goto CKNv2; CKNv2: } public static function addNamespaceIfMissing($JeIzG, $am_Sn) { if (!self::hasNamespace($JeIzG)) { self::addNamespace($JeIzG, $am_Sn); } } public static function hasNamespace($JeIzG) { if (!ends_with($JeIzG, '\\')) { $JeIzG = $JeIzG . '\\'; } return isset($eJbDo[$JeIzG]); } }