<h1>Jobs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>Type</th>
      <th>Company</th>
      <th>Logo</th>
      <th>Url</th>
      <th>Position</th>
      <th>Location</th>
      <th>Description</th>
      <th>How to apply</th>
      <th>Token</th>
      <th>Is public</th>
      <th>Is activated</th>
      <th>Email</th>
      <th>Expires at</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobs as $job): ?>
    <tr>
      <td><a href="<?php echo url_for('job/show?id='.$job->getId()) ?>"><?php echo $job->getId() ?></a></td>
      <td><?php echo $job->getCategoryId() ?></td>
      <td><?php echo $job->getType() ?></td>
      <td><?php echo $job->getCompany() ?></td>
      <td><?php echo $job->getLogo() ?></td>
      <td><?php echo $job->getUrl() ?></td>
      <td><?php echo $job->getPosition() ?></td>
      <td><?php echo $job->getLocation() ?></td>
      <td><?php echo $job->getDescription() ?></td>
      <td><?php echo $job->getHowToApply() ?></td>
      <td><?php echo $job->getToken() ?></td>
      <td><?php echo $job->getIsPublic() ?></td>
      <td><?php echo $job->getIsActivated() ?></td>
      <td><?php echo $job->getEmail() ?></td>
      <td><?php echo $job->getExpiresAt() ?></td>
      <td><?php echo $job->getCreatedAt() ?></td>
      <td><?php echo $job->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('job/new') ?>">New</a>
