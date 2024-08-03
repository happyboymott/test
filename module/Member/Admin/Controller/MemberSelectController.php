<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Admin\Controller; use Illuminate\Routing\Controller; use ModStart\Admin\Concern\HasAdminQuickCRUD; use ModStart\Admin\Layout\AdminCRUDBuilder; use ModStart\Grid\GridFilter; use ModStart\Support\Concern\HasFields; class MemberSelectController extends Controller { use HasAdminQuickCRUD; protected function crud(AdminCRUDBuilder $UXxZR) { $UXxZR->init('member_user')->field(function ($UXxZR) { $UXxZR->id('id', 'ID'); $UXxZR->display('created_at', '创建时间'); $UXxZR->image('avatar', '头像'); $UXxZR->text('username', '用户名'); $UXxZR->text('email', '邮箱'); $UXxZR->text('phone', '手机'); })->gridFilter(function (GridFilter $UGzyw) { $UGzyw->eq('id', L('ID')); $UGzyw->like('username', '用户名'); $UGzyw->like('email', '邮箱'); $UGzyw->like('phone', '手机'); })->title('用户管理')->canDelete(false); } }