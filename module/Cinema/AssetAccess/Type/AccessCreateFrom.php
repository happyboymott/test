<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Cinema\AssetAccess\Type; use ModStart\Core\Type\BaseType; class AccessCreateFrom implements BaseType { const CREATE_FROM_VIP = 1; const CREATE_FROM_CREDIT = 2; public static function getList() { return array(self::CREATE_FROM_VIP => 'VIP', self::CREATE_FROM_CREDIT => '积分'); } }