<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class PlatformUtil { const WINDOWS = 'windows'; const LINUX = 'linux'; const OSX = 'osx'; const UNKNOWN = 'unknown'; private static function name() { return strtoupper(PHP_OS); } public static function isWindows() { return substr(self::name(), 0, 3) == 'WIN'; } public static function isOsx() { return self::name() == 'DARWIN'; } public static function isLinux() { return self::name() == 'LINUX'; } public static function isType($xIB9x) { return in_array(self::type(), $xIB9x); } public static function type() { goto KR2jZ; wXs4f: if (self::isWindows()) { return self::WINDOWS; } goto nZ1y8; Y77YD: return self::UNKNOWN; goto hN9c1; KR2jZ: if (self::isOsx()) { return self::OSX; } goto wXs4f; nZ1y8: if (self::isLinux()) { return self::LINUX; } goto Y77YD; hN9c1: } }