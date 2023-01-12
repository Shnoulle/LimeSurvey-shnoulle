<?php
/**
 * Forgot your password
 */

?>
<noscript>If you see this you have probably JavaScript deactivated. LimeSurvey does not work without Javascript being
    activated in the browser!
</noscript>
<div class="container-fluid welcome">
    <div class="row text-center">
        <div id="login-panel">
            <div class="card card-primary login-panel" id="panel-1">
                <div class="container-fluid">
                    <!-- Header -->
                    <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img alt="logo" id="profile-img" class="profile-img-card img-fluid mx-auto" src="<?php echo LOGO_URL;?>" />
                    </div>
                        </div>

                        <!-- Action Name -->
                        <div class="row login-title login-content">
                            <div class="col-12">
                                <h3><?php
                                    eT('Recover your password'); ?></h3>
                            </div>
                        </div>

                        <!-- Form -->
                        <?php
                        echo CHtml::form(
                            array("admin/authentication/sa/forgotpassword"),
                            'post',
                            array('id' => 'forgotpassword', 'name' => 'forgotpassword')
                        ); ?>
                        <div class="row login-content login-content-form">
                            <div class="col-12">
                                <div class="alert alert-info" role="alert">
                                    <?php
                                    eT(
                                        'To receive a new password by email you have to enter your user name and original email address.'
                                    ); ?>
                                </div>
                                <span>
                                <label for="user"><?php
                                    eT('Username'); ?></label>
                                <input name="user" id="user" type="text" size="40" maxlength="64" class="form-control"
                                       value=""/>
                            </span>
                                <span>
                                <label for="email"><?php
                                    eT('Email address'); ?>

                                </label><input name="email" id="email" type="email" size="40" maxlength="254"
                                               class="form-control" value=""/>
                            </span>

                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="row login-submit login-content">
                            <div class="col-12">
                                <input type="hidden" name="action" value="forgotpass"/>
                                <input class="action btn btn-outline-secondary" type="submit" value="<?php
                                eT('Check data'); ?>"/>
                                <br/><br/>
                                <a href="<?php
                                echo $this->createUrl("/admin"); ?>"><?php
                                    eT('Main Admin Screen'); ?></a>
                            </div>

                        </div>
                        <?php
                        echo CHtml::endForm(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
