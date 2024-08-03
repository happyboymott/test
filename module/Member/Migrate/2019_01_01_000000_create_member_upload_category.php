<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberUploadCategory extends Migration { public function up() { if (!\ModStart\Core\Dao\ModelManageUtil::hasTable('member_upload_category')) { Schema::create('member_upload_category', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->integer('userId')->nullable()->comment('用户ID'); $jzg7M->string('category', 10)->nullable()->comment('大类'); $jzg7M->integer('pid')->nullable()->comment('上级分类'); $jzg7M->integer('sort')->nullable()->comment('排序'); $jzg7M->string('title', 50)->nullable()->comment('名称'); $jzg7M->index(array('userId')); }); } } public function down() { } }