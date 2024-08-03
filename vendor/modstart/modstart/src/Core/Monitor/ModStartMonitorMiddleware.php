<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Monitor; use Illuminate\Http\Request; use Illuminate\Support\Facades\Log; use ModStart\Core\Util\SerializeUtil; class ModStartMonitorMiddleware { public function handle(Request $JVJK3, \Closure $nHV4K) { goto xbmcJ; q7dCn: return $xTeX8; goto tLDye; xbmcJ: $xTeX8 = $nHV4K($JVJK3); goto U8MbR; U8MbR: if (defined('LARAVEL_START')) { goto ktZNh; TB_uI: if ($ZKdZL > 1000) { $b4Sjf = SerializeUtil::jsonEncode($wHgVU); Log::warning("LONG_REQUEST {$pqQwP} [{$a963s}] {$ZKdZL}ms {$b4Sjf}"); } goto szP8a; lGEsa: $wHgVU = $JVJK3->input(); goto jUzno; RdzfZ: $pqQwP = $JVJK3->method(); goto TB_uI; UpBHQ: if ($UIZkL > 10) { $b4Sjf = SerializeUtil::jsonEncode($wHgVU); Log::warning("MASS_REQUEST_SQL {$UIZkL} {$pqQwP} [{$a963s}] {$b4Sjf} -> " . SerializeUtil::jsonEncode(DatabaseMonitor::getQueryCountPerRequestSqls())); } goto hv8LT; ktZNh: $ZKdZL = round((microtime(true) - LARAVEL_START) * 1000, 2); goto lGEsa; szP8a: $UIZkL = DatabaseMonitor::getQueryCountPerRequest(); goto UpBHQ; jUzno: $a963s = $JVJK3->url(); goto RdzfZ; hv8LT: } goto q7dCn; tLDye: } }