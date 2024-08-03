<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Displayer; use Illuminate\Contracts\Support\Renderable; use Illuminate\Support\Fluent; use ModStart\Grid\Grid; use ModStart\Support\Concern\HasFluentAttribute; abstract class AbstractDisplayer implements Renderable { use HasFluentAttribute; protected static $css = array(); protected static $js = array(); protected $grid; protected $fluentAttributes = array(); public function __construct(Grid $S2MB4) { $this->grid = $S2MB4; } public abstract function render(); public function __call($pqQwP, $Rb1XH) { if ($this->isFluentAttribute($pqQwP)) { return $this->fluentAttribute($pqQwP, $Rb1XH); } throw new \Exception('AbstractDisplayer __call error : ' . $pqQwP . ' ' . join(',', $this->fluentAttributes)); } }