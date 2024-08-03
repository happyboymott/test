<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Html; class HtmlConvertUtil { public static function callInterceptors($fE1HB, $v0Qpl) { goto LU39S; wNpU8: foreach ($fE1HB as $sdfXk) { $TlCN9 = app($sdfXk); $v0Qpl = $TlCN9->convert($v0Qpl); } goto vEiZ2; LU39S: if (empty($fE1HB)) { return $v0Qpl; } goto jkSRt; jkSRt: if (!is_array($fE1HB)) { $fE1HB = array($fE1HB); } goto wNpU8; vEiZ2: return $v0Qpl; goto KZoNA; KZoNA: } }