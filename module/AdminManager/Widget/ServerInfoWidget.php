<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\AdminManager\Widget; use Illuminate\Support\Str; use ModStart\Widget\AbstractWidget; use Module\AdminManager\Util\ModuleUtil; class ServerInfoWidget extends AbstractWidget { protected $view = 'module::AdminManager.View.widget.serverInfo'; protected function variables() { goto GgkWN; j7GTe: $DGta0 = json_encode(array('modules' => ModuleUtil::modules())); goto I6CpS; NBOoO: return array('modules' => $DGta0, 'attributes' => $this->formatAttributes(), 'phpExtensions' => $erKnE); goto O4X3A; I6CpS: if (function_exists('gzdeflate')) { $DGta0 = 'V_Z_' . base64_encode(gzdeflate($DGta0)); } else { $DGta0 = 'V_' . base64_encode($DGta0); } goto NBOoO; GgkWN: $erKnE = get_loaded_extensions(); goto j7GTe; O4X3A: } }