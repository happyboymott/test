<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Event; use ModStart\Core\Util\EventUtil; class AdminUserLoginAttemptEvent { public $adminUserId; public $ip; public $ua; public static function fire($LsgNE, $bzHwv, $kmpHw) { goto bX7iN; bX7iN: $Kl0Kj = new AdminUserLoginAttemptEvent(); goto LGnMP; b06u5: $Kl0Kj->ua = $kmpHw; goto bFeot; DEOaM: $Kl0Kj->ip = $bzHwv; goto b06u5; LGnMP: $Kl0Kj->adminUserId = $LsgNE; goto DEOaM; bFeot: EventUtil::fire($Kl0Kj); goto uTUD9; uTUD9: } }