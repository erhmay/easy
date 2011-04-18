<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form class="submit_form main_form" action="<?php echo url_for('job/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

        <fieldset>
            <legend>Компани дэлгэрэнгүй</legend>
            <p><?php echo $form['company']->renderError() ?></p>
            <p>
                <?php echo $form['company']->renderLabel() ?>
                <?php echo $form['company']->render(array('class' => 'text')) ?>
            </p>
            <p><?php echo $form['url']->renderError() ?></p>
            <p class="optional">
                <?php echo $form['url']->renderLabel() ?>
                <?php echo $form['url']->render(array('class' => 'text')) ?>
            </p>
            <p><?php echo $form['logo']->renderError() ?></p>
            <p class="optional">
                <?php echo $form['logo']->renderLabel() ?>
                <?php echo $form['logo'] ?>
            </p>
        </fieldset>

        <fieldset>
            <legend>Ажлын байрны дэлгэрэнгүй</legend>
            <p><?php echo $form['position']->renderError() ?></p>
            <p>
                <?php echo $form['position']->renderLabel() ?>
                <?php echo $form['position']->render(array('class' => 'text')) ?>
            </p>
            <p><?php echo $form['type']->renderError() ?></p>
            <p>
                <?php echo $form['type']->renderLabel() ?>
                <?php echo $form['type'] ?>
            </p>
            <p><?php echo $form['category_id']->renderError() ?></p>
            <p class="optional">
                <?php echo $form['category_id']->renderLabel() ?>
                <?php echo $form['category_id'] ?>
            </p>
        </fieldset>

        <fieldset>
            <legend><?php echo $form['description']->renderLabel() ?></legend>
            <p>
                <?php echo $form['description']->renderError() ?>
            </p>
            <p>
                <?php echo $form['description'] ?>
            </p>
        </fieldset>

        <fieldset>
            <legend><?php echo $form['how_to_apply']->renderLabel() ?></legend>
            <p>
                <?php echo $form['how_to_apply']->renderError() ?>
            </p>
            <p>
                <?php echo $form['how_to_apply'] ?>
            </p>
        </fieldset>

        <p><input type="submit" class="submit" name="job_submit" value="Submit →"></p>

        <div class="clear"></div>

</form>
