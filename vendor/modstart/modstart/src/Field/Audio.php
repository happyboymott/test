<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Audio extends AbstractField { const MODE_DEFAULT = 'default'; const MODE_RAW = 'raw'; protected $width = 80; protected function setup() { $this->addVariables(array('previewPlay' => false, 'category' => 'audio', 'mode' => self::MODE_DEFAULT, 'server' => modstart_admin_url('data/file_manager/audio'))); } public function previewPlay($S2sfb) { goto DTVs0; XgzHz: return $this; goto o5tBl; DTVs0: $this->addVariables(array('previewPlay' => $S2sfb)); goto QFa1Q; QFa1Q: if ($S2sfb) { $this->width = 400; } goto XgzHz; o5tBl: } public function server($bu3wb) { $this->addVariables(array('server' => $bu3wb)); return $this; } public function mode($pZCf3) { $this->addVariables(array('mode' => $pZCf3)); return $this; } }