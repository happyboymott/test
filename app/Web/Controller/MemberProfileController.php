<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace App\Web\Controller; use ModStart\App\Web\Layout\WebConfigBuilder; use ModStart\Form\Form; use Module\Member\Auth\MemberUser; use Module\Member\Support\MemberLoginCheck; use Module\Member\Type\Gender; use Module\Member\Web\Controller\MemberFrameController; class MemberProfileController extends MemberFrameController implements MemberLoginCheck { private $api; public function __construct() { parent::__construct(); $this->api = app(\App\Api\Controller\MemberProfileController::class); } public function index(WebConfigBuilder $XdDSP) { goto Vrx7r; i67Yu: $XdDSP->text('nickname', '昵称'); goto I6Gc7; hIVpO: $XdDSP->textarea('signature', '签名'); goto JZXkZ; dSzq7: $XdDSP->text('username', '用户名')->readonly(true); goto i67Yu; MOTKc: $XdDSP->page()->view($this->viewMemberFrame); goto dSzq7; I6Gc7: $XdDSP->radio('gender', '性别')->optionType(Gender::class); goto hIVpO; Vrx7r: $XdDSP->pageTitle('基本资料'); goto MOTKc; JZXkZ: return $XdDSP->perform(MemberUser::user(), function (Form $QPPW7) { return $this->api->basic($QPPW7->dataForming()); }); goto JP7VC; JP7VC: } }