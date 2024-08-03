<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Config; class MemberAdminList { private static $gridFields = array(); public static function registerGridField(\Closure $Ri3Vj) { self::$gridFields[] = $Ri3Vj; } public static function callGridField($UXxZR) { foreach (self::$gridFields as $Ri3Vj) { call_user_func_array($Ri3Vj, array($UXxZR)); } } }