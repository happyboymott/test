<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Web\Controller; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\InputPackage; use ModStart\Module\ModuleBaseController; use ModStart\Module\ModuleManager; use Module\Member\Support\MemberLoginCheck; use Module\Member\Util\MemberVipUtil; class MemberVipController extends ModuleBaseController { private $api; public function index() { goto rfZHX; XfYjE: $CKKqq = 'memberVip.index'; goto nqw3I; nqw3I: $QBv2Z = InputPackage::buildFromInput(); goto fsS3f; fsS3f: $G6r9f = $QBv2Z->getInteger('dialog'); goto IgI2v; IgI2v: if ($G6r9f) { $CKKqq = 'memberVip.indexDialog'; $this->shareDialogPageViewFrame(); } goto kFT_I; X5Y4A: $this->api = app(\Module\Member\Api\Controller\MemberVipController::class); goto XfYjE; kFT_I: return $this->view($CKKqq, array('memberVips' => MemberVipUtil::allVisible(), 'memberVipRights' => MemberVipUtil::rights())); goto JCrdt; rfZHX: BizException::throwsIf('缺少 PayCenter 模块', !modstart_module_enabled('PayCenter')); goto X5Y4A; JCrdt: } }