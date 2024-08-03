<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; use ModStart\Core\Dao\ModelManageUtil; class CreateScheduleRun extends Migration { public function up() { Schema::create('schedule_run', function (Blueprint $jzg7M) { $jzg7M->bigIncrements('id'); $jzg7M->timestamps(); $jzg7M->string('name', 200)->nullable()->comment(''); $jzg7M->dateTime('startTime')->nullable()->comment(''); $jzg7M->dateTime('endTime')->nullable()->comment(''); $jzg7M->tinyInteger('status')->nullable()->comment(''); $jzg7M->string('result', 200)->nullable()->comment(''); $jzg7M->index('created_at'); }); } public function down() { } }