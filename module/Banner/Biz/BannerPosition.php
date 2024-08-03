<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Biz; class BannerPosition extends AbstractBannerPositionBiz { private $name; private $title; public static function make($MXTsP, $A8WB0) { goto p2mtv; WvL8J: return $db3lI; goto gqZdd; dxOTI: $db3lI->title = $A8WB0; goto WvL8J; p2mtv: $db3lI = new static(); goto wcbUe; wcbUe: $db3lI->name = $MXTsP; goto dxOTI; gqZdd: } public function name() { return $this->name; } public function title() { return $this->title; } }