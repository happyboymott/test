<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Schedule; use ModStart\Core\Util\PlatformUtil; use ModStart\Core\Util\ShellUtil; use Module\Vendor\Provider\Schedule\AbstractScheduleBiz; class TempFileCleanScheduleBiz extends AbstractScheduleBiz { public function cron() { return $this->cronEveryHour(); } public function title() { return 'temp文件自动清理'; } public function run() { goto WSUML; oHET6: if (!empty($AFDKH)) { ShellUtil::run($AFDKH); } goto T9rZH; WSUML: $X5VXe = public_path('temp'); goto Cow8x; Cow8x: if (PlatformUtil::isWindows()) { } else { $AFDKH = 'find "' . $X5VXe . '" -mtime +7 -maxdepth 1 -exec rm -rfv {} \\;'; } goto oHET6; T9rZH: } }