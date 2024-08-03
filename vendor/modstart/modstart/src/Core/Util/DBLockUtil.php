<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use NinjaMutex\Lock\MySqlLock; use NinjaMutex\MutexFabric; class DBLockUtil { static $instance = null; private static function instance() { if (null === self::$instance) { goto QOFor; QOFor: $deUMH = new MySqlLock(config('env.DB_USERNAME'), config('env.DB_PASSWORD'), config('env.DB_HOST')); goto d7kob; qk2yK: self::$instance = $ge3kq; goto m2pfn; d7kob: $ge3kq = new MutexFabric('mysql', $deUMH); goto qk2yK; m2pfn: } return self::$instance; } public static function acquire($KtHB2, $Ci5Ls = null) { if (self::instance()->get($KtHB2)->acquireLock($Ci5Ls)) { return true; } return false; } public static function release($KtHB2) { self::instance()->get($KtHB2)->releaseLock(); } }