<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter; class Likes extends AbstractFilter { public function condition($Wun7g) { if (isset($Wun7g['likes']) && is_array($Wun7g['likes'])) { goto kvGkI; IkElB: if (!empty($H127z)) { return $H127z; } goto twkF8; MB1RQ: foreach ($Wun7g['likes'] as $sfSTb) { if (empty($sfSTb)) { continue; } $H127z[] = $this->buildCondition($this->column, 'like', "%{$sfSTb}%"); } goto IkElB; kvGkI: $H127z = array(); goto MB1RQ; twkF8: } return null; } public function groupTags($FooIm, $bu36q = null) { goto C0gqu; I89OZ: return $this; goto enoDA; TMEac: $this->field->serializeType($bu36q); goto I89OZ; KhkR1: $this->field->options($FooIm); goto TMEac; C0gqu: $this->field = new Field\GroupTags($this); goto KhkR1; enoDA: } }