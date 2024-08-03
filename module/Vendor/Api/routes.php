<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ $router->group(array('middleware' => array(\Module\Member\Middleware\ApiAuthMiddleware::class)), function () use($router) { $router->match(array('post'), 'captcha/image', 'CaptchaController@image'); });