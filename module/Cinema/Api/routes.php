<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto WuPj3; WuPj3: $sF2Mk = array(); goto riA5B; riA5B: if (class_exists(\Module\Member\Middleware\ApiAuthMiddleware::class)) { $sF2Mk[] = \Module\Member\Middleware\ApiAuthMiddleware::class; } goto wXdz6; wXdz6: $router->group(array('middleware' => $sF2Mk), function () use($router) { $router->match(array('post'), 'cinema/channel_latest', 'CinemaController@channelLatest'); $router->match(array('post'), 'cinema/paginate', 'CinemaController@paginate'); $router->match(array('post'), 'cinema/channels', 'CinemaController@channels'); $router->match(array('post'), 'cinema/show', 'CinemaController@show'); $router->match(array('post'), 'cinema/show_credit_buy', 'CinemaController@showCreditBuy'); });