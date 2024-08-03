<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Article\Biz; class ArticlePosition extends AbstractArticlePositionBiz { private $name; private $title; public static function make($MXTsP, $A8WB0) { goto gECgm; OS9dT: $db3lI->title = $A8WB0; goto qq4Sb; qq4Sb: return $db3lI; goto M0BtG; ZyH1j: $db3lI->name = $MXTsP; goto OS9dT; gECgm: $db3lI = new static(); goto ZyH1j; M0BtG: } public function name() { return $this->name; } public function title() { return $this->title; } }