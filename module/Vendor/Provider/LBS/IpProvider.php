<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\LBS; use Module\Vendor\Provider\ProviderTrait; class IpProvider { use ProviderTrait; public static function all() { return self::listAll(); } public static function get($MXTsP) { return self::getByName($MXTsP); } public static function first() { foreach (self::all() as $CjF8A) { return $CjF8A; } return null; } public static function firstResponse($bchpy) { goto lz3Ez; Jt_OA: if (!$CjF8A) { return null; } goto Vn7CQ; Vn7CQ: return $CjF8A->getLocation($bchpy); goto YROQR; lz3Ez: $CjF8A = self::first(); goto Jt_OA; YROQR: } public static function firstResponseKey($bchpy, $ohzJX = array('province')) { goto YUq0c; YUq0c: $VumX5 = self::firstResponse($bchpy); goto vRSxD; ai2au: return join('', $vgAv2); goto zNi7l; kVqN1: foreach ($ohzJX as $Tf8Ew) { $vgAv2[] = $VumX5->{$Tf8Ew}; } goto ai2au; vRSxD: if (empty($VumX5)) { return ''; } goto sS4Ig; sS4Ig: $vgAv2 = array(); goto kVqN1; zNi7l: } }