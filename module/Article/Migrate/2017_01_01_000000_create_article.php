<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateArticle extends Migration { public function up() { if (!\ModStart\Core\Dao\ModelManageUtil::hasTable('article')) { Schema::create('article', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->string('position', 50)->nullable()->comment('位置'); $jzg7M->string('title', 200)->nullable()->comment('标题'); $jzg7M->text('content')->nullable()->comment('内容'); }); } } public function down() { } }