<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Module\Banner\Type\BannerType; use Module\Banner\Util\BannerUtil; class MBanner { public static function all($BNQpK = 'home') { return BannerUtil::listByPositionWithCache($BNQpK); } public static function allImage($BNQpK) { $mvkYF = self::all($BNQpK); return array_values(array_filter($mvkYF, function ($LKQ89) { return in_array($LKQ89['type'], array(BannerType::IMAGE, BannerType::IMAGE_TITLE_SLOGAN_LINK)); })); } }