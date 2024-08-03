<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberVip extends Migration { public function up() { Schema::table('member_user', function (Blueprint $jzg7M) { $jzg7M->integer('vipId')->nullable()->comment(''); $jzg7M->date('vipExpire')->nullable()->comment(''); }); Schema::create('member_vip_set', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->string('title', 50)->nullable()->comment('名称'); $jzg7M->string('flag', 50)->nullable()->comment('标识'); $jzg7M->integer('pid')->nullable()->comment('排序'); $jzg7M->integer('sort')->nullable()->comment('排序'); $jzg7M->tinyInteger('isDefault')->nullable()->comment('默认'); $jzg7M->string('icon', 100)->nullable()->comment('图标'); $jzg7M->decimal('price', 20, 2)->nullable()->comment(''); $jzg7M->integer('vipDays')->nullable()->comment(''); $jzg7M->text('content')->nullable()->comment('说明'); }); } public function down() { } }