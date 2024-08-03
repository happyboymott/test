<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateConfig extends Migration { public function up() { Schema::create('config', function (Blueprint $a5ocU) { $a5ocU->increments('id'); $a5ocU->timestamps(); $a5ocU->string('key', 100)->nullable()->comment(''); $a5ocU->text('value')->nullable()->comment(''); $a5ocU->index('key'); }); } public function down() { } }