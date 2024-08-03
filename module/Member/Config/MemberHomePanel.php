<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Config; class MemberHomePanel { private static $list = array(); public static function register($LKQ89) { self::$list[] = $LKQ89; } public static function get() { foreach (self::$list as $PPiLF => $LKQ89) { if ($LKQ89 instanceof \Closure) { self::$list[$PPiLF] = call_user_func($LKQ89); } } return self::$list; } }