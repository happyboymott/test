<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Misc\Captcha; use Illuminate\Support\ServiceProvider; class CaptchaServiceProvider extends ServiceProvider { public function boot() { $this->publishes(array(__DIR__ . '/../../../config/captcha.php' => config_path('captcha.php')), 'config'); } public function register() { $this->mergeConfigFrom(__DIR__ . '/../../../config/captcha.php', 'captcha'); $this->app->bind('captcha', function ($HF1Gt) { return new Captcha($HF1Gt['Illuminate\\Filesystem\\Filesystem'], $HF1Gt['Illuminate\\Config\\Repository'], $HF1Gt['Intervention\\Image\\ImageManager'], $HF1Gt['Illuminate\\Session\\Store'], $HF1Gt['Illuminate\\Hashing\\BcryptHasher'], $HF1Gt['Illuminate\\Support\\Str']); }); } }