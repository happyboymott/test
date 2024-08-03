<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use Illuminate\Support\Facades\View; class RenderUtil { public static function view($Q1xSd, $fb7yT = array()) { return View::make($Q1xSd, $fb7yT)->render(); } public static function viewScript($Q1xSd, $fb7yT = array()) { goto ZC5KT; ZC5KT: $FQQRK = trim(self::view($Q1xSd, $fb7yT)); goto J_a8P; J_a8P: $FQQRK = preg_replace('/^<script>/', '', $FQQRK); goto MeRo3; H9eSy: return trim($FQQRK); goto nBsmF; MeRo3: $FQQRK = preg_replace('/<\\/script>$/', '', $FQQRK); goto H9eSy; nBsmF: } public static function display($FQQRK, $rA03q = false) { goto U0h0K; jwG8M: return str_replace(array_keys($giBzK), array_values($giBzK), $FQQRK); goto h6jeS; H4TAA: $giBzK = array('@parent' => '&#64;parent'); goto jwG8M; U0h0K: if ($rA03q) { $FQQRK = htmlspecialchars($FQQRK); } goto H4TAA; h6jeS: } }