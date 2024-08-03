<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Events; class MemberUserPasswordResetedEvent { public $memberUserId; public $newPassword; public function __construct($mdCxN, $D9YnJ) { $this->memberUserId = $mdCxN; $this->newPassword = $D9YnJ; } }