<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Widget; class StatusText extends AbstractWidget { public static function getAssets() { return array('style' => '.ub-status-text{display:inline-block;margin-right:0.5rem;}'); } public static function __callStatic($KtHB2, $Rb1XH) { goto IMuwN; vRRyW: throw new \Exception('StatusText error ' . join(',', $HrJQR) . ' '); goto HIXU0; w1aSb: if (in_array($KtHB2, $HrJQR)) { goto jDJq9; eMA0g: return $Kwpw4->render(); goto pywRR; PvWQh: $Kwpw4->text($Rb1XH[0]); goto p88J1; jDJq9: $Kwpw4 = new static(); goto PvWQh; p88J1: $Kwpw4->type($KtHB2); goto eMA0g; pywRR: } goto vRRyW; IMuwN: $HrJQR = array('muted', 'warning', 'danger', 'success'); goto w1aSb; HIXU0: } public function render() { return '<span class="ub-status-text ub-text-' . $this->type . '">' . $this->text . '</span>'; } }