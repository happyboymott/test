<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Event; use ModStart\Core\Util\EventUtil; class AdminUserLoginedEvent { public $adminUserId; public $ip; public $ua; public static function fire($LsgNE, $bzHwv, $kmpHw) { goto H0Wos; sFgQq: $Kl0Kj->ip = $bzHwv; goto A0cfo; A0cfo: $Kl0Kj->ua = $kmpHw; goto kcrWT; N0o0Z: $Kl0Kj->adminUserId = $LsgNE; goto sFgQq; H0Wos: $Kl0Kj = new AdminUserLoginedEvent(); goto N0o0Z; kcrWT: EventUtil::fire($Kl0Kj); goto vwPoR; vwPoR: } }