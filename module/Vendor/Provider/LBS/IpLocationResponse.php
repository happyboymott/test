<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\LBS; class IpLocationResponse { public static $keys = array('country', 'province', 'city', 'district', 'isp'); public static function fromArray($IE3H4) { goto HSCfH; X4uRC: return $W9vZV; goto soKgW; KXybN: foreach (self::$keys as $Tf8Ew) { $W9vZV->{$Tf8Ew} = isset($IE3H4[$Tf8Ew]) ? $IE3H4[$Tf8Ew] : null; } goto X4uRC; HSCfH: $W9vZV = new static(); goto KXybN; soKgW: } public $country; public $province; public $city; public $district; public $isp; }