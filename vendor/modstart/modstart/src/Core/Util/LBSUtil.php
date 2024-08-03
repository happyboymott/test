<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class LBSUtil { public static function distance($F5HXe, $Zrltp, $WpGwN, $rIzGU) { goto CjC6k; B_927: $xjztP = abs($dFBnH - $S38fk); goto ftaX7; FAP7T: $mqHtY = deg2rad($Zrltp); goto dyXsE; dyXsE: $pGEKO = deg2rad($rIzGU); goto j7cpU; BxZg0: return intval($ZEaoX * 2 * asin(sqrt($SqKlT)) + 0.5); goto l21zk; CjC6k: $ZEaoX = 6378137; goto PLT9j; j7cpU: $Er6Xo = abs($mqHtY - $pGEKO); goto B_927; PLT9j: $dFBnH = deg2rad($F5HXe); goto XY934; XY934: $S38fk = deg2rad($WpGwN); goto FAP7T; ftaX7: $SqKlT = pow(sin($Er6Xo / 2), 2) + cos($mqHtY) * cos($pGEKO) * pow(sin($xjztP / 2), 2); goto BxZg0; l21zk: } public static function formatDistance($bo68I) { if ($bo68I > 1000) { return round($bo68I / 1000.0, 1) . 'KM'; } else { return intval($bo68I) . 'M'; } } public static function locationByIP($bzHwv, $bxpsJ = null) { return null; } }