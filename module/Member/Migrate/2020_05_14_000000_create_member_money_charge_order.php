<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberMoneyChargeOrder extends Migration { public function up() { Schema::create('member_money_charge_order', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->integer('memberUserId')->nullable()->comment('排序'); $jzg7M->decimal('money', 20, 2)->nullable()->comment(''); $jzg7M->tinyInteger('status')->nullable()->comment('默认'); $jzg7M->index(array('memberUserId')); $jzg7M->index(array('created_at')); }); } public function down() { } }