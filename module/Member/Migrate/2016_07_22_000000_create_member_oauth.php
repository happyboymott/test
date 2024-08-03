<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberOauth extends Migration { public function up() { Schema::create('member_oauth', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->integer('memberUserId')->comment('用户ID')->nullable(); $jzg7M->string('type', 30)->comment('类型')->nullable(); $jzg7M->string('openId', 150)->comment('OpenId')->nullable(); $jzg7M->unique(array('type', 'openId')); $jzg7M->index(array('memberUserId')); }); } public function down() { } }