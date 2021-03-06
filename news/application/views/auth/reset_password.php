<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="wrapper light-wrapper page-title-wrapper">
		<div class="space100"></div>
      	<div class="container inner text-center">
        <h1 class="page-title"><?php echo html_escape($title); ?></h1>
        <p class="lead">Aenean lacinia bibendum nulla sed consectetur</p>
      </div>
<!-- Section: main -->
<section id="main">
    <div class="container">
        <div class="row">

            <div class="page-content">
                <div class="col-xs-12 col-sm-6 col-md-4 center-box">
                    <div class="content page-contact page-login">

                        <h1 class="page-title text-center"><?php echo html_escape($title); ?></h1>

                        <!-- include message block -->
                        <?php $this->load->view('partials/_messages'); ?>
                        <!-- form start -->
                        <?php echo form_open('auth_controller/reset_password_post', ['id' => 'form_validate']); ?>

                        <?php if (!empty($user)): ?>
                            <input type="hidden" name="id" value="<?php echo $user->id; ?>">
                        <?php endif; ?>
                        <?php if (!empty($success)): ?>
                            <div class="form-group m-t-30">
                                <a href="<?php echo lang_base_url(); ?>login" class="btn btn-md btn-custom btn-block"><?php echo trans("login"); ?></a>
                            </div>
                        <?php else: ?>
                            <div class="form-group">
                                <label><?php echo trans("new_password"); ?></label>
                                <input type="password" name="password" class="form-control form-input" value="<?php echo old("password"); ?>" placeholder="<?php echo trans("new_password"); ?>" required>
                            </div>
                            <div class="form-group m-b-30">
                                <label><?php echo trans("confirm_password"); ?></label>
                                <input type="password" name="password_confirm" class="form-control form-input" value="<?php echo old("password_confirm"); ?>" placeholder="<?php echo trans("confirm_password"); ?>" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-md btn-custom btn-block"><?php echo trans("submit"); ?></button>
                            </div>
                        <?php endif; ?>

                        <?php echo form_close(); ?>
                        <!-- form end -->
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- /.Section: main -->
</div>