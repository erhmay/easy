<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<h1>Шинэ оюутны бүртгэл</h1>

<form class="submit_form main_form" action="<?php echo url_for('student/register') ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

        <fieldset>
            <legend></legend>
            <p><?php echo $form['username']->renderError() ?></p>
            <p>
                <?php echo $form['username']->renderLabel() ?>
                <?php echo $form['username']->render(array('class' => 'text')) ?>
            </p>
            <p><?php echo $form['last_name']->renderError() ?></p>
            <p class="optional">
                <?php echo $form['last_name']->renderLabel() ?>
                <?php echo $form['last_name']->render(array('class' => 'text')) ?>
            </p>
            <p><?php echo $form['first_name']->renderError() ?></p>
            <p class="optional">
                <?php echo $form['first_name']->renderLabel() ?>
                <?php echo $form['first_name']->render(array('class' => 'text')) ?>
            </p>
        </fieldset>

        <fieldset>
            <legend></legend>
            <p><?php echo $form['email']->renderError() ?></p>
            <p>
                <?php echo $form['email']->renderLabel() ?>
                <?php echo $form['email']->render(array('class' => 'text')) ?>
            </p>
            <p><?php echo $form['address']->renderError() ?></p>
            <p>
                <?php echo $form['address']->renderLabel() ?>
                <?php echo $form['address'] ?>
            </p>
        </fieldset>

        <p><input type="submit" class="submit" name="register_submit" value="Submit →"></p>

        <div class="clear"></div>

</form>
