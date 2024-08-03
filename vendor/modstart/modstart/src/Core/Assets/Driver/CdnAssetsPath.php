<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Assets\Driver; use ModStart\Core\Assets\AssetsPath; use Illuminate\Support\Facades\Cache; class CdnAssetsPath implements AssetsPath { const CACHE_PREFIX = 'modstart:asset-file:'; public function getPathWithHash($itoQ0) { goto pQHju; dS0X2: return $itoQ0; goto H349M; A6aEO: if (null !== $cqmdq) { return $itoQ0 . '?' . $cqmdq; } goto jARW3; jARW3: if (file_exists($itoQ0)) { goto ey0Vy; HO3ID: return $itoQ0 . '?' . $cqmdq; goto x2OT0; ey0Vy: $cqmdq = '' . crc32(md5_file($itoQ0)); goto NXxv5; NXxv5: Cache::put($l321R, $cqmdq, 0); goto HO3ID; x2OT0: } goto FmZBT; pQHju: $cqmdq = Cache::get($l321R = self::CACHE_PREFIX . $itoQ0, null); goto A6aEO; FmZBT: Cache::put($l321R, '', 0); goto dS0X2; H349M: } public function getCDN($itoQ0) { goto Yu6aF; Yu6aF: $YQyAH = config('modstart.asset.cdn_array', array('/')); goto tYEIj; tYEIj: $Jmagn = abs(crc32($itoQ0) % count($YQyAH)); goto pbRyu; pbRyu: return $YQyAH[$Jmagn]; goto ieZPl; ieZPl: } }