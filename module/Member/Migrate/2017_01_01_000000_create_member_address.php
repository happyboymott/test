<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberAddress extends Migration { public function up() { Schema::create('member_address', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->integer('userId')->nullable()->comment('用户ID'); $jzg7M->string('name', 20)->nullable()->comment('姓名'); $jzg7M->string('phone', 20)->nullable()->comment('手机号'); $jzg7M->string('area', 100)->nullable()->comment('省市地区'); $jzg7M->string('detail', 200)->nullable()->comment('详细地址'); $jzg7M->string('post', 20)->nullable()->comment('邮政编码'); $jzg7M->tinyInteger('isDefault')->nullable()->comment('默认'); $jzg7M->index(array('userId')); }); } public function down() { } }