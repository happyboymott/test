<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Util; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\Request; use ModStart\Core\Util\EnvUtil; use ModStart\Core\Util\RandomUtil; class NoneLoginOperateUtil { public static function generateUrl($wg3Zt, $xXY5G = array(), $z1cqO = null) { goto Cn1fG; kewVu: $YSfIJ['sign'] = self::sign($wg3Zt, $YSfIJ['nonce'], $YSfIJ['timestamp'], $YSfIJ['param']); goto m0ukG; m0ukG: return $z1cqO . modstart_web_url($wg3Zt, $YSfIJ); goto bpKhS; KIdUe: $YSfIJ['nonce'] = RandomUtil::string(10); goto s0i1B; s0i1B: $YSfIJ['param'] = json_encode($xXY5G); goto kewVu; y596a: $YSfIJ = array(); goto VwiUj; VwiUj: $YSfIJ['timestamp'] = time(); goto KIdUe; Cn1fG: if (null === $z1cqO) { $z1cqO = Request::domainUrl(); } goto y596a; bpKhS: } public static function sign($wg3Zt, $t6dnv, $qLVyf, $xXY5G) { $MC414 = EnvUtil::securityKey(); return md5($wg3Zt . ':' . $MC414 . ':' . $t6dnv . ':' . $qLVyf . ':' . $xXY5G); } }