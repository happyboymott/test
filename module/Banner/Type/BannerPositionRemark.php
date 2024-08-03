<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Type; use Module\Banner\Biz\BannerPositionBiz; class BannerPositionRemark extends BannerPosition { public static function getList() { goto flOdF; flOdF: $SbXv2 = parent::getList(); goto r8po2; r8po2: foreach ($SbXv2 as $PPiLF => $SNE7X) { $strQF = BannerPositionBiz::get($PPiLF); if ($strQF && $strQF->remark()) { $SbXv2[$PPiLF] = $SNE7X . '(' . $strQF->remark() . ')'; } } goto JbE2n; JbE2n: return $SbXv2; goto gOc5o; gOc5o: } }