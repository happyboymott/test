<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Markdown; use League\CommonMark\CommonMarkConverter; use League\CommonMark\Environment; use Webuni\CommonMark\TableExtension\TableExtension; class MarkConverter extends CommonMarkConverter { public function __construct(array $JAbv1 = array(), Environment $wx6Nu = null) { goto Oh1bS; Oh1bS: $wx6Nu = Environment::createCommonMarkEnvironment(); goto vc8nT; CZYz9: parent::__construct($JAbv1, $wx6Nu); goto zz2UT; vc8nT: $wx6Nu->addExtension(new TableExtension()); goto CZYz9; zz2UT: } }