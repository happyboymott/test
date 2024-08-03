<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Auth; use Module\Member\Util\MemberVipUtil; class MemberVip { public static function get($Tf8Ew = null, $DUy9o = null) { goto fa1cr; fa1cr: static $zWYSs = null; goto myrkO; QXpc9: if (null !== $Tf8Ew) { return isset($zWYSs[$Tf8Ew]) ? $zWYSs[$Tf8Ew] : $DUy9o; } goto Irlx1; Irlx1: return $zWYSs; goto Zlluq; myrkO: if (null === $zWYSs) { $zWYSs = MemberVipUtil::getMemberVip(MemberUser::user()); } goto QXpc9; Zlluq: } public static function isDefault() { return self::get('isDefault', false); } public static function id() { return self::get('id', 0); } public static function is($T9Xf5) { goto hVT06; hVT06: if (empty($T9Xf5)) { return false; } goto JNiNh; lzZks: return in_array(self::id(), $T9Xf5); goto qxc7R; JNiNh: if (!is_array($T9Xf5)) { $T9Xf5 = array($T9Xf5); } goto lzZks; qxc7R: } }