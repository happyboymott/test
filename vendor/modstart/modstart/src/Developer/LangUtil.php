<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Developer; use ModStart\Core\Util\SerializeUtil; class LangUtil { public static function extractFileLangScripts($itoQ0) { goto xTLR9; CzvjZ: if (!file_exists($itoQ0)) { return ''; } goto tu5is; tu5is: $FQQRK = file_get_contents($itoQ0); goto NFy7t; NFy7t: preg_match_all('/L\\((([^()]*|\\([^()]*\\))*)\\)/', $FQQRK, $jWWnc); goto dBuBO; xTLR9: $itoQ0 = base_path($itoQ0); goto CzvjZ; dBuBO: if (!empty($jWWnc[1])) { goto om8u2; om8u2: $aWdfb = array(); goto B5m2O; B5m2O: foreach ($jWWnc[0] as $jZEPM) { if (preg_match('/^L\\([\'|"](.*?)[\'|"].*?\\)/', $jZEPM, $ClSwR)) { $aWdfb[$ClSwR[1]] = L($ClSwR[1]); } } goto zkD_B; iPXtU: return '
{!! \\ModStart\\Developer\\LangUtil::langScriptPrepare(' . SerializeUtil::jsonEncodePretty(array_keys($aWdfb)) . ') !!}'; goto iO1Jh; zkD_B: ksort($aWdfb); goto iPXtU; iO1Jh: } goto cvKQw; cvKQw: return ''; goto mxFLn; mxFLn: } public static function langScriptPrepare($aWdfb) { goto rwM2b; F5AiT: $WntLz[] = '  window.lang = window.lang||{};'; goto xKFCy; FuKAA: return join('
', $WntLz); goto tpWZ2; rwM2b: $WntLz = array(); goto YEj8D; YEj8D: $WntLz[] = '
(function(){'; goto F5AiT; xKFCy: foreach ($aWdfb as $JbpBN) { $WntLz[] = '  window.lang[' . SerializeUtil::jsonEncode($JbpBN) . ']=' . SerializeUtil::jsonEncode(L($JbpBN)) . ';'; } goto oSrEL; oSrEL: $WntLz[] = '})();'; goto FuKAA; tpWZ2: } }