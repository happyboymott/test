<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberLoginLog extends Migration { public function up() { Schema::create('member_login_log', function (Blueprint $jzg7M) { $jzg7M->bigIncrements('id'); $jzg7M->timestamps(); $jzg7M->bigInteger('memberUserId')->nullable()->comment('用户ID'); $jzg7M->tinyInteger('deviceType')->nullable()->comment('用户名'); $jzg7M->string('ip', 20)->nullable()->comment('用户名'); $jzg7M->string('userAgent', 400)->nullable()->comment('用户名'); $jzg7M->string('ipLocation', 100)->nullable()->comment('IP地址信息'); $jzg7M->index(array('memberUserId')); }); } public function down() { } }