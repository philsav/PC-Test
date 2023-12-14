// Add social profile links after the title in fimctions.php using ACF

function add_social_profile_links_after_title($title, $id) {
    // Check if it's a single post
    if (is_single() && in_the_loop() && $id === get_the_ID()) {

        // Get custom fields for social profile links
        $linkedin_profile = get_field('linkedin_profile', $id);
        $facebook_profile = get_field('facebook_profile', $id);

        // Output the social profile links after the title
        if ($linkedin_profile || $facebook_profile) {
            $title .= '<div class="social-profile-links">';
            if ($linkedin_profile) {
                $title .= '<a href="' . esc_url($linkedin_profile) . '" target="_blank" rel="nofollow">LinkedIn</a>';
            }
            if ($linkedin_profile && $facebook_profile) {
                $title .= ' | ';
            }
            if ($facebook_profile) {
                $title .= '<a href="' . esc_url($facebook_profile) . '" target="_blank" rel="nofollow">Facebook</a>';
            }
            $title .= '</div>';
        }
    }

    return $title;
}

// Hook the function to the_title hook
add_filter('the_title', 'add_social_profile_links_after_title', 10, 2);
