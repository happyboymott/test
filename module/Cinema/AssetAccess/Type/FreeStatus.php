<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Cinema\AssetAccess\Type; use ModStart\Core\Type\BaseType; class FreeStatus implements BaseType { const FREE = 1; const FEE = 2; public static function getList() { return array(self::FREE => '免费', self::FEE => '收费'); } }