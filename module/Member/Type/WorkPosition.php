<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Type; use ModStart\Core\Type\BaseType; class WorkPosition implements BaseType { public static function getList() { goto Tg1Wr; Tg1Wr: static $SbXv2 = null; goto zXBqi; zXBqi: if (null === $SbXv2) { $SbXv2 = array(); foreach (array('普通职工', '中层管理者', '高层管理者', '企业主') as $LKQ89) { $SbXv2[$LKQ89] = $LKQ89; } } goto LpP4b; LpP4b: return $SbXv2; goto I_Zws; I_Zws: } }