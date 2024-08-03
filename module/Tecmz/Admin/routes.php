<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto PUZ2y; PUZ2y: $router->match(array('get', 'post'), 'tecmz/upgrade', 'UpgradeController@index'); goto mDPdz; mDPdz: $router->match(array('get', 'post'), 'tecmz/upgrade/manual', 'UpgradeController@manual'); goto jCv3Z; jCv3Z: $router->match(array('get', 'post'), 'tecmz/upgrade/info', 'UpgradeController@info');