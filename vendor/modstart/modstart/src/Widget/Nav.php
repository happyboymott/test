<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Widget; class Nav extends AbstractWidget { protected $view = 'modstart::widget.nav'; protected $navs = ''; protected $classList = ''; public function __construct($siN29, $eABMj = '') { goto XUiH2; XUiH2: parent::__construct(); goto ByO0w; DnYNT: $this->classList = $eABMj; goto LXHpF; ByO0w: $this->navs = $siN29; goto DnYNT; LXHpF: } public static function make($siN29, $eABMj = '') { return new static($siN29, $eABMj); } public function navs($siN29) { $this->navs = $siN29; return $this; } public function classList($eABMj) { $this->classList = $eABMj; return $this; } public function variables() { return array('navs' => $this->navs, 'classList' => $this->classList); } }