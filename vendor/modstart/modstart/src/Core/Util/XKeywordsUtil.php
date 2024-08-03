<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class XKeywordsUtil { public static function match($mfOIX, $FQQRK, &$TSYhk = null) { goto j1j52; UgATm: $ksIVB = explode('
', $ksIVB); goto MYeoZ; Djj8l: $ksIVB = str_replace(',', '
', $mfOIX); goto UgATm; Q_Wyj: return false; goto EFrRx; GR9xx: if (empty($mfOIX) || empty($FQQRK)) { return false; } goto Djj8l; MYeoZ: foreach ($ksIVB as $jZEPM) { goto dkg0x; dkg0x: $jZEPM = trim($jZEPM); goto x8OaH; x8OaH: if (empty($jZEPM)) { continue; } goto HQ3B2; HQ3B2: if (false !== strpos($FQQRK, $jZEPM)) { $TSYhk = $jZEPM; return true; } else { if (substr($jZEPM, 0, 1) === '@') { if (@preg_match('/' . substr($jZEPM, 1) . '/', $FQQRK)) { $TSYhk = $jZEPM; return true; } } else { if (false !== strpos($jZEPM, ' ')) { goto Dns3x; UfnFs: foreach (explode(' ', $jZEPM) as $QSYJT) { if (false === strpos($FQQRK, $QSYJT)) { $v9TEU = false; break; } } goto Z037R; Z037R: if ($v9TEU) { $TSYhk = $jZEPM; return true; } goto YTacb; Dns3x: $v9TEU = true; goto UfnFs; YTacb: } else { if (preg_match('/((\\*)(\\d+))[^\\d]/', $jZEPM, $jWWnc)) { goto RHzKo; hY0pk: $mmooG = '/' . preg_quote($wPLKM[0]) . '.{3,' . $jWWnc[3] * 3 . '}' . preg_quote($wPLKM[1]) . '/'; goto MNhM_; RHzKo: $wPLKM = explode($jWWnc[1], $jZEPM); goto hY0pk; MNhM_: if (@preg_match($mmooG, $FQQRK)) { $TSYhk = $jZEPM; return true; } goto I2w8U; I2w8U: } else { if (false !== strpos($jZEPM, '*')) { goto r7a59; r7a59: $wPLKM = explode('*', $jZEPM); goto U42WU; pBcHO: if (@preg_match($mmooG, $FQQRK)) { $TSYhk = $jZEPM; return true; } goto N2HWD; U42WU: $mmooG = '/' . preg_quote($wPLKM[0]) . '.+' . preg_quote($wPLKM[1]) . '/'; goto pBcHO; N2HWD: } } } } } goto at3HW; at3HW: } goto Q_Wyj; j1j52: $mfOIX = trim($mfOIX); goto GR9xx; EFrRx: } public static function descriptionHtml() { return '<pre class=\'ub-content-bg\'>' . self::description() . '</pre>'; } public static function description() { $LtSsh = '关键词匹配说明
· 简单包含匹配: "你好" 匹配 "你好"多条使用,分割
· 忽略顺序同时包含匹配: "你 好" 匹配 "你们好"、"你们好"、"很好你们"
· 顺序同时包含匹配: "你*好" 匹配 "你们好"、"你们很好"，*匹配一个或多个字
· 顺序限定同时包含匹配: "你*1好" 匹配 "你们好"，不能匹配"你们很好"，数字表示最长多少个汉字字符，1个汉字=3英文字母
· 正则表达式匹配："@正则表达式" 匹配 "正则表达式"，@开头表示正则表达式
使用说明
· 多个正则使用半角逗号(,)或换行分割'; return $LtSsh; } public static function test() { goto IXiJT; yyh3e: return join('
', $lVfuq); goto sqHKT; IXiJT: $h_y2V = array('你好', '你好', '你好', '你们好', '你 好', '你们好', '你*好', '你们好', '你*1好', '你们好', '你*1好', '你们很好', '你*2好', '你们很好', '@你们', '你们很好', '@你好', '你们很好'); goto Hbvjs; xW8XM: for ($rayXg = 0; $rayXg < count($h_y2V); $rayXg += 2) { $lVfuq[] = sprintf('%-10s%-20s%s', $h_y2V[$rayXg], $h_y2V[$rayXg + 1], SerializeUtil::jsonEncode(self::match($h_y2V[$rayXg], $h_y2V[$rayXg + 1]))); } goto yyh3e; Hbvjs: $lVfuq = array(); goto xW8XM; sqHKT: } }