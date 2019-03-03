<?php
function wep_product_creator_shortcode() {
    $creatorHTML = file_get_contents('creator-template.php', true);
    $editorHTML = wep_generate_description_editor();
    $creatorHTML  = str_replace('WEPRODUCT_DESCRIPTION_EDITOR', $editorHTML, $creatorHTML);

    return $creatorHTML;
}

function wep_generate_description_editor() {
    ob_start();
    wp_editor('', 'wepProductDescription');
    $description_editor = ob_get_clean();
    return $description_editor;
}

