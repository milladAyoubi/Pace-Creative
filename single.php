<?php

function custom_social_links() {

    // Get the current post URL
    $post_url = get_permalink();

    // Create social sharing links for Facebook and LinkedIn
    $facebook_link = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($post_url);
    $linkedin_link = 'https://www.linkedin.com/shareArticle?mini=true&url=' . urlencode($post_url);

    // Render the social media links on our page
    echo '<div class="social-sharing-links">';

    echo '<a href="' . esc_url($facebook_link) . '" target="_blank" rel="noopener noreferrer">Share on Facebook</a>';
    echo '<a href="' . esc_url($linkedin_link) . '" target="_blank" rel="noopener noreferrer">Share on LinkedIn</a>';

    echo '</div>';
}

// Hook the custom_social_sharing_links function after the post title
add_action('website_title', 'custom_social_links');

?>
