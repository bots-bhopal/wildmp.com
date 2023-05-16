<?php echo $__env->make('frontend.partials.homesupportbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
$home_page_variant = $home_page ?? filter_static_option_value('home_page_variant', $static_field_data);
?>

<div class="header-style-03  header-variant-<?php echo e($home_page_variant); ?>">
    <nav class="navbar navbar-area navbar-expand-lg">
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

<div class="cagency-header-static">
    <div class="header-area">
        <div class="shape-image shape-01">
            <img src="<?php echo e(asset('assets/frontend/img/shape/08.png')); ?>" alt="">
        </div>
        <div class="shape-image shape-02">
            <img src="<?php echo e(asset('assets/frontend/img/shape/09.png')); ?>" alt="">
        </div>
        
        <div class="shape-image shape-05">
            <img src="<?php echo e(asset('assets/frontend/img/shape/13.png')); ?>" alt="">
        </div>
        <div class="shape-image shape-06">
            <img src="<?php echo e(asset('assets/frontend/img/shape/14.png')); ?>" alt="">
        </div>
        <div class="shape-image shape-07">
            <img src="<?php echo e(asset('assets/frontend/img/shape/15.png')); ?>" alt="">
        </div>

        <div class="right-image">
            <?php echo render_image_markup_by_attachment_id(filter_static_option_value('cagency_header_section_right_image', $static_field_data)); ?>

            <div class="shape-04">
                <img src="<?php echo e(asset('assets/frontend/img/shape/11.png')); ?>" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-10">
                    <div class="header-inner">
                        <h1 class="title">
                            <?php echo e(filter_static_option_value('cagency_header_section_' . $user_select_lang_slug . '_title', $static_field_data)); ?>

                        </h1>
                        <div class="description"><?php echo filter_static_option_value('cagency_header_section_' . $user_select_lang_slug . '_description', $static_field_data); ?></div>
                        <?php if(!empty(filter_static_option_value('cagency_header_section_' . $user_select_lang_slug . '_button_one_text', $static_field_data))): ?>
                            <div class="btn-wrapper margin-top-30">
                                <a href="<?php echo e(filter_static_option_value('cagency_header_section_button_one_url', $static_field_data)); ?>"
                                    class="cagency-btn"><?php echo e(filter_static_option_value('cagency_header_section_' . $user_select_lang_slug . '_button_one_text', $static_field_data)); ?>

                                    <i
                                        class="<?php echo e(filter_static_option_value('cagency_header_section_button_one_icon', $static_field_data)); ?>"></i></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add New Custom Section -->
<?php if(!empty(filter_static_option_value('home_page_about_us_section_status', $static_field_data))): ?>
    <div class="our-mission-area">
        <div class="container-fulid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="our-service-wrappper bg-main">
                        <div class="section-title white padding-bottom-15 desktop-left">
                            <h2 class="title">
                                <?php echo e(filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_about_us_title', $static_field_data)); ?>

                            </h2>
                            <p class="m-inherit"><?php echo filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_about_us_description', $static_field_data); ?></p>
                            <div class="service-area-work">
                                <?php $__currentLoopData = $all_key_features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="single-header-bottom-item-04">
                                        <div class="icon">
                                            <i class="<?php echo e($data->icon); ?>"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><?php echo e($data->title); ?></h4>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item-wrapper">
                        <div class="single-service-item">
                            <div class="service-img">
                                <div class="bg-image" <?php echo render_background_image_markup_by_attachment_id(filter_static_option_value('home_page_04_about_us_our_mission_image', $static_field_data)); ?>></div>
                            </div>
                            <div class="service-text">
                                <div class="service-text-inner">
                                    <h2 class="title">
                                        <?php echo e(filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_about_us_our_mission_title', $static_field_data)); ?>

                                    </h2>
                                    <p><?php echo filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_about_us_our_mission_description', $static_field_data); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="single-service-item">
                            <div class="service-text">
                                <div class="service-text-inner">
                                    <h2 class="title">
                                        <?php echo e(filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_about_us_our_vision_title', $static_field_data)); ?>

                                    </h2>
                                    <p><?php echo filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_about_us_our_vision_description', $static_field_data); ?></p>
                                </div>
                            </div>
                            <div class="service-img style-01">
                                <div class="bg-image" <?php echo render_background_image_markup_by_attachment_id(filter_static_option_value('home_page_04_about_us_our_vision_image', $static_field_data)); ?>></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Add New Custom Section -->
<?php if(!empty(filter_static_option_value('home_page_quality_section_status', $static_field_data))): ?>
    <div class="global-network-area bg-liteblue padding-bottom-120 padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="global-content">
                        <h4 class="title">
                            <?php echo e(filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_quality_area_title', $static_field_data)); ?>

                        </h4>
                        <p><?php echo filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_quality_area_description', $static_field_data); ?></p>
                        <?php if(!empty(filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_quality_area_button_status', $static_field_data))): ?>
                            <div class="btn-wrapper padding-top-25">
                                <a href="<?php echo e(filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_quality_area_button_url', $static_field_data)); ?>"
                                    class="boxed-btn reverse-color"><?php echo e(filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_quality_area_button_title', $static_field_data)); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-img">
                        <?php echo render_image_markup_by_attachment_id(filter_static_option_value('home_page_02_quality_area_image', $static_field_data)); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>



<?php if(!empty(filter_static_option_value('home_page_video_section_status', $static_field_data))): ?>
    <div class="logistic-video-area-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logistic-video-wrap">
                        <?php echo render_image_markup_by_attachment_id(filter_static_option_value('creative_agency_video_section_background_image', $static_field_data), '', 'full'); ?>

                        <a href="<?php echo e(filter_static_option_value('creative_agency_video_section_video_url', $static_field_data)); ?>"
                            class="video-play-btn mfp-iframe"><i class="fas fa-play"></i></a>
                        <div class="shape">
                            <img src="<?php echo e(asset('assets/frontend/img/shape/11.png')); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Add New Custom Section -->
<?php if(!empty(filter_static_option_value('home_page_service_section_status', $static_field_data))): ?>
    <div class="political-what-we-offer-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center margin-bottom-60 medical-home">
                        <span
                            class="subtitle"><?php echo e(filter_static_option_value('home_page_12_' . $user_select_lang_slug . '_service_area_subtitle', $static_field_data)); ?></span>
                        <h2 class="title">
                            <?php echo e(filter_static_option_value('home_page_12_' . $user_select_lang_slug . '_service_area_title', $static_field_data)); ?>

                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $a=0; ?>
                <?php $__currentLoopData = $all_service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="political-single-what-we-cover-item  margin-bottom-30">
                            <div class="thumb">
                                <?php echo render_image_markup_by_attachment_id($data->image, 'grid'); ?>

                                <div class="icon style-<?php echo e($a); ?>">
                                    <i class="<?php echo e($data->icon); ?>"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a
                                        href="<?php echo e(route('frontend.services.single', $data->slug)); ?>"><?php echo e($data->title); ?></a>
                                </h4>
                                <p><?php echo e($data->excerpt); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php($a == 6) ? $a= 1 : $a++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Add New Custom Section -->
<?php if(!empty(filter_static_option_value('home_page_call_to_action_section_status', $static_field_data))): ?>
    <div class="charity-cta-area" <?php echo render_background_image_markup_by_attachment_id(filter_static_option_value('home_page_13_cta_area_background_image', $static_field_data)); ?>>
        <div class="shape top">
            <img src="<?php echo e(asset('assets/frontend/img/shape/cta-top-shape.svg')); ?>" alt="">
        </div>
        <div class="shape bottom">
            <img src="<?php echo e(asset('assets/frontend/img/shape/cta-bottom-shape.svg')); ?>" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-area-inner">
                        <div class="left-content-area">
                            <h3 class="title">
                                <?php echo e(filter_static_option_value('home_page_13_' . $user_select_lang_slug . '_cta_area_title', $static_field_data)); ?>

                            </h3>
                        </div>
                        <div class="right-content-area">
                            <?php if(!empty(filter_static_option_value('home_page_13_' . $user_select_lang_slug . '_cta_area_button_status', $static_field_data))): ?>
                                <div class="btn-wrapper">
                                    <a href="<?php echo e(filter_static_option_value('home_page_13_cta_area_button_url', $static_field_data)); ?>"
                                        class="btn-charity"><?php echo e(filter_static_option_value('home_page_13_' . $user_select_lang_slug . '_cta_area_button_title', $static_field_data)); ?>

                                        <i
                                            class="<?php echo e(filter_static_option_value('home_page_13_cta_section_button_icon', $static_field_data)); ?>"></i></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>









<!-- Add New Custom Section -->
<?php if(!empty(filter_static_option_value('home_page_event_section_status', $static_field_data))): ?>
    <div class="course-event-area padding-top-120 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title margin-bottom-80 course-home">
                        <h2 class="title">
                            <?php echo e(filter_static_option_value('course_home_page_' . $user_select_lang_slug . '_event_area_title', $static_field_data)); ?>

                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-carousel-area margin-top-10 ">
                        <div class="global-carousel-init logistic-dots" data-loop="true" data-desktopitem="1"
                            data-mobileitem="1" data-tabletitem="1" data-dots="true" data-autoplay="true"
                            data-margin="0">
                            <?php $__currentLoopData = $all_events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-events-list-item course-home">
                                    <div class="thumb">
                                        <?php echo render_image_markup_by_attachment_id($data->image, '', 'grid'); ?>

                                    </div>
                                    <div class="content-area">
                                        <div class="top-part">
                                            <div class="time-wrap">
                                                <span
                                                    class="date"><?php echo e(date('d', strtotime($data->date))); ?></span>
                                                <span
                                                    class="month"><?php echo e(date('M', strtotime($data->date))); ?></span>
                                            </div>
                                            <div class="title-wrap">
                                                <a href="<?php echo e(route('frontend.events.single', $data->slug)); ?>">
                                                    <h4 class="title"><?php echo e($data->title); ?></h4>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="location d-block"><i class="fas fa-map-marker-alt"></i>
                                            <?php echo e($data->venue_location); ?></span>
                                        <p><?php echo e(strip_tags(Str::words(str_replace('&nbsp;', ' ', $data->content), 20))); ?>

                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>



<!-- Add New Custom Section -->


<!-- Add New Custom Section -->



<?php /**PATH E:\xampp\htdocs\wildmp.com\@core\resources\views/frontend/home-pages/home-08.blade.php ENDPATH**/ ?>