<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto Kkf2o; Kkf2o: $sF2Mk = array(); goto E3fml; E3fml: if (class_exists(\Module\Member\Middleware\WebAuthMiddleware::class)) { $sF2Mk[] = \Module\Member\Middleware\WebAuthMiddleware::class; } goto OYL8Z; OYL8Z: $router->group(array('middleware' => $sF2Mk), function () use($router) { $router->match(array('get'), 'cinema', 'IndexController@index'); $router->match(array('get'), 'cinema/channel-{id}', 'CinemaController@channel'); $router->match(array('get'), 'cinema/list-{id}', 'CinemaController@lists'); $router->match(array('get'), 'cinema/search', 'CinemaController@search'); $router->match(array('get'), 'cinema/series-{id}', 'CinemaController@series'); $router->match(array('get'), 'cinema/series-{seriesId}/{showId}', 'CinemaController@show'); });