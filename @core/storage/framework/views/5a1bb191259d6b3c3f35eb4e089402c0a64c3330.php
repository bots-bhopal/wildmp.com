
<div class="header-style-03  header-variant-08">
    <nav class="navbar navbar-area nav-absolute navbar-expand-lg nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="<?php echo e(url('/')); ?>" class="logo">
                        
                        <?php if(!empty(filter_static_option_value('site_logo', $global_static_field_data))): ?>
                            
                            <?php echo render_image_markup_by_attachment_id(filter_static_option_value('site_logo', $global_static_field_data)); ?>

                        <?php else: ?>
                            <h2 class="site-title">
                                <?php echo e(filter_static_option_value('site_' . $user_select_lang_slug . '_title', $global_static_field_data)); ?>

                            </h2>
                        <?php endif; ?>
                    </a>
                </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    <?php echo render_frontend_menu($primary_menu); ?>

                </ul>
            </div>
            
        </div>
    </nav>
</div>
<?php /**PATH C:\xampp\htdocs\wildmp.com\@core\resources\views/frontend/partials/navbar-variant/navbar-01.blade.php ENDPATH**/ ?>