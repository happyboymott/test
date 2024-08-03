<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Event; use ModStart\Core\Util\EventUtil; class AdminUserLogoutEvent { public $adminUserId; public $ip; public $ua; public static function fire($LsgNE, $bzHwv, $kmpHw) { goto q5iF0; CmYtS: $Kl0Kj->ip = $bzHwv; goto zfhzQ; JadBr: EventUtil::fire($Kl0Kj); goto shyIx; EOmGa: $Kl0Kj->adminUserId = $LsgNE; goto CmYtS; q5iF0: $Kl0Kj = new AdminUserLogoutEvent(); goto EOmGa; zfhzQ: $Kl0Kj->ua = $kmpHw; goto JadBr; shyIx: } }