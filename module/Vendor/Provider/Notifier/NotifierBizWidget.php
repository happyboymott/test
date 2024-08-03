<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Notifier; class NotifierBizWidget { private static $list = array(); public static function register($strQF, $A8WB0) { self::$list[] = array('biz' => $strQF, 'title' => $A8WB0); } public static function get() { return self::$list; } }