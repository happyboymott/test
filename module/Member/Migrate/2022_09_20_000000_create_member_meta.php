<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberMeta extends Migration { public function up() { Schema::create('member_meta', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->integer('memberUserId')->comment('')->nullable(); $jzg7M->string('name', 30)->comment('')->nullable(); $jzg7M->string('value', 1000)->comment('')->nullable(); $jzg7M->unique(array('memberUserId', 'name')); }); } public function down() { } }