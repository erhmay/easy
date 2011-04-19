
<?php foreach ($jobs as $job): ?>
<?php
    $type = Doctrine::getTable('Job')->getI18nType($job->getType());
?>
    <ul>
        <li class="type"><span class="<?php echo $job->getType() ?>"><?php echo $type ?></span></li>
        <li class="title"><strong><a href="<?php echo url_for('job/show?id='.$job->getId()) ?>"><?php echo $job->getPosition() ?></a></strong><a href="#"><?php echo $job->getCompany() ?></a></li>
        <li class="location"><strong><?php echo $job->getPosition() ?></strong></li>
        <li class="date"><strong><?php echo date('Y-m-d', strtotime($job->getCreatedAt())) ?></strong></li>
    </ul>
<?php endforeach; ?>
