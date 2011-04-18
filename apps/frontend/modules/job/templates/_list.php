
<?php foreach ($jobs as $job): ?>
    <ul>
        <li class="type"><span class="<?php echo $job->getType() ?>"><?php echo $job->getType() ?></span></li>
        <li class="title"><strong><a href="#"><?php echo $job->getPosition() ?></a></strong><a href="#"><?php echo $job->getCompany() ?></a></li>
        <li class="location"><strong><?php echo $job->getPosition() ?></strong></li>
        <li class="date"><strong><?php echo date('Y-m-d', strtotime($job->getCreatedAt())) ?></strong></li>
    </ul>
<?php endforeach; ?>
