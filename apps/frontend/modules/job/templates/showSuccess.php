<h3 style="float: left;">
    <?php echo $job->getPosition() ?>
</h3>
<?php $type = Doctrine::getTable('Job')->getI18nType($job->getType()); ?>
<div class="type" style="float: right;">
    <span class="<?php echo $job->getType() ?>"><?php echo $type ?></span>
</div>

<div class="clear"></div>
<div class="category">
    Хэвлэгдсэн: <i><?php echo date('Y-m-d', strtotime($job->getCreatedAt())) ?></i><br />
    Төрөл: <i><?php echo $job->getJobCategory() ?></i><br />
    Ажил олгогч: <i><?php echo $job->getCompany() ?></i><br />
</div>
<br />

<div class="content">
    <div class="logo" style="float: left; width: 120px;"><img src="/uploads/logo/<?php echo $job->getLogo() ?>" alt="" /></div>
    
    <div class="description" style="float: left;"> <p><?php echo $job->getDescription() ?></p></div>
    <br />
    <h3>Хэрхэн холбоо барих</h3>
    <div class="how_to_apply" style="margin-top:5px;">
        <?php echo $job->getHowToApply() ?>
    </div>
</div>


<div class="contact">
    <?php echo $job->getUrl() ?>
    
    <?php echo $job->getLocation() ?>

    <?php echo $job->getEmail() ?>
</div>