<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Sms; abstract class AbstractSmsSender { protected abstract function sendExecute($jYinK, $dWTBG, $AiU0S, $xXY5G = array()); public function send($jYinK, $dWTBG, $AiU0S, $xXY5G = array()) { return $this->sendExecute($jYinK, $dWTBG, $AiU0S, $xXY5G); } }