<?php
    global $nattours_section;
    $nattours_section_id = get_post($nattours_section);
?>
<section class="section-book" id="<?php esc_attr_e($nattours_section_id->post_name); ?>">
    <div class="row">
        <div class="book">
            <div class="book__form">
                <form action="#" class="form">
                    <?php wp_nonce_field('reserve','reserve',); ?>
                    <div class="u-margin-bottom-medium">
                        <h2 class="heading-secondary">
                            <?php _e('Start booking now','nattours') ?>
                        </h2>
                    </div>

                    <div class="form__group">
                        <input type="text" class="form__input" placeholder="Full name" id="name" required>
                        <label for="" class="form__label"><?php _e('Full name','nattours') ?></label>
                    </div>

                    <div class="form__group">
                        <input type="email" class="form__input" placeholder="Email address" id="email" required>
                        <label for="email" class="form__label"><?php _e('Email address','nattours'); ?></label>
                    </div>

                    <div class="form__group u-margin-bottom-medium">
                        <div class="form__radio-group">
                            <input type="radio" class="form__radio-input" id="small" name="size">
                            <label for="small" class="form__radio-label">
                                <span class="form__radio-button"></span>
                                <?php _e('Small tour group','nattours'); ?>
                            </label>
                        </div>

                        <div class="form__radio-group">
                            <input type="radio" class="form__radio-input" id="large" name="size">
                            <label for="large" class="form__radio-label">
                                <span class="form__radio-button"></span>
                                <?php _e('Large tour group','nattours') ?>
                            </label>
                        </div>
                    </div>
                    <p id="reservation-message"></p>
                    <div class="form__group">
                        <button class="btn btn--green" id="send-message"><?php _e('Next step','nattours'); ?> &rarr;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>