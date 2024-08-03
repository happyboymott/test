<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Provider; use ModStart\Core\Exception\BizException; use ModStart\Core\Util\FileUtil; class FontProvider { private static $list = array(DefaultFontProvider::class); use ProviderTrait; public static function firstLocalPathOrFail() { goto BKfNa; BKfNa: $NbWfx = self::first(); goto TqspB; OiVlU: $BHbF1 = $NbWfx->path(); goto OTDG5; OTDG5: return FileUtil::savePathToLocalTemp($BHbF1, 'ttf', true); goto hIcF_; TqspB: BizException::throwsIfEmpty('FontProvider Empty', $NbWfx); goto OiVlU; hIcF_: } }