<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Event; use ModStart\Core\Util\EventUtil; class AdminUserLoginFailedEvent { public $adminUserId; public $username; public $ip; public $ua; public static function fire($LsgNE, $CW4VH, $bzHwv, $kmpHw) { goto KBpa2; KBpa2: $Kl0Kj = new AdminUserLoginFailedEvent(); goto NE1C5; SpbQx: EventUtil::fire($Kl0Kj); goto Y11z0; uR4Lr: $Kl0Kj->username = $CW4VH; goto PkLQP; ebvuv: $Kl0Kj->ua = $kmpHw; goto SpbQx; NE1C5: $Kl0Kj->adminUserId = $LsgNE; goto uR4Lr; PkLQP: $Kl0Kj->ip = $bzHwv; goto ebvuv; Y11z0: } }