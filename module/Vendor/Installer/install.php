<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use ModStart\Core\Util\EnvUtil; use ModStart\Core\Util\FileUtil; goto tKBz0; HfX_k: ?>
"></script>
    <script src="/asset/layui/layui.js?<?php  goto J25Pi; ZOxfo: echo base64_encode('<?xml version="1.0" encoding="UTF-8"?><svg width="100" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><text x="50%" y="50%" font-size="10" fill="#EEEEEE" style="transform:rotate(-45deg);transform-origin:center;" font-family="system-ui,sans-serif" text-anchor="middle" dominant-baseline="middle">' . INSTALL_APP_NAME . ' V' . INSTALL_APP_VERSION . '</text></svg>'); goto Yug7k; e49Et: ?>
");
        }
        .pb-installer-box{
            background-image:url("data:image/svg+xml;base64,<?php  goto ZOxfo; J25Pi: echo time(); goto jhQkL; p8TrR: echo time(); goto bRyej; ghm9H: echo time(); goto uyT83; Yug7k: ?>
");
            background-color:#FFF;
            border-radius:0.5rem;
        }
        .pb-installer-box .step-menu{
            padding:0 0.5rem;
            text-align: center;
            border-bottom:1px solid #EEE;
        }
        .pb-installer-box .step-menu a{
            display:inline-block;
            padding:0.8rem;
            color:var(--color-text);
            text-align:center;
            border-bottom:1px solid #EEE;
            font-size:0.8rem;
        }
        .pb-installer-box .step-menu > .iconfont{
            color:var(--color-muted);
            font-size:0.8rem;
        }
        .pb-installer-box .step-menu a.checked{
            color:var(--color-primary);
        }
        .pb-installer-box .step-menu a.active{
            color:var(--color-primary);
        }
        .pb-installer-box .step-content .step-content-item{
            display:none;
        }
        .pb-installer-box .step-content .step-content-item.active{
            display:block;
        }
        .pb-installer-box .step-content .step-content-item .content-item-body{
            padding:1rem;
        }
        .pb-installer-box .step-content .step-content-item .content-item-foot{
            padding: 1rem 1rem 2rem 1rem;
            text-align:center;
        }
        .pb-installer-box .step-content .step-content-item iframe{
            width:100%;
            border:1px solid #EEE;
            border-radius:0.25rem;
            height:calc( 100vh - 200px );
        }
    </style>
</head>
<body style="background-color:#333;padding:40px 0;">
<div style="width:960px;min-height:100vh;margin:0 auto;">

    <?php  goto HOMlt; sEmP1: echo base64_encode('<?xml version="1.0" encoding="UTF-8"?><svg width="200" height="200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><text x="50%" y="50%" font-size="16" fill="#444444" style="transform:rotate(-45deg);transform-origin:center;" font-family="system-ui,sans-serif" text-anchor="middle" dominant-baseline="middle">' . INSTALL_APP_NAME . ' V' . INSTALL_APP_VERSION . '</text></svg>'); goto e49Et; mQ0KZ: echo time(); goto stcti; YR9JS: echo time(); goto ZAs3d; tKBz0: include __DIR__ . '/function.php'; goto GZTMC; HOMlt: if (file_exists(APP_PATH . '/storage/install.lock')) { ?>
        <div class="ub-alert danger ub-text-center">系统无需重复安装</div>
    <?php  } else { goto PuFK_; PuFK_: ?>
        <h1 class="ub-text-center" style="color:#FFF;">
            <i class="iconfont icon-tools"></i>
            <?php  goto HJRl9; IYiX7: is_dir_really_writable(APP_PATH . '/bootstrap/') ? text_success('/bootstrap/目录可写') : text_error('/bootstrap/目录不可写'); goto fHizh; bSLhn: is_dir_really_writable(APP_PATH . '/public/') ? text_success('/public/目录可写') : text_error('/public/目录不可写'); goto QGwgQ; C86SS: text_success('Rewrite规则正确'); goto Vg5pI; ZaKaI: class_exists('pdo') ? text_success('PHP pdo 扩展') : text_error('缺少 PHP pdo 扩展'); goto xsDLs; TOkqL: ?>
                        <div class="ub-panel" style="background:#F8F8F8;">
                            <div class="head">
                                <div class="title">
                                    <i class="iconfont icon-user-o"></i>
                                    后台管理信息
                                </div>
                            </div>
                            <div class="body">
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 用户</label>
                                    <input type="text" style="width:100%;" name="username"
                                           value="<?php  goto mM5hF; eQuWx: if (defined('DEMO_DATA')) { ?>
                            <div>
                                <label style="border:none;margin-top:-10px;">
                                    <input type="checkbox" style="vertical-align:middle;" name="installDemo" value="1"/>
                                    初始化安装演示数据
                                </label>
                            </div>
                        <?php  } goto LBueo; EDnjN: if (error_counter(0) > 0) { goto rJX51; rJX51: ?>
                            <div class="ub-alert danger ub-text-center">请解决以上 <?php  goto ki4kk; F9gQT: ?>
 个问题再进行安装</div>
                        <?php  goto uX8eU; ki4kk: echo error_counter(0); goto F9gQT; uX8eU: } else { if (!env_writable()) { ?>
                            <div class="ub-alert danger ub-text-center">/.env文件不可写，请手动配置安装</div>
                        <?php  } else { goto lcw9b; qo4Pv: ?>
                                <a href="javascript:;" class="btn btn-primary btn-lg btn-round" onclick="switch_step('form')">
                                    下一步
                                </a>
                            </div>
                        <?php  goto RDgeU; EyByp: if (defined('LICENSE_URL')) { ?>
                                    <a href="javascript:;" class="btn btn-lg btn-round" onclick="switch_step('license')">
                                        上一步
                                    </a>
                                <?php  } goto qo4Pv; lcw9b: ?>
                            <div style="display:none;margin-top:0.5rem;" data-step-env-next>
                                <?php  goto EyByp; RDgeU: } } goto xJZjr; IlQfI: text_warning('安装路径为 public/install.php ，可能设置错了网站根目录，请仔细检查', 'https://modstart.com/doc/install/start.html#%E5%8F%82%E8%80%83%E9%85%8D%E7%BD%AE'); goto fiP6m; pV8n0: echo htmlspecialchars(get_env_config('db_prefix')); goto Zo7R0; gn9sR: text_success('最大上传：' . FileUtil::formatByte(EnvUtil::env('uploadMaxSize'))); goto aMqca; AJfS9: ?>
"/>
                                </div>
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 用户名</label>
                                    <input type="text" style="width:100%;" name="db_username"
                                           value="<?php  goto Cs9uq; wLCmn: class_exists('pdo') && in_array('mysql', PDO::getAvailableDrivers()) ? text_success('PHP PDO mysql 驱动') : text_error('缺少 PHP PDO mysql 驱动'); goto Vpsak; RKnYd: if (defined('LICENSE_URL')) { goto kpt2j; kpt2j: ?>
                    <div class="step-content-item active" data-step="license">
                        <div class="content-item-body">
                            <iframe src="<?php  goto c3eRO; cBeQ5: ?>
"></iframe>
                        </div>
                        <div class="content-item-foot">
                            <div>
                                <div style="color:red;padding-bottom:1rem;">
                                    禁止使用本产品进行违法违规业务，我们将对违规使用者停止授权并永久封停账号
                                </div>
                                <label style="border:none;margin-top:-10px;margin-right:0;padding-right:0;">
                                    <input type="checkbox" name="installLicense" style="vertical-align:middle;margin-right:0.2rem;" value="1"/>
                                    我已阅读协议并同意所有内容
                                </label>
                            </div>
                            <div style="margin-top:0.5rem;">
                                <a href="javascript:;" class="btn btn-primary btn-lg btn-round" onclick="doStepEnv()">
                                    下一步
                                </a>
                            </div>
                            <script>
                                function doStepEnv(){
                                    if(!$('[name="installLicense"]').is(':checked')){
                                        window.api.dialog.tipError('请先同意协议');
                                        return false;
                                    }
                                    switch_step('env');
                                    return false;
                                }
                            </script>
                        </div>
                    </div>
                <?php  goto PBaow; c3eRO: echo LICENSE_URL; goto cBeQ5; PBaow: } goto CvGKD; xJZjr: ?>
                    </div>
                </div>
                <div class="step-content-item ub-form" data-step="form">
                    <div class="content-item-body">
                        <div class="ub-panel" style="background:#F8F8F8;">
                            <div class="head">
                                <div class="title">
                                    <i class="iconfont icon-credit"></i>
                                    MySQL数据库
                                </div>
                            </div>
                            <div class="body">
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 主机</label>
                                    <input type="text" style="width:100%;" name="db_host"
                                           value="<?php  goto IqGat; P3ceQ: ?>
" />
                            <a href="javascript:;" onclick="switch_step('env')" class="btn btn-lg btn-round">
                                上一步
                            </a>
                            <a href="javascript:;" onclick="doSubmit();" class="btn btn-primary btn-lg btn-round">
                                确定安装
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php  goto IWr1q; U5CEk: function_exists('token_get_all') ? text_success('PHP tokenizer 扩展') : text_error('缺少 PHP tokenizer 扩展'); goto ZEqK7; Cs9uq: echo htmlspecialchars(get_env_config('db_username')); goto HuSPR; CvGKD: ?>
                <div class="step-content-item <?php  goto YuCjF; FWQyh: ?>
                            <?php  goto IYiX7; bsN24: ?>
"/>
                                </div>
                                <div class="line">
                                    <label class="label">数据表前缀</label>
                                    <input type="text" style="width:100%;" name="db_prefix"
                                           value="<?php  goto pV8n0; Rcb64: ?>
                            <?php  goto x1WfU; hj0hK: ?>
</div>
                                <div class="status error ub-alert warning" style="display:none;">
                                    <div>- 配置Nginx/Apache，保证访问 <a href="/install/ping" target="_blank">/install/ping</a> 出现 ok 字样。</div>
                                </div>
                            </div>
                            <div data-public-install-path-warning style="display:none;">
                                <?php  goto IlQfI; SbI1a: ?>
                            <?php  goto gn9sR; xsDLs: ?>
                            <?php  goto wLCmn; q4Hq2: echo htmlspecialchars(get_env_config('admin_password')); goto yG6sE; HuSPR: ?>
"/>
                                </div>
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 密码</label>
                                    <input type="text" style="width:100%;" name="db_password"
                                           value="<?php  goto FSzCZ; G3r7C: ?>
                            <?php  goto i8X0X; x1WfU: function_exists('openssl_open') ? text_success('PHP openssl 扩展') : text_error('缺少 PHP openssl 扩展'); goto y67LB; siofF: function_exists('proc_get_status') ? text_success('proc_get_status 函数') : text_error('缺少 proc_get_status 函数', 'https://modstart.com/doc/install/qa.html'); goto r5EmP; NLVOJ: ?>
"/>
                                </div>
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 数据库名</label>
                                    <input type="text" style="width:100%;" name="db_database"
                                           value="<?php  goto qMM77; f4cc9: ?>
"/>
                                </div>
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 密码</label>
                                    <input type="text" style="width:100%;" name="password"
                                           placeholder="<?php  goto q4Hq2; r5EmP: ?>
                            <?php  goto CNp1F; G7Tzf: class_exists('ZipArchive') ? text_success('PHP zip 扩展') : text_error('缺少 PHP zip 扩展'); goto Rcb64; mM5hF: echo htmlspecialchars(get_env_config('admin_username')); goto f4cc9; qMM77: echo htmlspecialchars(get_env_config('db_name')); goto AJfS9; woo4P: function_exists('finfo_file') ? text_success('PHP fileinfo 扩展') : text_error('缺少 PHP fileinfo 扩展'); goto G3r7C; ZEqK7: ?>
                            <?php  goto woo4P; SjRmf: if (!empty($SLv7T)) { goto TY8QM; euDJ3: ?>
                                </div>
                            </div>
                        <?php  goto AI01R; m39OA: if (!empty($SLv7T['envs'])) { goto Ibe4p; SzBTo: foreach ($SLv7T['envs'] as $nbbkt) { goto eKCRI; c2Igy: echo $nbbkt['desc']; goto u3I8T; M23iq: ?>
" value="<?php  goto PDsL3; MM6nk: ?>
" />
                                                    <div class="help"><?php  goto c2Igy; u3I8T: ?>
</div>
                                                </div>
                                            </div>
                                        <?php  goto M5nk4; PDsL3: echo htmlspecialchars($nbbkt['default']); goto MM6nk; ySS0r: echo htmlspecialchars($nbbkt['label']); goto Hlfzt; Hlfzt: ?>
</div>
                                                <div class="field">
                                                    <input class="form" type="text" name="<?php  goto u8Qcd; u8Qcd: echo $nbbkt['name']; goto M23iq; eKCRI: ?>
                                            <div class="line">
                                                <div class="label"><span class="ub-text-danger">*</span> <?php  goto ySS0r; M5nk4: } goto bshdM; Ibe4p: ?>
                                        <?php  goto SzBTo; bshdM: ?>
                                    <?php  goto PAwjE; PAwjE: } goto euDJ3; TY8QM: ?>
                            <div class="ub-panel" style="background:#F8F8F8;">
                                <div class="head">
                                    <div class="title">
                                        <i class="iconfont icon-cog"></i>
                                        应用配置信息
                                    </div>
                                </div>
                                <div class="body">
                                    <?php  goto m39OA; AI01R: } goto TOkqL; wmzFM: ?>
"/>
                                </div>
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 端口</label>
                                    <input type="text" style="width:100%;" name="db_port"
                                           value="<?php  goto KIdfa; X5hal: ?>
                            <?php  goto G7Tzf; JWZwe: ?>
                            <?php  goto W3UBc; lrnyz: ?>
                            <?php  goto U5CEk; KIdfa: echo htmlspecialchars(get_env_config('db_port')); goto NLVOJ; ISQyx: ?>
" data-step="env">
                    <i class="iconfont icon-desktop"></i>
                    环境检查
                </a>
                <i class="iconfont icon-angle-right"></i>
                <a href="javascript:;" data-step="form">
                    <i class="iconfont icon-cog"></i>
                    配置安装
                </a>
            </div>
            <div class="step-content">
                <?php  goto RKnYd; DJfXN: if (!defined('LICENSE_URL')) { echo 'active'; } goto ISQyx; Vg5pI: ?>
</div>
                                <div class="status error" style="display:none;"><?php  goto Qq5U7; HJRl9: echo INSTALL_APP_NAME . ' V' . INSTALL_APP_VERSION; goto UueJp; qW3k2: is_dir_really_writable(APP_PATH . '/bootstrap/cache/') ? text_success('/bootstrap/cache/目录可写') : text_error('/bootstrap/cache/目录不可写'); goto br0nN; y3Su1: ?>
                            <?php  goto EakZG; CNp1F: if (version_compare(PHP_VERSION, '5.6.0', 'ge') && version_compare(PHP_VERSION, '5.7.0', 'lt')) { goto oL1Xf; DOAg5: EnvUtil::iniFileConfig('always_populate_raw_post_data') == '-1' ? text_success('验证 always_populate_raw_post_data=-1') : text_error('请配置 always_populate_raw_post_data=-1', 'https://modstart.com/doc/install/qa.html'); goto yI7Bm; yI7Bm: ?>
                            <?php  goto paKnB; oL1Xf: ?>
                                <?php  goto DOAg5; paKnB: } goto FWQyh; IqGat: echo htmlspecialchars(get_env_config('db_host')); goto wmzFM; ELAnF: ?>
                <a href="javascript:;" class="<?php  goto DJfXN; Vpsak: ?>
                            <?php  goto CEgTM; Qq5U7: text_error('Rewrite规则错误', 'https://modstart.com/doc/install/qa.html#q-rewrite%E8%A7%84%E5%88%99', false); goto hj0hK; br0nN: ?>
                            <div data-rewrite-check>
                                <div class="status loading"><div class="ub-alert">Rewrite规则检测中...</div></div>
                                <div class="status success" style="display:none;"><?php  goto C86SS; DPQGT: text_success('系统：' . PHP_OS); goto JWZwe; yG6sE: ?>
"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-item-foot">
                        <?php  goto eQuWx; D34Y3: function_exists('exif_read_data') ? text_success('PHP exif 扩展') : text_error('缺少 PHP exif 扩展'); goto y3Su1; Zo7R0: ?>
"/>
                                </div>
                            </div>
                        </div>
                        <?php  goto SjRmf; v7wff: ?>
                            <?php  goto ZaKaI; FSzCZ: echo htmlspecialchars(get_env_config('db_password')); goto bsN24; aMqca: ?>
                            <?php  goto a8kju; a8kju: function_exists('curl_init') ? text_success('PHP curl 扩展') : text_error('缺少 PHP curl 扩展'); goto X5hal; E5qA2: function_exists('putenv') ? text_success('putenv 函数') : text_error('缺少 putenv 函数', 'https://modstart.com/doc/install/qa.html'); goto wjQwP; EakZG: function_exists('bcmul') ? text_success('PHP bcmath 扩展') : text_error('缺少 PHP bcmath 扩展'); goto v7wff; kFlAe: ?>
                            <?php  goto E5qA2; i8X0X: function_exists('proc_open') ? text_success('proc_open 函数') : text_error('缺少 proc_open 函数', 'https://modstart.com/doc/install/qa.html'); goto kFlAe; LBueo: ?>
                        <div style="margin-top:0.5rem;">
                            <input type="hidden" name="installLicense" value="1"/>
                            <input type="hidden" name="INSTALL_CONFIG" value="<?php  goto P2sD1; fiP6m: ?>
                            </div>
                            <script>
                                if(window.location.href.indexOf('public/install.php')>0){
                                    document.querySelector('[data-public-install-path-warning]').style.display = 'block';
                                }
                            </script>
                        </div>
                    </div>
                    <div class="content-item-foot">
                        <?php  goto EDnjN; Ns9DJ: is_dir_really_writable(APP_PATH . '/storage/') ? text_success('/storage/目录可写') : text_error('/storage/目录不可写'); goto D8ntI; G3m11: if (defined('LICENSE_URL')) { ?>
                    <a href="javascript:;" class="active" data-step="license">
                        <i class="iconfont icon-file"></i>
                        安装协议
                    </a>
                    <i class="iconfont icon-angle-right"></i>
                <?php  } goto ELAnF; iYnW0: ?>
" data-step="env">
                    <div class="content-item-body">
                        <div style="margin:0 auto;">
                            <?php  goto DPQGT; fHizh: ?>
                            <?php  goto Ns9DJ; P2sD1: echo htmlspecialchars(json_encode(isset($SLv7T) ? $SLv7T : null)); goto P3ceQ; YuCjF: if (!defined('LICENSE_URL')) { echo 'active'; } goto iYnW0; QGwgQ: ?>
                            <?php  goto qW3k2; D8ntI: ?>
                            <?php  goto bSLhn; W3UBc: php_version_ok() ? text_success('PHP版本 ' . PHP_VERSION) : text_error('PHP版本要求（' . php_version_requires() . '） 当前为 ' . PHP_VERSION); goto SbI1a; UueJp: ?>
 安装
        </h1>
        <div class="pb-installer-box">
            <div class="step-menu">
                <?php  goto G3m11; CEgTM: function_exists('mb_internal_encoding') ? text_success('PHP mbstring 扩展') : text_error('缺少 PHP mbstring 扩展'); goto lrnyz; y67LB: ?>
                            <?php  goto D34Y3; wjQwP: ?>
                            <?php  goto siofF; IWr1q: } goto kSTxt; GZTMC: ?>
<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <script src="/asset/vendor/jquery.js?<?php  goto mQ0KZ; LXczE: ?>
 安装助手</title>
    <style type="text/css">
        body, html {
            min-height: 100%;
        }
        body {
            background-image:url("data:image/svg+xml;base64,<?php  goto sEmP1; uyT83: ?>
">
    <link rel="stylesheet" href="/asset/theme/default/style.css?<?php  goto YR9JS; bRyej: ?>
">
    <link rel="stylesheet" href="/asset/layui/css/layui.css?<?php  goto ghm9H; ZAs3d: ?>
">
    <title><?php  goto K6Wy8; I8hnC: echo time(); goto HfX_k; jhQkL: ?>
"></script>
    <link rel="stylesheet" href="/asset/vendor/iconfont/iconfont.css?<?php  goto p8TrR; K6Wy8: echo INSTALL_APP_NAME . ' V' . INSTALL_APP_VERSION; goto LXczE; stcti: ?>
"></script>
    <script src="/asset/common/base.js?<?php  goto I8hnC; kSTxt: ?>
</div>
<script>
    function switch_step(name){
        $('.pb-installer-box .step-content .step-content-item').removeClass('active');
        $('.pb-installer-box .step-content .step-content-item[data-step='+name+']').addClass('active');
        $('.pb-installer-box .step-menu a').removeClass('active');
        $('.pb-installer-box .step-menu a[data-step='+name+']').addClass('active');
        return false;
    }
    $(function () {
        var $rewriteCheck = $('[data-rewrite-check]');
        $.ajax({
            url: '/install/ping?'+Math.random(),
            type: 'GET',
            success: function(data){
                if('ok'===data){
                    $rewriteCheck.find('.status').hide().filter('.success').show();
                    $('[data-step-env-next]').show();
                }else{
                    $rewriteCheck.find('.status').hide().filter('.error').show();
                }
            },
            error: function(data) {
                $rewriteCheck.find('.status').hide().filter('.error').show();
            }
        });
        window.doSubmit = function(){
            var data = {};
            var $form = $('.ub-form');
            $form.find('input[type=text],input[type=hidden]').each(function(i,o){
                data[$(o).attr('name')] = $(o).val();
            });
            $form.find('input[type=checkbox]:checked').each(function(i,o){
                data[$(o).attr('name')] = $(o).val();
            });
            window.api.dialog.loadingOn('正在提交表单..');
            window.api.base.post('/install/prepare',data,function(res){
                window.api.dialog.loadingOff();
                window.api.base.defaultFormCallback(res, {
                    success: function (res) {
                        window.api.dialog.loadingOn('正在安装系统，可能需要较长时间，请耐心等待...');
                        window.api.base.post('/install/execute',data,function(res){
                            window.api.dialog.loadingOff();
                            window.api.base.defaultFormCallback(res);
                        });
                    }
                })
            });
            return false;
        };
    });
</script>
</body>
</html>