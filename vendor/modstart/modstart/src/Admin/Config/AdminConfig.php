<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Config; class AdminConfig { private static $config = null; private static function init() { goto vtwik; vtwik: self::$config = array(); goto vVJWt; vVJWt: self::$config['demoId'] = config('env.ADMIN_DEMO_USER_ID', 0); goto uWX8H; uWX8H: self::$config['founderId'] = config('env.ADMIN_FOUNDER_ID', 1); goto rwsmA; rwsmA: } public static function set($QmpAx, $R7kqa) { if (null === self::$config) { self::init(); } self::$config[$QmpAx] = $R7kqa; } public static function get($QmpAx = null, $M1u7C = null) { goto qMkim; dGZ8D: return $M1u7C; goto HQDTQ; ekNCB: if (isset(self::$config[$QmpAx])) { return self::$config[$QmpAx]; } goto dGZ8D; qMkim: if (null === self::$config) { self::init(); } goto PIUNV; PIUNV: if (null === $QmpAx) { return self::$config; } goto ekNCB; HQDTQ: } }