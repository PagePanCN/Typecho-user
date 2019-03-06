<?php
if (!defined('__TYPECHO_ADMIN__')) {
    exit;
}

$header = '<link rel="stylesheet" href="' . Typecho_Common::url('normalize.css?v=' . $suffixVersion, $options->adminStaticUrl('css')) . '">
<link rel="stylesheet" href="' . Typecho_Common::url('grid.css?v=' . $suffixVersion, $options->adminStaticUrl('css')) . '">
<link rel="stylesheet" href="' . Typecho_Common::url('style.css?v=' . $suffixVersion, $options->adminStaticUrl('css')) . '">
<!--[if lt IE 9]>
<script src="' . Typecho_Common::url('html5shiv.js?v=' . $suffixVersion, $options->adminStaticUrl('js')) . '"></script>
<script src="' . Typecho_Common::url('respond.js?v=' . $suffixVersion, $options->adminStaticUrl('js')) . '"></script>
<![endif]-->';

/** 注册一个初始化插件 */
$header = Typecho_Plugin::factory('admin/header.php')->header($header);
?><!DOCTYPE HTML>
<html class="no-js">
    <head>
        <meta charset="<?php $options->charset(); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php _e('%s - %s - Powered by Typecho', $menu->title, $options->title); ?></title>
        <meta name="robots" content="noindex, nofollow">
        <?php echo $header; ?>
		<?php if($user->group != "administrator"): ?>
        <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="<?php $options->siteUrl(); ?>/user/user.css?v=1.0">
        <script>
		var UserLink="<?php $options->adminUrl('profile.php'); ?>";
		var UserPic="<?php echo Typecho_Common::gravatarUrl($user->mail, 100, 'X', 'mm', $request->isSecure()); ?>";
		var SiteLink="<?php $options->siteUrl(); ?>";
		var UserName="<?php $user->screenName(); ?>";
        var UserGroup="<?php $user->group(); ?>";
        var SiteName="<?php $options->title(); ?>";
		</script>
        <script src="<?php $options->siteUrl(); ?>/user/user.js?v=1.0"></script>
        <?php if($menu->title == "网站概要"): ?>
        <style>
			.typecho-page-main div:nth-child(4){display:none;}
		</style>
        <?php endif; ?>
		<?php endif; ?>
        
		
    </head>
    <body<?php if (isset($bodyClass)) {echo ' class="' . $bodyClass . '"';} ?>>
    <!--[if lt IE 9]>
        <div class="message error browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
    <![endif]-->
