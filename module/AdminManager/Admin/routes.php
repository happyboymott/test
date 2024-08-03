<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto soAMK; soAMK: $router->match(array('get', 'post'), 'upgrade', 'UpgradeController@index'); goto qPeXS; qPeXS: $router->match(array('get', 'post'), 'upgrade/info', 'UpgradeController@info'); goto cc_1U; cc_1U: $router->match(array('get', 'post'), 'upgrade/auth', 'UpgradeController@auth');