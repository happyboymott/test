<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SiteTemplate; class QuickSiteTemplateProvider extends AbstractSiteTemplateProvider { private $name; private $title; private $root; public static function make($MXTsP, $A8WB0, $ZcYui = null) { goto nE_bE; nE_bE: $x45CN = new static(); goto oxHUr; ANbMe: $x45CN->title = $A8WB0; goto n4zBv; umkT5: return $x45CN; goto OCYRt; n4zBv: $x45CN->root = $ZcYui; goto umkT5; oxHUr: $x45CN->name = $MXTsP; goto ANbMe; OCYRt: } public function title() { return $this->title; } public function name() { return $this->name; } public function root() { return $this->root; } }