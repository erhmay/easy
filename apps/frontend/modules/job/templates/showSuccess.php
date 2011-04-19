<h3 style="float: left;">
    <?php echo $job->getPosition() ?>
</h3>
<?php $type = Doctrine::getTable('Job')->getI18nType($job->getType()); ?>
<div class="type" style="float: right;">
    <span class="<?php echo $job->getType() ?>"><?php echo $type ?></span>
</div>

<div class="clear"></div>

<div class="category">
    <?php echo $job->getCategoryId() ?>
</div>

<div class="content">
    <div class="logo" style="float: left; width: 120px;"><img src="/uploads/logo/<?php echo $job->getLogo() ?>" alt="" /></div>
    <?php echo $job->getCompany() ?>
    <div class="description" style="float: left;"> <p><?php echo $job->getDescription() ?></p></div>
    <br />
    <?php echo $job->getHowToApply() ?>
</div>


<div class="contact">
    <?php echo $job->getUrl() ?>
    
    <?php echo $job->getLocation() ?>

    <?php echo $job->getEmail() ?>
</div>