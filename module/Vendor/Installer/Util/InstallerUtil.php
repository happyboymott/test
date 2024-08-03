<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Installer\Util; class InstallerUtil { public static function checkForInstallRedirect() { goto NwGTK; yJRnH: if (!file_exists($teTFt)) { header('Location: ' . modstart_web_url('install.php')); die; } goto kIE8b; paWiG: $teTFt = storage_path('install.lock'); goto yJRnH; NwGTK: $UmURY = base_path('.env'); goto paWiG; kIE8b: } }