<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class VersionUtil { public static function match($kuZf5, $OEv_2) { goto xK9e8; ao12M: $NOZL8 = array('>=', '<=', '==', '>', '<'); goto xrGDe; yS_ED: return version_compare($kuZf5, $OEv_2, $djja6); goto couj2; xK9e8: if ('*' == $OEv_2) { return true; } goto ao12M; xz_92: foreach ($NOZL8 as $jZEPM) { if (starts_with($OEv_2, $jZEPM)) { goto nZBZN; e5B47: $OEv_2 = substr($OEv_2, strlen($jZEPM)); goto RC7hl; RC7hl: break; goto KlEFQ; nZBZN: $djja6 = $jZEPM; goto e5B47; KlEFQ: } } goto yS_ED; xrGDe: $djja6 = '=='; goto xz_92; couj2: } public static function parse($uiVbm) { goto p7kR8; GOxq9: return array($OxU4_[0], $OxU4_[1]); goto q6yhF; kQFu_: if (count($OxU4_) == 1) { return array($OxU4_[0], '*'); } goto GOxq9; p7kR8: $OxU4_ = explode(':', $uiVbm); goto kQFu_; q6yhF: } public static function isVersion($jC1py) { return preg_match('/^\\d+\\.\\d+\\.\\d+$/i', $jC1py) || preg_match('/^\\d+\\.\\d+\\.\\d+\\-(alpha|beta|release)$/i', $jC1py) || preg_match('/^\\d+\\.\\d+\\.\\d+\\-(alpha|beta|release)\\-\\d+$/i', $jC1py); } }