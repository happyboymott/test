<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateDataTemp extends Migration { public function up() { Schema::create('data_temp', function (Blueprint $a5ocU) { $a5ocU->increments('id'); $a5ocU->timestamps(); $a5ocU->string('category', 10)->comment('大类')->nullable(); $a5ocU->string('path', 40)->comment('路径')->nullable(); $a5ocU->string('filename', 200)->comment('原始文件名')->nullable(); $a5ocU->unsignedInteger('size')->comment('文件大小')->nullable(); $a5ocU->index(array('category', 'path')); }); } public function down() { } }