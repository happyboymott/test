<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Provider\Auth; use Module\Vendor\Provider\ProviderTrait; class MemberAuthProvider { use ProviderTrait; public static function call($aGP33, $xXY5G = array()) { goto AOkyP; AOkyP: $dJllS = MemberAuthProvider::listAll(); goto C8XWq; C8XWq: foreach ($dJllS as $CjF8A) { goto v0m3G; ATKw3: if (null !== $vgAv2) { return $vgAv2; } goto LauZO; YGqKa: $vgAv2 = call_user_func_array(array($CjF8A, $aGP33), array($xXY5G)); goto ATKw3; v0m3G: if (!$CjF8A->enabled()) { continue; } goto YGqKa; LauZO: } goto aXk3y; aXk3y: return null; goto mIIWz; mIIWz: } }