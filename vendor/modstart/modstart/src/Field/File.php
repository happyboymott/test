<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class File extends AbstractField { const MODE_DEFAULT = 'default'; const MODE_RAW = 'raw'; protected function setup() { $this->addVariables(array('category' => 'file', 'mode' => self::MODE_DEFAULT, 'server' => modstart_admin_url('data/file_manager/file'))); } public function server($bu3wb) { $this->addVariables(array('server' => $bu3wb)); return $this; } public function mode($pZCf3) { $this->addVariables(array('mode' => $pZCf3)); return $this; } }