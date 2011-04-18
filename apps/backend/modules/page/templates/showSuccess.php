<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $page->getId() ?></td>
    </tr>
    <tr>
      <th>Parent:</th>
      <td><?php echo $page->getParentId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $page->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $page->getDescription() ?></td>
    </tr>
    <tr>
      <th>Is visible:</th>
      <td><?php echo $page->getIsVisible() ?></td>
    </tr>
    <tr>
      <th>Show on homepage:</th>
      <td><?php echo $page->getShowOnHomepage() ?></td>
    </tr>
    <tr>
      <th>Is featured:</th>
      <td><?php echo $page->getIsFeatured() ?></td>
    </tr>
    <tr>
      <th>Is clickable:</th>
      <td><?php echo $page->getIsClickable() ?></td>
    </tr>
    <tr>
      <th>Link:</th>
      <td><?php echo $page->getLink() ?></td>
    </tr>
    <tr>
      <th>Image:</th>
      <td><?php echo $page->getImage() ?></td>
    </tr>
    <tr>
      <th>Lft:</th>
      <td><?php echo $page->getLft() ?></td>
    </tr>
    <tr>
      <th>Rgt:</th>
      <td><?php echo $page->getRgt() ?></td>
    </tr>
    <tr>
      <th>Level:</th>
      <td><?php echo $page->getLevel() ?></td>
    </tr>
    <tr>
      <th>Sort order:</th>
      <td><?php echo $page->getSortOrder() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $page->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $page->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('page/edit?id='.$page->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('page/index') ?>">List</a>
