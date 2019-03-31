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

    get_footer();
?>