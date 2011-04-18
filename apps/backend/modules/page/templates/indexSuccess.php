<div class="grid_11">
    <h2>Page</h2>
    <table>
        <thead>
            <tr>
                <th>Parent</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $page): ?>
                <tr>
                    <td><?php echo $page->getParentId() ?></td>
                    <td><a href="<?php echo url_for('page/show?id=' . $page->getId()) ?>"><?php echo $page->getName() ?></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>


    </div>
<?php include_partial('rightBar') ?>
