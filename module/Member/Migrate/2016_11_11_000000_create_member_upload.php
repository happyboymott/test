<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberUpload extends Migration { public function up() { if (!\ModStart\Core\Dao\ModelManageUtil::hasTable('member_upload')) { Schema::create('member_upload', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->unsignedInteger('userId')->nullable()->comment('用户ID'); $jzg7M->string('category', 10)->nullable()->comment('大类'); $jzg7M->unsignedInteger('dataId')->nullable()->comment('文件ID'); $jzg7M->integer('uploadCategoryId')->nullable()->comment('分类ID'); $jzg7M->index(array('userId', 'uploadCategoryId')); $jzg7M->index(array('dataId')); }); } } public function down() { } }