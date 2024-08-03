<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Support\Concern; trait HasVariables { protected $variables = array(); public function varaibles() { return $this->variables; } public function setVariable($KtHB2, $R7kqa = null) { if (is_array($KtHB2)) { foreach ($KtHB2 as $QSYJT => $repda) { $this->variables[$QSYJT] = $repda; } } else { $this->variables[$KtHB2] = $R7kqa; } } public function getVariable($KtHB2, $M1u7C = null) { return isset($this->variables[$KtHB2]) ? $this->variables[$KtHB2] : $M1u7C; } }