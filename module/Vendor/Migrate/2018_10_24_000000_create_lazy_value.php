<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateLazyValue extends Migration { public function up() { Schema::create('lazy_value', function (Blueprint $jzg7M) { $jzg7M->increments('id'); $jzg7M->timestamps(); $jzg7M->string('key', 50)->nullable()->comment(''); $jzg7M->string('param', 100)->nullable()->comment(''); $jzg7M->integer('expire')->nullable()->comment(''); $jzg7M->integer('lifeExpire')->nullable()->comment(''); $jzg7M->integer('cacheSeconds')->nullable()->comment(''); $jzg7M->text('value')->nullable()->comment(''); $jzg7M->unique(array('key', 'param')); $jzg7M->index(array('expire')); $jzg7M->index(array('lifeExpire')); }); } public function down() { } }