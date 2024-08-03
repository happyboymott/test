<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Cinema\Core; use Module\Nav\Biz\AbstractNavPositionBiz; class CinemaHomeLeftNavPositionBiz extends AbstractNavPositionBiz { const NAME = 'cinemaHomeLeft'; public function name() { return self::NAME; } public function title() { return '在线影视_侧边'; } }