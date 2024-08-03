<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Nav\Type; use ModStart\Core\Type\BaseType; class NavOpenType implements BaseType { const CURRENT_WINDOW = 1; const NEW_BLANK = 2; public static function getList() { return array(self::CURRENT_WINDOW => '当前窗口', self::NEW_BLANK => '新窗口'); } public static function getBlankAttributeFromValue($S_CEz) { goto bqtxG; LHKXv: if (is_array($S_CEz)) { $S_CEz = isset($S_CEz['openType']) ? $S_CEz['openType'] : null; } goto h0hUR; bqtxG: if (empty($S_CEz)) { return ''; } goto LHKXv; h0hUR: switch ($S_CEz) { case self::NEW_BLANK: return 'target="_blank"'; } goto u15bA; u15bA: return ''; goto NUisy; NUisy: } }