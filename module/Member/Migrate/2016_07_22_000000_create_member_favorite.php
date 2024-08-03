<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberFavorite extends Migration { public function up() { Schema::create('member_favorite', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->integer('userId')->comment('用户ID')->nullable(); $jzg7M->string('category', 20)->comment('类别')->nullable(); $jzg7M->integer('categoryId')->comment('所属类别ID')->nullable(); $jzg7M->index(array('userId', 'category')); }); } public function down() { } }