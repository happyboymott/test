<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use Illuminate\Support\Facades\Event; class EventUtil { public static function fire($Kl0Kj) { if (PHP_VERSION_ID >= 80000) { Event::dispatch($Kl0Kj); } else { Event::fire($Kl0Kj); } } }