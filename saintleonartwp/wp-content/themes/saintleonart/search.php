<?php
/*
    Template Name: PAGE-SEARCH
*/
    get_header();
?>
    <?php
        if(isset($_GET['search-type'])) {
            $type = $_GET['search-type'];
            if($type == 'evenement') {
                load_template(TEMPLATEPATH . '/evenement-search.php');
            } elseif($type == 'artiste') {
                load_template(TEMPLATEPATH . '/artiste-search.php');
            }
        }
    ?>
<?php
    get_footer();
?>

