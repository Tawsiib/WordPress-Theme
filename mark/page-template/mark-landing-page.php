<?php
    /**
     * Template Name: Mark Landing Page
     */
    get_header();

    $mark_sections = get_post_meta(get_the_ID(), 'mark_page_sections');
    if (isset($mark_sections) && is_array($mark_sections)) {
        foreach ($mark_sections as $mark_section) {
            $mark_section_type = get_post_meta($mark_section, 'mark_section_type', true);
            get_template_part("section-templates/section-{$mark_section_type}");
        }
    }
?>

    <!--product section start-->
    <section class="space-3 space-adjust" id="shop">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <h2 class="title ">Our Shop</h2>
                    </div>
                </div>

                <div class="col-md-12">
                    <ul class="products">
                        <li class="product">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>./assets/img/products/p-1.jpg"
                                     alt=""/>
                                <h2 class="woocommerce-loop-product__title">Cleaning Essential Combo</h2>
                                <span class="price">
                                    <del>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            727.00
                                        </span>
                                    </del>
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            657.00
                                        </span>
                                    </ins>
                                </span>
                            </a>
                            <a href="#" class="button add_to_cart_button">Add to cart</a>
                        </li>
                        <li class="product">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>./assets/img/products/p-2.jpg"
                                     alt=""/>
                                <h2 class="woocommerce-loop-product__title">Cleaning Essential Combo</h2>
                                <span class="price">
                                    <del>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            727.00
                                        </span>
                                    </del>
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            657.00
                                        </span>
                                    </ins>
                                </span>
                            </a>
                            <a href="#" class="button add_to_cart_button">Add to cart</a>
                        </li>
                        <li class="product last">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>./assets/img/products/p-3.jpg"
                                     alt=""/>
                                <h2 class="woocommerce-loop-product__title">Cleaning Essential Combo</h2>
                                <span class="price">
                                    <del>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            727.00
                                        </span>
                                    </del>
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            657.00
                                        </span>
                                    </ins>
                                </span>
                            </a>
                            <a href="#" class="button add_to_cart_button">Add to cart</a>
                        </li>
                        <li class="product">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>./assets/img/products/p-2.jpg"
                                     alt=""/>
                                <h2 class="woocommerce-loop-product__title">Cleaning Essential Combo</h2>
                                <span class="price">
                                    <del>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            727.00
                                        </span>
                                    </del>
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            657.00
                                        </span>
                                    </ins>
                                </span>
                            </a>
                            <a href="#" class="button add_to_cart_button">Add to cart</a>
                        </li>
                        <li class="product">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>./assets/img/products/p-3.jpg"
                                     alt=""/>
                                <h2 class="woocommerce-loop-product__title">Cleaning Essential Combo</h2>
                                <span class="price">
                                    <del>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            727.00
                                        </span>
                                    </del>
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            657.00
                                        </span>
                                    </ins>
                                </span>
                            </a>
                            <a href="#" class="button add_to_cart_button">Add to cart</a>
                        </li>
                        <li class="product last">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>./assets/img/products/p-1.jpg"
                                     alt=""/>
                                <h2 class="woocommerce-loop-product__title">Cleaning Essential Combo</h2>
                                <span class="price">
                                    <del>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            727.00
                                        </span>
                                    </del>
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            657.00
                                        </span>
                                    </ins>
                                </span>
                            </a>
                            <a href="#" class="button add_to_cart_button">Add to cart</a>
                        </li>
                    </ul>
                    <div class="text-center">
                        <a href="#" class="btn-link">Go To Shop</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- product section end-->

    <!--blog section start-->
    <section class="blog-block" id="blog">
        <!--<div class="">-->
        <div class="row">
            <div class="col-md-6 align-self-center">

                <div class="img-block-txt">
                    <div class="section-title">
                        <h2 class="title ">Blog</h2>
                    </div>
                    <h2 class="mb-1"><a href="#">Years of experience in this domain</a></h2>
                    <div class="meta mb-4">
                        <a href="#" class="date">23 June</a>
                        By
                        <a href="#"> Jonathan Smith</a>
                    </div>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                        maxime
                        placeat facere possimus. Nam libero tempore, cum soluta nobis est eligendi optio cumque </p>
                    <a href="#" class="btn-link">View All Blog Post</a>
                </div>
            </div>
            <div class="col-md-6 base-gradient blog-bg-height"
                 style="background: url('<?php echo get_template_directory_uri() ?>./assets/img/b-img.jpg') center center / cover no-repeat; ">
                <img src="<?php echo get_template_directory_uri() ?>./assets/img/b-img-1.jpg" alt=""/>
            </div>
        </div>
        <!--</div>-->
    </section>
    <!--blog section end-->

    <!-- clients section start -->
    <section class="client-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-logo">
                        <a href="#" class="client-item"><img
                                    src="<?php echo get_template_directory_uri() ?>./assets/img/c1.jpg"
                                    alt="Client"></a>
                        <a href="#" class="client-item"><img
                                    src="<?php echo get_template_directory_uri() ?>./assets/img/c2.jpg"
                                    alt="Client"></a>
                        <a href="#" class="client-item"><img
                                    src="<?php echo get_template_directory_uri() ?>./assets/img/c3.jpg"
                                    alt="Client"></a>
                        <a href="#" class="client-item"><img
                                    src="<?php echo get_template_directory_uri() ?>./assets/img/c4.jpg"
                                    alt="Client"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- clients section end -->

    <!-- subscribe section start -->
    <section class="space-2 subscribe-from">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-inline row">
                        <div class="form-group col-lg-3 col-md-4">
                            <h3>Subscribe Now</h3>
                        </div>
                        <div class="form-group col-lg-6 col-md-5">
                            <input type="text" class="form-control w-100" placeholder="Enter your email address">
                        </div>
                        <div class="form-group col-lg-3 col-md-3">
                            <button type="submit" class="btn btn-block btn-primary-solid">subscription</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe section end -->

    <!--contact section start-->
    <section class="contact-wrapper position-relative" id="contact">
        <div class="arrow-bottom-shape"></div>
        <div class="space-3 parallax section-adjust"
             style="background-image: url('<?php echo get_template_directory_uri() ?>./assets/img/contact-img.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="section-title text-left light-txt">
                            <h2 class="title "> GET IN TOUCH</h2>
                            <div class="sub-title">Pellentesque eu quam sem, ac malesuada leo sem quam pellente.</div>
                        </div>
                        <div class="light-txt">

                            <h4>LOCATION</h4>
                            <p>
                                1355 Market Street, Suite 900
                                San Francisco, CA 94103
                                New York
                            </p>
                            <h4>CONTACT</h4>
                            <p>
                                Telp: +62 500 800 123, Fax: +62 500 800 112 <br/>
                                Email: testmail@yourdomain.com
                            </p>

                        </div>
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <form role="form" id="contactForm" class="contact-form" data-toggle="validator">

                            <div class="form-group ">
                                <div class="controls">
                                    <input type="text" id="name" class="form-control" placeholder="Name"
                                           required data-error="Please enter your name">

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="controls">
                                    <input type="text" class="email form-control" placeholder="Email" required
                                           data-error="Please enter your email">

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="controls">
                                <textarea id="message" rows="7" placeholder="Massage" class="form-control"
                                          required data-error="Write your message"></textarea>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" id="submit" class="btn btn-primary-solid">Send Message</button>
                            </div>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--contact section end-->

<?php get_footer(); ?>