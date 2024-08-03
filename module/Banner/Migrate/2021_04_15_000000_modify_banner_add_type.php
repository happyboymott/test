<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; use ModStart\Core\Dao\ModelUtil; use Module\Banner\Type\BannerType; class ModifyBannerAddType extends Migration { public function up() { Schema::table('banner', function (Blueprint $jzg7M) { $jzg7M->tinyInteger('type')->nullable()->comment(''); if (!\ModStart\Core\Dao\ModelManageUtil::hasTableColumn('banner', 'title')) { $jzg7M->string('title', 100)->nullable()->comment(''); } $jzg7M->string('slogan', 200)->nullable()->comment(''); $jzg7M->string('linkText', 20)->nullable()->comment(''); $jzg7M->tinyInteger('colorReverse')->nullable()->comment(''); }); foreach (ModelUtil::all('banner') as $LKQ89) { ModelUtil::update('banner', $LKQ89['id'], array('type' => BannerType::IMAGE)); } } public function down() { } }