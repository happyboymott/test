<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\App\Web\Layout; use ModStart\Core\Util\AgentUtil; use ModStart\Layout\Page; class WebPage extends Page { public function view($Q1xSd = null) { if (null === $Q1xSd) { goto DXJdx; SMD05: if (AgentUtil::isMobile()) { if (view()->exists($cuJ6g)) { return $cuJ6g; } if (view()->exists($ng4yL)) { return $ng4yL; } } goto z4enG; IMpcE: if (view()->exists($VTYK7)) { return $VTYK7; } goto Yd2GZ; Yd2GZ: return 'modstart::app.web.page'; goto p8U7m; vWIDh: $uUhhL = modstart_config()->getWithEnv('siteTemplate', 'default'); goto EvJ8l; DXJdx: if ($this->view) { return $this->view; } goto vWIDh; EvJ8l: $cuJ6g = "theme.{$uUhhL}.m.page"; goto lyt8n; VkbNS: $hVbSb = "theme.{$uUhhL}.pc.page"; goto NYQGs; z4enG: if (view()->exists($hVbSb)) { return $hVbSb; } goto IMpcE; NYQGs: $VTYK7 = 'theme.default.pc.page'; goto SMD05; lyt8n: $ng4yL = 'theme.default.m.page'; goto VkbNS; p8U7m: } return parent::view($Q1xSd); } public function useBlank() { $this->view = 'modstart::app.web.pageBlank'; } public function useNarrow() { $this->view = 'modstart::app.web.pageNarrow'; } }