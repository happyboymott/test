<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Cinema\Type; use ModStart\Core\Type\BaseType; class CinemaShowVideoType implements BaseType { const LOCAL = 1; const CLOUD = 2; public static function getList() { return array(self::LOCAL => '本地', self::CLOUD => '云端'); } }