<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Util; use Illuminate\Support\Facades\Session; class MobileUtil { public static function putEntryData($Tf8Ew, $v0Qpl) { goto Jg7x1; BKP_j: Session::put('Mobile_EntryData', $IE3H4); goto Dhze6; nZEaf: if (empty($IE3H4)) { $IE3H4 = array(); } goto HC5RO; HC5RO: $IE3H4[$Tf8Ew] = $v0Qpl; goto BKP_j; Jg7x1: $IE3H4 = Session::get('Mobile_EntryData', array()); goto nZEaf; Dhze6: } public static function getEntryData() { goto n5z1p; C712Y: if (empty($IE3H4)) { $IE3H4 = new \stdClass(); } goto hXFZF; hXFZF: return $IE3H4; goto Apbzf; n5z1p: $IE3H4 = Session::get('Mobile_EntryData', array()); goto C712Y; Apbzf: } }