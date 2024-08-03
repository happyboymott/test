<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\App\Web\Layout; use ModStart\Core\Util\AgentUtil; use ModStart\Layout\Page; class WebDialogPage extends Page { public function view($Q1xSd = null) { if (null === $Q1xSd) { goto E38OD; jb3yX: $ng4yL = 'theme.default.m.dialogPage'; goto FVTyk; FVTyk: $hVbSb = "theme.{$uUhhL}.pc.dialogPage"; goto OyVP6; OTBrO: return 'modstart::app.web.dialogPage'; goto YyUQj; tEsaw: $uUhhL = modstart_config()->getWithEnv('siteTemplate', 'default'); goto aDnfR; j9y1G: if (AgentUtil::isMobile()) { if (view()->exists($cuJ6g)) { return $cuJ6g; } if (view()->exists($ng4yL)) { return $ng4yL; } } goto xn01A; OyVP6: $VTYK7 = 'theme.default.pc.dialogPage'; goto j9y1G; aDnfR: $cuJ6g = "theme.{$uUhhL}.m.dialogPage"; goto jb3yX; E38OD: if ($this->view) { return $this->view; } goto tEsaw; lHXh0: if (view()->exists($VTYK7)) { return $VTYK7; } goto OTBrO; xn01A: if (view()->exists($hVbSb)) { return $hVbSb; } goto lHXh0; YyUQj: } return parent::view($Q1xSd); } }