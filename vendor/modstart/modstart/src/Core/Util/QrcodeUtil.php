<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use BaconQrCode\Encoder\Encoder; use ModStart\Core\Exception\BizException; use ModStart\ModStart; class QrcodeUtil { public static function png($FQQRK, $y8X7g = 200) { goto zBIiz; RNF5E: return $W1J7B->writeString($FQQRK, 'UTF-8'); goto uv_kq; BquD7: $W1J7B = new \BaconQrCode\Writer($GChHB); goto RNF5E; zBIiz: if (class_exists(\BaconQrCode\Renderer\Image\Png::class)) { goto biZrk; biZrk: $GChHB = new \BaconQrCode\Renderer\Image\Png(); goto oTow6; oTow6: $GChHB->setMargin(0); goto dsfJe; dsfJe: $GChHB->setHeight($y8X7g); goto AWpKP; AWpKP: $GChHB->setWidth($y8X7g); goto C3EJ0; C3EJ0: } else { BizException::throwsIf('Please Install imagick extension', !extension_loaded('imagick')); $GChHB = new \BaconQrCode\Renderer\ImageRenderer(new \BaconQrCode\Renderer\RendererStyle\RendererStyle(400), new \BaconQrCode\Renderer\Image\ImagickImageBackEnd()); } goto BquD7; uv_kq: } public static function pngBase64String($FQQRK, $y8X7g = 200) { return 'data:image/png;base64,' . base64_encode(self::png($FQQRK, $y8X7g)); } }