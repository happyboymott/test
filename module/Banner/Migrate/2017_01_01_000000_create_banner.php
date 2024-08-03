<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; use ModStart\Core\Dao\ModelManageUtil; class CreateBanner extends Migration { public function up() { if (ModelManageUtil::hasTable('banner')) { goto AMod5; owRcY: if (!in_array('sort', $LBKlD)) { Schema::table('banner', function (Blueprint $jzg7M) { $jzg7M->integer('sort')->nullable()->comment('顺序'); }); } goto ujq3G; XgqVc: if (!in_array('position', $LBKlD)) { Schema::table('banner', function (Blueprint $jzg7M) { $jzg7M->string('position', 50)->nullable()->comment('位置'); }); } goto owRcY; AMod5: $LBKlD = ModelManageUtil::listTableColumns('banner'); goto XgqVc; ujq3G: } else { Schema::create('banner', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->string('position', 50)->nullable()->comment('位置'); $jzg7M->integer('sort')->nullable()->comment('顺序'); $jzg7M->string('image', 100)->nullable()->comment('图片'); $jzg7M->string('link', 200)->nullable()->comment('链接'); }); } } public function down() { } }