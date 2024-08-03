<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Shell; use Symfony\Component\Console\Command\Command; use Symfony\Component\Console\Input\InputInterface; use Symfony\Component\Console\Output\OutputInterface; class ClosureCommand extends Command { protected $callback; public function __construct($KW7Ad, \Closure $Ri3Vj) { goto MF09r; ZpJiu: parent::__construct(); goto zhoh9; MF09r: $this->callback = $Ri3Vj; goto shXDe; shXDe: $this->signature = $KW7Ad; goto ZpJiu; zhoh9: } protected function execute(InputInterface $QBv2Z, OutputInterface $qYcXN) { goto OcxLw; Xyu3s: return $this->laravel->call($this->callback->bindTo($this, $this), $JmVUW); goto EqjdL; bOUE_: foreach ((new \ReflectionFunction($this->callback))->getParameters() as $PhXO1) { if (isset($QeT61[$PhXO1->name])) { $JmVUW[$PhXO1->name] = $QeT61[$PhXO1->name]; } } goto Xyu3s; OcxLw: $QeT61 = array_merge($QBv2Z->getArguments(), $QBv2Z->getOptions()); goto QGkn5; QGkn5: $JmVUW = array(); goto bOUE_; EqjdL: } public function describe($BoPI1) { $this->setDescription($BoPI1); return $this; } }