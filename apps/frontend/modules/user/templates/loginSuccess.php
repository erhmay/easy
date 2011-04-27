<div class="col-2">
    <h2>Та бүртгэлтэй юу?</h2>
    <form class="account_form" method="post" action="<?php echo url_for('user/login') ?>">
        <?php echo $form->renderHiddenFields() ?>
        <?php echo $form->renderGlobalErrors() ?>
        <p>
            <?php echo $form['username']->renderLabel() ?><br>
            <?php echo $form['username']->render(array('id' =>'login_username', 'class' => 'text')) ?>
        </p>
        <p>
            <?php echo $form['password']->renderLabel() ?><br>
            <?php echo $form['password']->render(array('id' =>"login_password", 'class' => 'text')) ?>
        </p>
        <p>
            
           <input type="submit" class="submit" name="job_submit" value="Submit →">
            <!--
            <a title="Password Lost and Found" href="http://www.appthemes.com/demo/jobroller/wp-login.php?action=lostpassword" class="lostpass">Lost your password?</a>
            !-->
        </p>
    </form>
</div>