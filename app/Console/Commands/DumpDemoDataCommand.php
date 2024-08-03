<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace App\Console\Commands; use Module\Vendor\Command\BaseDumpDemoDataCommand; class DumpDemoDataCommand extends BaseDumpDemoDataCommand { public function handle() { $A_0aq = array('inserts' => $this->buildInsert(array('config', array('key', 'value'), function ($WPLk7) { return in_array($WPLk7['key'], array('siteName', 'siteDescription', 'siteKeywords', 'siteLogo', 'siteSlogan', 'siteDomain', 'Cms_HomeInfoTitle', 'Cms_HomeInfoImage', 'Cms_HomeInfoContent', 'Cms_CompanyName', 'Cms_ContactEmail', 'Cms_ContactPhone', 'Cms_ContactAddress')); }), 'cms_content', 'cms_m_cases', 'cms_m_job', 'cms_m_news', 'cms_m_product', 'nav', 'banner', 'partner'), 'updates' => $this->buildUpdate()); $this->buildDump($A_0aq); } }