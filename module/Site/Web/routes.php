<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto bkw3G; bkw3G: $sF2Mk = array(); goto vQfEe; vQfEe: if (class_exists(\Module\Member\Middleware\WebAuthMiddleware::class)) { $sF2Mk[] = \Module\Member\Middleware\WebAuthMiddleware::class; } goto P6fpl; P6fpl: $router->group(array('middleware' => $sF2Mk), function () use($router) { $router->match(array('get'), 'site/contact', 'SiteController@contact'); });