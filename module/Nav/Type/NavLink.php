<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Nav\Type; class NavLink { public static function generate($RQr4i, $xXY5G = array()) { goto b5NGy; cmH13: return $RQr4i; goto S7Vb4; b5NGy: if (empty($RQr4i)) { return ''; } goto tHCso; tHCso: if (is_array($RQr4i)) { $RQr4i = isset($RQr4i['link']) ? $RQr4i['link'] : null; } goto RrW9b; RrW9b: if (!empty($xXY5G)) { $ohzJX = array_map(function ($LKQ89) { return '{' . $LKQ89 . '}'; }, array_keys($xXY5G)); $RQr4i = str_replace($ohzJX, array_values($xXY5G), $RQr4i); } goto cmH13; S7Vb4: } }