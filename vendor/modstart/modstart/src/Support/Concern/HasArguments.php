<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Support\Concern; trait HasArguments { private $arguments = array(); public function setArgument($KtHB2, $R7kqa = null) { if (is_array($KtHB2)) { foreach ($KtHB2 as $QSYJT => $repda) { $this->arguments[$QSYJT] = $repda; } } else { $this->arguments[$KtHB2] = $R7kqa; } } public function getArgument($KtHB2, $M1u7C = null) { return isset($this->arguments[$KtHB2]) ? $this->arguments[$KtHB2] : $M1u7C; } }