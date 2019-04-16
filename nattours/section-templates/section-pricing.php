<?php
    global $nattours_section;
    $nattours_section_id   = get_post($nattours_section);
    $nattours_section_meta = get_post_meta($nattours_section, 'nattours_pricing_section', true);
    if (isset($nattours_section_meta) && is_array($nattours_section_meta)):
        ?>
        <section class="section-nattourss" id="<?php esc_attr_e($nattours_section_id->post_name); ?>">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    <?php esc_html_e($nattours_section_meta['section-heading']); ?>
                </h2>
            </div>

            <div class="row">
                <?php
                    $nattours_counter = 0;
                    foreach ($nattours_section_meta['pricing'] as $nattours_pricing_meta):
                        $nattours_counter++;
                        ?>
                        <div class="col-1-of-3">
                            <div class="card">
                                <div class="card__side card__side--front">
                                    <div class="card__picture card__picture--<?php esc_attr_e($nattours_counter); ?>">
                                        &nbsp;
                                    </div>
                                    <h4 class="card__heading">
                        <span class="card__heading-span card__heading-span--<?php esc_attr_e($nattours_counter); ?>">
                            <?php esc_html_e($nattours_pricing_meta['heading']) ?>
                        </span>
                                    </h4>
                                    <div class="card__details">
                                        <ul>
                                            <?php
                                                $nattours_plan_options = explode("\n", $nattours_pricing_meta['options']);
                                                foreach ($nattours_plan_options as $nattours_plan_option):
                                                    ?>
                                                    <li><?php esc_html_e($nattours_plan_option); ?></li>
                                                <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card__side card__side--back card__side--back-<?php esc_attr_e($nattours_counter); ?>">
                                    <div class="card__cta">
                                        <div class="card__price-box">
                                            <p class="card__price-only">
                                                <?php _e('Only', 'mark'); ?>
                                            </p>
                                            <p class="card__price-value">
                                                <?php _e('$', 'mark') ?><?php esc_html_e($nattours_pricing_meta['price']); ?>
                                            </p>
                                        </div>
                                        <a href="#popup" class="btn btn--white">
                                            <?php esc_html_e($nattours_pricing_meta['pricing_button_label']) ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    endforeach;
                ?>
            </div>
            <div class="u-center-text u-margin-top-huge">
                <a href="<?php echo esc_url($nattours_section_meta['button_url']) ?>" class="btn btn--green">
                    <?php esc_html_e($nattours_section_meta{'button_label'}) ?>
                </a>
            </div>
        </section>
    <?php endif; ?>



