<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Admin\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Dao\ModelManageUtil; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Util\TreeUtil; use ModStart\Module\ModuleManager; use Module\Vendor\Admin\Widget\AdminWidgetLink; class WidgetLinkController extends Controller { public static $PermitMethodMap = array('*' => '*'); private function build($MyIra, $Vdoik) { if (empty($Vdoik)) { return null; } return array('title' => $MyIra, 'list' => array_filter(array_map(function ($LKQ89) { return $LKQ89 ? array('title' => $LKQ89[0], 'link' => $LKQ89[1]) : null; }, $Vdoik))); } public function select() { return view('modstart::admin.dialog.linkSelector', array('links' => AdminWidgetLink::get())); } }