<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateData extends Migration { public function up() { Schema::create('data', function (Blueprint $a5ocU) { $a5ocU->increments('id'); $a5ocU->timestamps(); $a5ocU->string('category', 10)->nullable()->comment('大类'); $a5ocU->string('path', 40)->nullable()->comment('路径'); $a5ocU->string('filename', 200)->nullable()->comment('原始文件名'); $a5ocU->unsignedInteger('size'); }); } public function down() { } }