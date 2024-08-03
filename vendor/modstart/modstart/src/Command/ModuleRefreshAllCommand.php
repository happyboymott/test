<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Command; use Illuminate\Console\Command; use Illuminate\Support\Facades\Artisan; use ModStart\Core\Util\FileUtil; class ModuleRefreshAllCommand extends Command { protected $signature = 'modstart:module-refresh-all'; public function handle() { goto HN4QA; buvOD: $this->warn('ModuleRefreshAll Finished'); goto g0uGx; U7eDA: $this->info('ExitCode -> ' . $V6Iez); goto oZ311; iPtup: FileUtil::rm(public_path('asset')); goto klnXT; klnXT: $this->info('>>> Finished
'); goto hcsUb; etWN6: $this->info($cga09); goto uILmu; X0eH4: $cga09 = trim(Artisan::output()); goto lyj7H; HN4QA: $this->info('ModuleRefreshAll Start'); goto C52O2; alEVC: $V6Iez = Artisan::call('vendor:publish', array('--provider' => 'ModStart\\ModStartServiceProvider')); goto e9UGi; uILmu: $this->info('>>> Finished
'); goto buvOD; nTnEs: $this->info('>>> Finished
'); goto Au94H; lyj7H: $this->info('ExitCode -> ' . $V6Iez); goto etWN6; O4m_n: $V6Iez = Artisan::call('modstart:module-install-all'); goto X0eH4; C52O2: $this->info('>>> CleanOldAsset'); goto iPtup; e9UGi: $cga09 = trim(Artisan::output()); goto U7eDA; hcsUb: $this->info('>>> Publish Asset'); goto alEVC; Au94H: $this->info('>>> Reinstall Modules'); goto O4m_n; oZ311: $this->info($cga09); goto nTnEs; g0uGx: } }