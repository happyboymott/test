<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto JLy0x; dnRkb: $router->match(array('post'), 'module_store/uninstall', 'ModuleStoreController@uninstall'); goto dDVO_; dDVO_: $router->match(array('post'), 'module_store/enable', 'ModuleStoreController@enable'); goto oiocp; D1DGp: $router->match(array('post'), 'module_store/install', 'ModuleStoreController@install'); goto dnRkb; JLy0x: $router->match(array('get', 'post'), 'module_store', 'ModuleStoreController@index'); goto GTSZ5; oiocp: $router->match(array('post'), 'module_store/disable', 'ModuleStoreController@disable'); goto tppAR; GTSZ5: $router->match(array('post'), 'module_store/all', 'ModuleStoreController@all'); goto D1DGp; tppAR: $router->match(array('post'), 'module_store/upgrade', 'ModuleStoreController@upgrade'); goto CczBv; CczBv: $router->match(array('get', 'post'), 'module_store/config/{module}', 'ModuleStoreController@config');