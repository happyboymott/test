<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto I58gt; NKe51: $router->match(array('get'), 'banner/show', 'BannerController@show'); goto rudAs; S2g7F: $router->match(array('get', 'post'), 'banner/add', 'BannerController@add'); goto MLUYD; MLUYD: $router->match(array('get', 'post'), 'banner/edit', 'BannerController@edit'); goto Wlxu3; Wlxu3: $router->match(array('post'), 'banner/delete', 'BannerController@delete'); goto NKe51; I58gt: $router->match(array('get', 'post'), 'banner', 'BannerController@index'); goto S2g7F; rudAs: $router->match(array('post'), 'banner/sort', 'BannerController@sort');