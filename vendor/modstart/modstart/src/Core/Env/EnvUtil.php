<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Env; class EnvUtil { public static function parse($itoQ0) { goto Zuhaf; Zuhaf: $b1M6Y = array(); goto ZyiaW; ZyiaW: if (file_exists($itoQ0)) { foreach (explode('
', file_get_contents($itoQ0)) as $T98R7) { if ($T98R7 = trim($T98R7)) { goto cNWTm; xwmQk: $repda = trim(join('=', $OxU4_)); goto FiN1W; GF0_C: $OxU4_ = explode('=', $T98R7); goto j_g7s; yxFVH: array_shift($OxU4_); goto xwmQk; j_g7s: $QSYJT = trim($OxU4_[0]); goto yxFVH; FiN1W: switch (strtolower($repda)) { case 'true': case '(true)': $repda = true; break; case 'false': case '(false)': $repda = false; break; case 'empty': case '(empty)': $repda = ''; break; case 'null': case '(null)': $repda = null; break; } goto apBC5; cNWTm: if (substr($T98R7, 0, 1) === '#') { continue; } goto GF0_C; apBC5: $b1M6Y[$QSYJT] = $repda; goto n9mE1; n9mE1: } } } goto CTzbD; CTzbD: return $b1M6Y; goto YmD7j; YmD7j: } public static function all($itoQ0 = null) { goto kL0XY; LbpbZ: if (null === $itoQ0) { $itoQ0 = base_path('.env'); } goto sfSv2; tDknN: if (!empty($DLz1e)) { return $DLz1e; } goto LbpbZ; sfSv2: return self::parse($itoQ0); goto v_8r1; kL0XY: global $DLz1e; goto tDknN; v_8r1: } }