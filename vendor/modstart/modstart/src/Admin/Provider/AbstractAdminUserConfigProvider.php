<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Provider; abstract class AbstractAdminUserConfigProvider { public abstract function name(); public abstract function title(); public abstract function renderForm($jZEPM, $b4Sjf = array()); public abstract function renderDetail($jZEPM, $b4Sjf = array()); public function renderGrid($jZEPM, $b4Sjf = array()) { return $this->renderDetail($jZEPM, $b4Sjf); } public abstract function saved($jZEPM, $b4Sjf = array()); public abstract function deleted($jZEPM, $b4Sjf = array()); }