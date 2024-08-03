<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Provider\MemberAdminShowPanel; use Illuminate\Support\Facades\View; abstract class AbstractMemberAdminShowPanelProvider { public abstract function name(); public abstract function title(); public function renderView() { return null; } public function render($hz6q9, $xXY5G = array()) { goto T0Kt5; RSi9Z: if (empty($CKKqq)) { return null; } goto Fr5YL; T0Kt5: $CKKqq = $this->renderView(); goto RSi9Z; Fr5YL: return View::make($CKKqq, array('memberUser' => $hz6q9, 'param' => $xXY5G))->render(); goto d5L_k; d5L_k: } }