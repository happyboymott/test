<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Command; use Illuminate\Console\Command; use ModStart\Core\Exception\BizException; use ModStart\Core\Util\FileUtil; use ModStart\Module\ModuleManager; class ModuleLinkAssetCommand extends Command { protected $signature = 'modstart:module-link-asset {module}'; public function handle() { goto twED3; NrD18: $a9KPI = public_path($eK89N); goto eeAB2; tgzVs: $eK89N = "vendor/{$ig6Rp}"; goto NrD18; rouLO: $bR5ow = ModuleManager::path($ig6Rp, 'Asset'); goto tgzVs; twED3: $ig6Rp = $this->argument('module'); goto Oaqsh; Xqxdz: $this->info("The [{$eK89N}] link has been connected to [{$ZLzT2}]"); goto VfN4U; Oaqsh: BizException::throwsIf('模块不存在', !ModuleManager::isExists($ig6Rp)); goto MOKxA; MOKxA: $ZLzT2 = ModuleManager::relativePath($ig6Rp, 'Asset'); goto rouLO; eeAB2: if (file_exists($a9KPI)) { $this->error("The [{$eK89N}] link already exists."); return; } goto eyPzh; eyPzh: FileUtil::link($bR5ow, $a9KPI); goto Xqxdz; VfN4U: } }