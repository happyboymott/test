<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; use ModStart\Core\Dao\ModelManageUtil; class CreateAtomic extends Migration { public function up() { if (!ModelManageUtil::hasTable('atomic')) { Schema::create('atomic', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->string('name', 100)->nullable()->comment(''); $jzg7M->integer('value')->nullable()->comment(''); $jzg7M->integer('expire')->nullable()->comment(''); $jzg7M->unique('name'); $jzg7M->index('expire'); }); } } public function down() { } }