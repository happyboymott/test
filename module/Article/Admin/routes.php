<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto rcXw6; RnAJf: $router->match(array('get', 'post'), 'article/add', 'ArticleController@add'); goto zbwTa; tHKw9: $router->match(array('post'), 'article/delete', 'ArticleController@delete'); goto ZK8EL; zbwTa: $router->match(array('get', 'post'), 'article/edit', 'ArticleController@edit'); goto tHKw9; rcXw6: $router->match(array('get', 'post'), 'article', 'ArticleController@index'); goto RnAJf; ZK8EL: $router->match(array('get'), 'article/show', 'ArticleController@show');