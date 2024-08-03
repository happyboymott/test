<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; use ModStart\Core\Dao\ModelUtil; use Module\Banner\Type\BannerType; class ModifyBannerAddBackgroundColor extends Migration { public function up() { Schema::table('banner', function (Blueprint $jzg7M) { $jzg7M->string('backgroundColor', 20)->nullable()->comment('背景色'); }); } public function down() { } }