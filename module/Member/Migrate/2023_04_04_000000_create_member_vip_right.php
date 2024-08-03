<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberVipRight extends Migration { public function up() { Schema::create('member_vip_right', function (Blueprint $jzg7M) { $jzg7M->bigIncrements('id'); $jzg7M->timestamps(); $jzg7M->string('vipIds', 200)->nullable()->comment('VIPID'); $jzg7M->string('title', 200)->nullable()->comment('标题'); $jzg7M->string('desc', 200)->nullable()->comment('描述'); $jzg7M->string('image', 200)->nullable()->comment('图标'); $jzg7M->integer('sort')->nullable()->comment('排序'); }); } public function down() { } }