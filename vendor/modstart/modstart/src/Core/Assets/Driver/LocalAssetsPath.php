<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Assets\Driver; use ModStart\Core\Assets\AssetsPath; use Illuminate\Support\Facades\Cache; class LocalAssetsPath implements AssetsPath { const CACHE_PREFIX = 'modstart:asset-file:'; public function getPathWithHash($itoQ0) { goto ppp6e; kjAMD: return $itoQ0; goto sZJ8r; rahsN: $xbaWD = false === strpos($itoQ0, '?') ? '?' : '&'; goto egkja; rFcAk: if ('&' == $xbaWD) { $iGt2U = substr($itoQ0, 0, strpos($itoQ0, '?')); } goto HOjw6; a33i3: Cache::put($l321R, '', 0); goto kjAMD; egkja: if (null !== $cqmdq) { return $itoQ0 . $xbaWD . $cqmdq; } goto gXwh9; gXwh9: $iGt2U = $itoQ0; goto rFcAk; ppp6e: $cqmdq = Cache::get($l321R = self::CACHE_PREFIX . $itoQ0, null); goto rahsN; HOjw6: if (file_exists($iGt2U)) { goto MrYzV; yMGJn: Cache::put($l321R, $cqmdq, 0); goto Gms7R; Gms7R: return $itoQ0 . $xbaWD . $cqmdq; goto qJXH_; MrYzV: $cqmdq = '' . crc32(md5_file($iGt2U)); goto yMGJn; qJXH_: } goto a33i3; sZJ8r: } public function getCDN($itoQ0) { return config('modstart.asset.cdn'); } }