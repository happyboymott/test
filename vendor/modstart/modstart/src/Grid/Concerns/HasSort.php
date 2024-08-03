<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Concerns; trait HasSort { public function canSort($R7kqa = null) { goto uD3kk; uD3kk: if (null === $R7kqa) { return $this->canSort; } goto Oyg2o; rkqKL: return $this; goto j2AyK; Oyg2o: $this->canSort = $R7kqa; goto rkqKL; j2AyK: } }