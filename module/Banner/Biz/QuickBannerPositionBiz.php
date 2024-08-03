<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Biz; class QuickBannerPositionBiz extends AbstractBannerPositionBiz { protected $name; protected $title; protected $remark; public static function make($MXTsP, $A8WB0, $jqXlD = null) { goto BdXDU; wdaSg: $CL4lD->title = $A8WB0; goto Y0yau; JSueD: $CL4lD->name = $MXTsP; goto wdaSg; Y0yau: $CL4lD->remark = $jqXlD; goto rvlOZ; rvlOZ: return $CL4lD; goto kjgAH; BdXDU: $CL4lD = new static(); goto JSueD; kjgAH: } public function name() { return $this->name; } public function title() { return $this->title; } public function remark() { return $this->remark; } }