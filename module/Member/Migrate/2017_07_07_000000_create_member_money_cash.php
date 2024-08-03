<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberMoneyCash extends Migration { public function up() { Schema::create('member_money_cash', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->integer('memberUserId')->nullable()->comment('用户ID'); $jzg7M->tinyInteger('status')->nullable()->comment('状态'); $jzg7M->decimal('money', 20, 2)->nullable()->comment('金额'); $jzg7M->decimal('moneyAfterTax', 20, 2)->nullable()->comment('实际到账'); $jzg7M->string('remark', 100)->nullable()->comment('备注'); $jzg7M->tinyInteger('type')->nullable()->comment('提现账号类型'); $jzg7M->string('realname', 50)->nullable()->comment('提现账号姓名'); $jzg7M->string('account', 200)->nullable()->comment('提现账号'); $jzg7M->index(array('memberUserId')); }); } public function down() { } }