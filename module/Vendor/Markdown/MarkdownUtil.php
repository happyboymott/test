<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Markdown; use Illuminate\Support\Str; class MarkdownUtil { public static function convertToHtml($dbat0) { goto wlI7Z; DKBMe: $Eu6lH = new MarkConverter(array('renderer' => array('soft_break' => '<br />'))); goto ON0X1; wlI7Z: if (PHP_VERSION_ID >= 80000) { return Str::of($dbat0)->markdown(); } goto DKBMe; ON0X1: return $Eu6lH->convertToHtml($dbat0); goto a29qc; a29qc: } }