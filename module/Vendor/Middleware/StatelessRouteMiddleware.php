<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Middleware; class StatelessRouteMiddleware { public function handle($Gr0TX, \Closure $VM3zl) { config()->set('session.driver', 'array'); return $VM3zl($Gr0TX); } }