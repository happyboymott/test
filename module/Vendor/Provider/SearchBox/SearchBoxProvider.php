<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SearchBox; use Module\Vendor\Provider\ProviderTrait; class SearchBoxProvider { use ProviderTrait; public static function all() { goto zcShh; zcShh: $mvkYF = self::listAll(); goto iMz4a; REQjt: return $mvkYF; goto N3DIm; iMz4a: usort($mvkYF, function ($IwVos, $iEPdZ) { if ($IwVos->order() == $iEPdZ->order()) { return 0; } return $IwVos->order() > $iEPdZ->order() ? 1 : -1; }); goto REQjt; N3DIm: } public static function get($MXTsP) { return self::getByName($MXTsP); } public static function count() { return count(self::all()); } }