<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateAdminUpload extends Migration { public function up() { Schema::create('admin_upload', function (Blueprint $a5ocU) { $a5ocU->increments('id'); $a5ocU->timestamps(); $a5ocU->integer('userId')->nullable()->comment('用户ID'); $a5ocU->string('category', 10)->nullable()->comment('大类'); $a5ocU->integer('dataId')->nullable()->comment('文件ID'); $a5ocU->integer('uploadCategoryId')->nullable()->comment('分类ID'); $a5ocU->index(array('uploadCategoryId')); $a5ocU->index(array('userId', 'category')); }); Schema::create('admin_upload_category', function (Blueprint $a5ocU) { $a5ocU->increments('id'); $a5ocU->timestamps(); $a5ocU->integer('userId')->nullable()->comment('用户ID'); $a5ocU->string('category', 10)->nullable()->comment('大类'); $a5ocU->integer('pid')->nullable()->comment('上级分类'); $a5ocU->integer('sort')->nullable()->comment('排序'); $a5ocU->string('title', 50)->nullable()->comment('名称'); $a5ocU->index(array('userId', 'category')); }); } public function down() { } }