<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberVipOrder extends Migration { public function up() { Schema::create('member_vip_order', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->integer('memberUserId')->nullable()->comment('排序'); $jzg7M->integer('vipId')->nullable()->comment(''); $jzg7M->decimal('payFee', 20, 2)->nullable()->comment(''); $jzg7M->tinyInteger('status')->nullable()->comment('默认'); $jzg7M->date('expire')->nullable()->comment(''); $jzg7M->string('type', 20)->nullable()->comment(''); }); } public function down() { } }