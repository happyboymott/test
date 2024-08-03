<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Support\Concern; trait HasFluentAttribute { protected function addFluentAttributeVariable($KtHB2) { if (!in_array($KtHB2, $this->fluentAttributes)) { $this->fluentAttributes[] = $KtHB2; } } protected function fluentAttributeVariables() { goto yUfmT; WwHXn: foreach ($this->fluentAttributes as $repda) { $fb7yT[$repda] = $this->{$repda}; } goto WMikE; WMikE: return $fb7yT; goto pa5Bh; yUfmT: $fb7yT = array(); goto WwHXn; pa5Bh: } protected function isFluentAttribute($pqQwP) { return in_array($pqQwP, $this->fluentAttributes); } protected function setFluentAttribute($KtHB2, $R7kqa) { $this->{$KtHB2} = $R7kqa; } protected function fluentAttribute($pqQwP, $Rb1XH) { goto b1N8J; meyL4: return $this; goto RcgrE; b1N8J: if (!isset($Rb1XH[0])) { return $this->{$pqQwP}; } goto xsHzE; xsHzE: $this->{$pqQwP} = $Rb1XH[0]; goto meyL4; RcgrE: } }