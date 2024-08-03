<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Site\Web\Controller; use ModStart\Core\Input\InputPackage; use ModStart\Module\ModuleBaseController; class SiteController extends ModuleBaseController { public function contact() { goto vglFe; UCqVQ: if ($G6r9f) { $CKKqq = 'site.contactDialog'; $this->shareDialogPageViewFrame(); } goto dU_q5; dU_q5: return $this->view($CKKqq); goto gb0tk; vglFe: $QBv2Z = InputPackage::buildFromInput(); goto gljdz; gljdz: $G6r9f = $QBv2Z->getBoolean('dialog'); goto Sg19I; Sg19I: $CKKqq = 'site.contact'; goto UCqVQ; gb0tk: } }