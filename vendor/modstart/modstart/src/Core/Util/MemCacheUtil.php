<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class MemCacheUtil { private static $pool = array(); public static function remember($QmpAx, $HqZca, $AzFg2 = 10) { goto Umos0; f0Cht: self::put($QmpAx, $R7kqa, $AzFg2); goto pNbeC; PIFo2: $R7kqa = $HqZca(); goto f0Cht; pNbeC: return $R7kqa; goto Xgqe0; Umos0: if (array_key_exists($QmpAx, self::$pool)) { $repda = self::$pool[$QmpAx]; if ($repda[0] === 0 || $repda[0] < time()) { return $repda[1]; } } goto PIFo2; Xgqe0: } public static function get($QmpAx) { if (array_key_exists($QmpAx, self::$pool)) { $repda = self::$pool[$QmpAx]; if ($repda[0] === 0 || $repda[0] < time()) { return $repda[1]; } } return null; } public static function put($QmpAx, $R7kqa, $AzFg2 = 0) { self::$pool[$QmpAx] = array($AzFg2 > 0 ? time() + $AzFg2 : 0, $R7kqa); } public static function forget($QmpAx) { if (array_key_exists($QmpAx, self::$pool)) { unset(self::$pool[$QmpAx]); } } }