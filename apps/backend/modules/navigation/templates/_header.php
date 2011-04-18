<ul id="navigation">
    <li><span class="<?php echo $sf_request->getParameter('module') == 'page' ? 'active': '' ?>"><a href="<?php echo url_for('page/index') ?>">Page</a></span></li>
    <li><a href="#">News</a></li>
    <li><a href="#">Company</a></li>
    <li><a href="#">Users</a></li>
</ul>