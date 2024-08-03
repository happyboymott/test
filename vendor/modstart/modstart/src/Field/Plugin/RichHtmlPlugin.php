<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field\Plugin; class RichHtmlPlugin { private static $list = array(); public static function reigster($qjuOL) { self::$list[] = $qjuOL; } public static function all() { foreach (self::$list as $QSYJT => $qjuOL) { if (is_string($qjuOL)) { self::$list[$QSYJT] = app($qjuOL); } } return self::$list; } }