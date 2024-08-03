<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Session; use Illuminate\Support\Facades\Session; use Module\Vendor\Util\AtomicUtil; class SessionUtil { public static function atomicProduce($MXTsP, $v0Qpl, $ztzE8 = 3600) { AtomicUtil::produce("{$MXTsP}:" . Session::getId(), $v0Qpl, $ztzE8); } public static function atomicConsume($MXTsP) { return AtomicUtil::consume("{$MXTsP}:" . Session::getId()); } public static function atomicRemove($MXTsP) { AtomicUtil::remove("{$MXTsP}:" . Session::getId()); } }