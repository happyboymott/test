<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Form\Concern; use ModStart\Field\CascadeGroup; trait HasCascadeFields { public function cascadeGroup(\Closure $QzRp6, $b4Sjf = array()) { goto YDOPf; qXgSf: $lLzcM->renderMode($this->fieldDefaultRenderMode()); goto apTJE; y8Bik: $this->pushField($lLzcM); goto ZYyJR; YDOPf: $lLzcM = new CascadeGroup($b4Sjf['id'] . '_group_' . $b4Sjf['index']); goto qXgSf; ZYyJR: call_user_func($QzRp6, $this); goto pGrle; pGrle: $lLzcM->end(); goto Gabau; Gabau: return $lLzcM; goto qlmSr; apTJE: $lLzcM->context($this); goto y8Bik; qlmSr: } }