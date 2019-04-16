<?php
    /**
     * Template Name: Nattours Landing page
     */

    get_header();

    $nattours_sections = get_post_meta(get_the_ID(), 'nattours_page_sections');
    if (isset($nattours_sections) && is_array($nattours_sections)) {
        foreach ($nattours_sections as $nattours_section) {
            $nattours_section_type = get_post_meta($nattours_section, 'nattours_section_type', true);
            get_template_part("section-templates/section-{$nattours_section_type}");
        }
    }
?>


<main>









</main>

<?php get_footer();?>


