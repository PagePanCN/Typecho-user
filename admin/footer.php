<?php if(!defined('__TYPECHO_ADMIN__')) exit; ?>
		<?php if($user->group != "administrator"): ?>
    <script>
        var UserLink="<?php $options->adminUrl('profile.php'); ?>";
        var UserPic="<?php $email =$user->mail; if($email){if(strpos($email,'@qq.com') !==false){$email=str_replace('@qq.com','',$email);echo '//q1.qlogo.cn/g?b=qq&nk='.$email.'&';}else{$email= md5($email);echo '//cdn.v2ex.com/gravatar/'.$email.'?';}}else{echo '//cdn.v2ex.com/gravatar/null?';} ?>";
        var AdminLink="<?php $options->adminUrl(); ?>";
        var SiteLink="<?php $options->siteUrl(); ?>";
        var UserName="<?php $user->screenName(); ?>";
        var UserGroup="<?php $user->group(); ?>";
        var SiteName="<?php $options->title(); ?>";
        var MenuTitle="<?php $menu->title(); ?>";
    </script>
		<script src="<?php $options->siteUrl(); ?>/user/user.js?v=1.02"></script>
		<?php endif; ?>
    </body>
</html>
<?php
/** 注册一个结束插件 */
Typecho_Plugin::factory('admin/footer.php')->end();
