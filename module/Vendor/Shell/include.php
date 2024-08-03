<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto VB0lW; q2hwf: function shell_echo_error($wqka4) { echo "[31m>>>>> ERROR : {$wqka4} [0m\n"; } goto A9jJi; A9jJi: function shell_echo_success($wqka4) { echo "[32m>>>>> INFO  : {$wqka4} [0m\n"; } goto aMFw5; dtpB7: include __DIR__ . '/../../../vendor/modstart/modstart/src/Core/Util/ReUtil.php'; goto hFBIQ; hFBIQ: function shell_module_base() { return realpath(__DIR__ . '/../..'); } goto XOQEV; JfoRZ: function shell_echo_block($wqka4) { goto Xs8YY; sXAJy: echo ' ' . str_repeat('-', 80) . '
'; goto A6YUm; gSaEL: echo ' ' . str_repeat('-', 80) . '
'; goto EOFUy; EOFUy: echo '[0m'; goto yHVAP; Xs8YY: echo '
[33m'; goto sXAJy; A6YUm: echo sprintf('| %-79s|', $wqka4) . '
'; goto gSaEL; yHVAP: } goto q2hwf; Fxte1: function shell_throws_if($wqka4, $nQIPI) { if ($nQIPI) { shell_echo_error($wqka4); die(-1); } } goto moQpa; XOQEV: function shell_module_path($dM_vx, $uQwcb) { return join('/', array(rtrim(shell_module_base(), '/'), $dM_vx, $uQwcb)); } goto aTT7c; aTT7c: function shell_ensure_dir($I9H3b) { if (!file_exists($I9H3b)) { mkdir($I9H3b, 493, true); } } goto JfoRZ; moQpa: function shell_command_check($AFDKH) { @exec($AFDKH, $qYcXN, $W9vZV); return $W9vZV === 0; } goto Q3ro_; VB0lW: include __DIR__ . '/../../../vendor/modstart/modstart/src/Core/Util/PlatformUtil.php'; goto dtpB7; aMFw5: function shell_echo_info($wqka4) { echo "[36m>>>>> INFO  : {$wqka4} [0m\n"; } goto Fxte1; Q3ro_: function shell_file_write($Mb9Qf, $ZtuBh) { goto ndkRm; ndkRm: $I9H3b = dirname($Mb9Qf); goto HIHLC; HIHLC: if (!file_exists($I9H3b)) { mkdir($I9H3b, 493, true); } goto W0JQ1; W0JQ1: file_put_contents($Mb9Qf, $ZtuBh); goto akNvv; akNvv: }