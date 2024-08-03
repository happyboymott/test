<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Shell; use Illuminate\Console\Application; use Illuminate\Events\Dispatcher; use Symfony\Component\Console\Command\Command; use Symfony\Component\Console\Input\InputInterface; use Symfony\Component\Console\Output\OutputInterface; class ShellApplication extends Application { public function __construct($MXTsP = 'Console Application', $t6NVW = '1.0.0') { goto OV7jZ; y2suC: $this->setAutoExit(true); goto lJWyN; qUFmp: $this->setName($MXTsP); goto y2suC; OV7jZ: parent::__construct($OvMht = new \Illuminate\Foundation\Application(), new Dispatcher($OvMht), $t6NVW); goto qUFmp; lJWyN: $this->setCatchExceptions(true); goto BOWPw; BOWPw: } public function command($KW7Ad, \Closure $Ri3Vj, $BoPI1 = null) { return $this->add((new ClosureCommand($KW7Ad, $Ri3Vj))->describe($BoPI1)); } public function runAsSingle(InputInterface $QBv2Z = null, OutputInterface $qYcXN = null) { foreach ($this->all() as $AFDKH) { $this->setDefaultCommand($AFDKH, true); break; } return $this->run($QBv2Z, $qYcXN); } }