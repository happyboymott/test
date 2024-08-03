<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Provider\Auth; abstract class AbstractMemberAuthProvider { public abstract function name(); public abstract function title(); public function enabled() { return true; } public function onWebLogin($xXY5G = array()) { return null; } public function onWebLogout($xXY5G = array()) { return null; } }