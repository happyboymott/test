<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Captcha; abstract class AbstractCaptchaProvider { protected $param = array(); public function setParam($Tf8Ew, $v0Qpl) { $this->param[$Tf8Ew] = $v0Qpl; } public abstract function name(); public abstract function title(); public abstract function render(); public abstract function validate(); }