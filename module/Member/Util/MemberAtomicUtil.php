<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Util; use ModStart\Core\Exception\BizException; use Module\Member\Auth\MemberUser; use Module\Vendor\Util\AtomicUtil; class MemberAtomicUtil { public static function acquireOrFail($wqka4, $eiVIs, $mdCxN = null, $ztzE8 = 30) { if (!self::acquire($eiVIs, $mdCxN, $ztzE8)) { BizException::throws($wqka4); } } public static function acquire($eiVIs, $mdCxN = null, $ztzE8 = 30) { goto qaQUe; qaQUe: if (null === $mdCxN) { $mdCxN = MemberUser::id(); } goto Husxt; V4OjF: return AtomicUtil::acquire($Tf8Ew, $ztzE8); goto ZZf5T; Husxt: $Tf8Ew = $eiVIs . '_' . $mdCxN; goto V4OjF; ZZf5T: } public static function release($eiVIs, $mdCxN = null) { goto hrYdg; qNGCW: AtomicUtil::release($Tf8Ew); goto lHQ7I; S7zgT: $Tf8Ew = $eiVIs . '_' . $mdCxN; goto qNGCW; hrYdg: if (null === $mdCxN) { $mdCxN = MemberUser::id(); } goto S7zgT; lHQ7I: } }