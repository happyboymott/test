<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Nav\Type; use ModStart\Core\Type\BaseType; use ModStart\Module\ModuleManager; use Module\Nav\Biz\NavPositionBiz; class NavPosition implements BaseType { public static function getList() { return array_merge(ModuleManager::getModuleConfigKeyValueItems('Nav', 'position'), NavPositionBiz::allMap()); } public static function first() { goto h66HD; TCHxK: $ohzJX = array_keys($uZ7AE); goto TXT01; TXT01: return array_shift($ohzJX); goto dp2I0; h66HD: $uZ7AE = self::getList(); goto TCHxK; dp2I0: } }