<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\PersonVerify; use Module\Vendor\Provider\ProviderTrait; class PersonVerifyIdCardProvider { use ProviderTrait; public static function all() { return self::listAll(); } public static function get($MXTsP) { return self::getByName($MXTsP); } public static function first() { foreach (self::all() as $CjF8A) { return $CjF8A; } return null; } public static function firstResponse($MXTsP, $x6Iu4, $xXY5G = array()) { goto X_8Un; XnhNz: if (!$CjF8A) { return null; } goto jnozb; X_8Un: $CjF8A = self::first(); goto XnhNz; jnozb: return $CjF8A->verify($MXTsP, $x6Iu4, $xXY5G); goto EZPUp; EZPUp: } }