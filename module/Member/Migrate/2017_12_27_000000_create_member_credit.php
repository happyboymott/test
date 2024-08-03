<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberCredit extends Migration { public function up() { Schema::create('member_credit', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->integer('memberUserId')->nullable()->comment('用户ID'); $jzg7M->integer('total')->nullable()->comment('数量'); $jzg7M->unique(array('memberUserId')); }); } public function down() { } }