<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid; use Illuminate\Contracts\Support\Renderable; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class GridFilterScope implements Renderable { protected $filter; public $key = ''; protected $label = ''; protected $queries; public function __construct(GridFilter $wdoSD, $QmpAx = 'fixed', $sGkLi = '') { goto DsQXL; d_Y1R: $this->label = $sGkLi ? $sGkLi : $QmpAx; goto qMcbb; EB1MG: $this->key = $QmpAx; goto d_Y1R; qMcbb: $this->queries = new Collection(); goto Rc4cV; DsQXL: $this->filter = $wdoSD; goto EB1MG; Rc4cV: } public function condition() { return $this->queries->map(function ($lvLqX) { return array($lvLqX['method'] => $lvLqX['arguments']); })->toArray(); } public function render() { return ''; } public function __call($pqQwP, $Rb1XH) { $this->queries->push(array('method' => $pqQwP, 'arguments' => $Rb1XH)); return $this; } }