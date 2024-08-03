<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter; use ModStart\Core\Util\StrUtil; class Like extends AbstractFilter { private $handle = null; public function condition($Wun7g) { if (isset($Wun7g['like']) && $Wun7g['like'] !== '') { if (!empty($this->handle)) { return call_user_func_array($this->handle, array($Wun7g['like'])); } else { return $this->buildCondition($this->column, 'like', "%{$Wun7g['like']}%"); } } return null; } public function handle(\Closure $QzRp6) { $this->handle = $QzRp6; } public function wordSplit() { $this->handle = function ($mfOIX) { return array(array('where' => array(function ($lvLqX) use($mfOIX) { $OxU4_ = StrUtil::wordSplit($mfOIX); foreach ($OxU4_ as $wEka7) { $lvLqX->where($this->column, 'like', '%' . $wEka7 . '%'); } }))); }; } }