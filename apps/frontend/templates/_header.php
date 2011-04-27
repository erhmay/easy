<div id="topnav">
<ul>
    <?php if ($sf_user->isAuthenticated()): ?>
    <li><a href="<?php echo url_for('user/logout') ?>">Гарах</a></li>
    <li><a href="#">Сайн байна уу <?php echo $sf_user->getInstance()->getFirstName() ?></a></li>
    <?php else: ?>
            <li><a href="<?php echo url_for('user/register') ?>">Бүртгүүлэх</a></li>
            <li><a href="<?php echo url_for('user/login') ?>">Нэвтрэх</a></li>
    <?php endif; ?>
</ul>
</div><!-- topnav end -->

<div id="header">
<div id="logo"><h1>Student job search web site</h1></div>
<ul>
<li><a href="<?php echo url_for('homepage') ?>">Нүүр</a></li>
<li><a href="#">Төвийн тухай</a></li>
<li><a href="#">Зөвлөгөө</a></li>
<li><a href="#">Сургалт</a></li>
<li><a href="#">Таньд хэрэгтэй</a></li>
<li><a href="#">Холбоо барих</a></li>
</ul>
<div class="clear"></div>
</div><!-- header end -->

<div class="flash">
    <?php if($sf_user->hasFlash('success')): ?>
    <div class="success">
        <?php echo $sf_user->getFlash('success') ?>
    </div>
    <?php elseif($sf_user->hasFlash('error')): ?>
    <div class="error">
        <?php echo $sf_user->getFlash('error') ?>
    </div>
    <?php elseif($sf_user->hasFlash('notice')): ?>
    <div class="notice">
        <?php echo $sf_user->getFlash('notice') ?>
    </div>
    <?php endif; ?>
</div>
