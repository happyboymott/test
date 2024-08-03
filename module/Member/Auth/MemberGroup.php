<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Auth; use ModStart\Core\Util\ConvertUtil; use Module\Member\Util\MemberGroupUtil; use Module\Member\Util\MemberVipUtil; class MemberGroup { public static function get($Tf8Ew = null, $DUy9o = null) { goto meaba; iqiPB: return $EhasX; goto Mpqek; QaXca: if (null === $EhasX) { $EhasX = MemberGroupUtil::getMemberGroup(MemberUser::user()); } goto L36Ra; meaba: static $EhasX = null; goto QaXca; L36Ra: if (null !== $Tf8Ew) { return $EhasX ? $EhasX[$Tf8Ew] : $DUy9o; } goto iqiPB; Mpqek: } public static function isDefault() { return self::get('isDefault', false); } public static function id() { return self::get('id', 0); } public static function inGroupIds($IwaFr) { return self::is($IwaFr); } public static function is($IwaFr) { goto el0Ta; oqVpn: $wlXEl = self::get('id'); goto egAsf; TO5HB: return in_array($wlXEl, $IwaFr); goto CW0Jb; egAsf: if (empty($wlXEl)) { return false; } goto TO5HB; el0Ta: if (!is_array($IwaFr)) { $IwaFr = ConvertUtil::toArray($IwaFr); } goto oqVpn; CW0Jb: } }