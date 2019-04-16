<?php
    /**
     * Template Name: Tour Landing page
     */

    get_header();

    $tour_sections = get_post_meta(get_the_ID(), 'tour_page_sections');
    if (isset($tour_sections) && is_array($tour_sections)) {
        foreach ($tour_sections as $tour_section) {
            $tour_section_type = get_post_meta($tour_section, 'tour_section_type', true);
            get_template_part("section-templates/section-{$tour_section_type}");
        }
    }
?>


<main>









</main>

<?php get_footer();?>


