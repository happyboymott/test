<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class MemberCard extends Migration { public function up() { Schema::create('member_card', function (Blueprint $jzg7M) { $jzg7M->bigIncrements('id'); $jzg7M->timestamps(); $jzg7M->bigInteger('memberUserId')->nullable()->comment('用户ID'); $jzg7M->string('biz', 20)->nullable()->comment('业务'); $jzg7M->dateTime('expire')->nullable()->comment('到期时间'); $jzg7M->bigInteger('quotaUsed')->nullable()->comment('使用额度'); $jzg7M->bigInteger('quotaTotal')->nullable()->comment('总额度'); $jzg7M->index(array('memberUserId', 'biz')); }); } public function down() { } }