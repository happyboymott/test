<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Cinema\AssetAccess\Type; use ModStart\Core\Type\BaseType; class VipStatus implements BaseType { const ENABLE = 1; const DISABLE = 2; public static function getList() { return array(self::ENABLE => '启用', self::DISABLE => '禁用'); } }