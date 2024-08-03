<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Events; use ModStart\Core\Util\EventUtil; class MemberUserLoginFailedEvent { public $memberUserId; public $username; public $ip; public $ua; public static function fire($mdCxN, $WzBL8, $bchpy, $Wky5F) { goto zP2F0; up7P2: EventUtil::fire($AEQ3_); goto Maq2y; mLLds: $AEQ3_->ip = $bchpy; goto c8Z4o; yjjbI: $AEQ3_->username = $WzBL8; goto mLLds; zP2F0: $AEQ3_ = new MemberUserLoginFailedEvent(); goto x64m3; c8Z4o: $AEQ3_->ua = $Wky5F; goto up7P2; x64m3: $AEQ3_->memberUserId = $mdCxN; goto yjjbI; Maq2y: } }