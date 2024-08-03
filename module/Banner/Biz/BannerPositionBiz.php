<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Biz; use Module\Vendor\Provider\BizTrait; class BannerPositionBiz { use BizTrait; public static function registerQuick($MXTsP, $A8WB0, $jqXlD = null) { self::register(QuickBannerPositionBiz::make($MXTsP, $A8WB0, $jqXlD)); } public static function all() { return self::listAll(); } public static function get($MXTsP) { return self::getByName($MXTsP); } }