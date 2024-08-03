<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Input\Response; use ModStart\Data\DataManager; class FileTemp extends AbstractField { protected $width = 80; protected static $js = array('asset/common/uploadButton.js'); protected function setup() { $this->addVariables(array('autoSave' => true, 'server' => modstart_admin_url('data/file_manager/file'))); } public function server($bu3wb) { $this->addVariables(array('server' => $bu3wb)); return $this; } public function autoSave($R7kqa) { $this->addVariables(array('autoSave' => $R7kqa)); return $this; } public function prepareInput($R7kqa, $p6TQ_) { if (!empty($this->variables['autoSave']) && DataManager::isDataTemp($R7kqa)) { goto ji4zJ; KcGgs: if (Response::isError($IPT4J)) { return $R7kqa; } goto kS8XG; kS8XG: return DataManager::fix($IPT4J['data']['path']); goto xj85t; ji4zJ: $IPT4J = DataManager::storeTempDataByPath($R7kqa); goto KcGgs; xj85t: } return $R7kqa; } }