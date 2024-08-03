<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Concerns; trait HasPaginator { public function enablePagination($S2sfb = false) { goto fw2Lw; nBvFm: return $this; goto Wv0uD; OOhMA: $this->setFluentAttribute('enablePagination', $S2sfb); goto nBvFm; fw2Lw: $this->model->usePaginate($S2sfb); goto OOhMA; Wv0uD: } }