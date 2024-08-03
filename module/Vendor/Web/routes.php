<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto Dktat; YY11z: $router->match(array('get', 'post'), 'install/lock', 'InstallController@lock'); goto EASnS; Dktat: $router->match(array('get', 'post'), 'install/ping', 'InstallController@ping'); goto tafeZ; ahvTG: $router->match(array('get'), 'placeholder/{width}x{height}', '\\Module\\Vendor\\Web\\Controller\\PlaceholderController@index'); goto bZnZl; dNBoc: $router->match(array('get', 'post'), 'install/execute', 'InstallController@execute'); goto YY11z; EASnS: $router->match(array('get'), 'captcha/image', 'CaptchaController@image'); goto ahvTG; tafeZ: $router->match(array('get', 'post'), 'install/prepare', 'InstallController@prepare'); goto dNBoc; bZnZl: $router->group(array('middleware' => array(\Module\Vendor\Middleware\NoneLoginOperateAuthMiddleware::class)), function () use($router) { $router->match(array('get', 'post'), 'content_verify/{name}', 'ContentVerifyController@index'); });