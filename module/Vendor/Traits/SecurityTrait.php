<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Traits; use Illuminate\Support\Facades\Session; use Illuminate\Support\Facades\View; use ModStart\Core\Input\Request; trait SecurityTrait { private function checkSecuritySecondVerify() { goto j3hWR; j3hWR: $T2jQR = modstart_config('Vendor_SecuritySecondVerifyPassword'); goto wz3jD; XvTNQ: if ($ZL1cJ < time()) { header('Location: ' . modstart_admin_url('security/second_verify', array('redirect' => Request::currentPageUrl(), '_is_tab' => View::shared('_isTabQuery')))); die; } goto TOgUU; wz3jD: if (!$T2jQR) { return; } goto nEjO_; nEjO_: $ZL1cJ = intval(Session::get('Vendor_SecuritySecondVerifyTime')); goto XvTNQ; TOgUU: Session::set('Vendor_SecuritySecondVerifyTime', time() + 3600); goto M0kaG; M0kaG: } }