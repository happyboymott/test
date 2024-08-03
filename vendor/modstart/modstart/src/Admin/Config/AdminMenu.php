<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Config; class AdminMenu { private static $menu = array(); public static function register($m34_A) { self::$menu[] = $m34_A; } public static function get() { goto XlTAK; vYVQh: return $m34_A; goto C4VM4; XlTAK: $m34_A = array(); goto S6Bw_; S6Bw_: foreach (self::$menu as $jZEPM) { if ($jZEPM instanceof \Closure) { $jZEPM = call_user_func($jZEPM); } if (isset($jZEPM['title'])) { $m34_A = array_merge($m34_A, array($jZEPM)); } else { $m34_A = array_merge($m34_A, $jZEPM); } } goto vYVQh; C4VM4: } }