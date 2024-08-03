<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\AdminManager\Util; use ModStart\ModStart; use ModStart\Module\ModuleManager; class ModuleUtil { public static function modules() { goto mBouY; Na53O: foreach (ModuleManager::listAllEnabledModules() as $eFCO4 => $RAErU) { goto XqNuG; CHL39: $DGta0[] = "{$eFCO4}:{$Uhf1N['version']}"; goto Tz5Tq; v_SHB: if (!$Uhf1N) { continue; } goto CHL39; XqNuG: $Uhf1N = ModuleManager::getModuleBasic($eFCO4); goto v_SHB; Tz5Tq: } goto eP4wO; mBouY: $DGta0 = array(); goto f6O1y; eP4wO: return $DGta0; goto YbKHt; f6O1y: $DGta0[] = 'ModStart:' . ModStart::$version; goto Na53O; YbKHt: } }