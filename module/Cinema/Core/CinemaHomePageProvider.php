<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Cinema\Core; use Module\Vendor\Provider\HomePage\AbstractHomePageProvider; class CinemaHomePageProvider extends AbstractHomePageProvider { const ACTION = '\\Module\\Cinema\\Web\\Controller\\IndexController@index'; public function title() { return '在线影视'; } public function action() { return self::ACTION; } }