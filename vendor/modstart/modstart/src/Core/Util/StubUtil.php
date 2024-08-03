<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class StubUtil { public static function render($itoQ0, $sZufA = array(), $u3NFq = null) { goto DF1E4; M1deL: $sZufA = array_build($sZufA, function ($QSYJT, $repda) { return array('${' . $QSYJT . '}', $repda); }); goto mRj4g; DF1E4: if (null === $u3NFq) { $u3NFq = base_path('vendor/modstart/modstart/resources/stub'); } goto jNCdw; mRj4g: return str_replace(array_keys($sZufA), array_values($sZufA), $FQQRK); goto lFsui; jNCdw: $FQQRK = file_get_contents("{$u3NFq}/{$itoQ0}.stub"); goto M1deL; lFsui: } }