<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Events; use ModStart\Core\Util\EventUtil; class MemberUserLoginAttemptEvent { public $memberUserId; public $ip; public $ua; public static function fire($mdCxN, $bchpy, $Wky5F) { goto lTPCJ; AQNDj: $AEQ3_->ip = $bchpy; goto APtwo; A9wNS: EventUtil::fire($AEQ3_); goto FMxdc; lTPCJ: $AEQ3_ = new MemberUserLoginAttemptEvent(); goto DRm55; DRm55: $AEQ3_->memberUserId = $mdCxN; goto AQNDj; APtwo: $AEQ3_->ua = $Wky5F; goto A9wNS; FMxdc: } }