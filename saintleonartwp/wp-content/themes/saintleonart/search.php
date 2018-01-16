<?php
/*
    Template Name: PAGE-SEARCH
*/
    get_header();
?> 
    <section class="title">
        <h2  class="title__heading2 heading2" aria-level="2" role="heading">Résultats de la recherche</h2>
    </section>
    <section class="all-artistes">
        <h2  class="all-artistes__heading2 heading2 hidden" aria-level="2" role="heading">bloc</h2>
        <div class="all-artistes__filter">
            <?php
                // Output a search for that only searches portfolio post types
                $search = get_search_form( false );
                $find = '</form>';
                $replace = '<input type="hidden" name="post_type" value="artiste">' . $find;
                $search = str_replace( $find, $replace, $search );
                echo $search;
            ?>
            <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
                <!-- <select name="disciplinefilter"> -->
                    <!-- <optgroup label="filtrer par type"> -->
                        <?php
                            if( $terms = get_terms( 'discipline', 'orderby=name' ) ) : // to make it simple I use default categories
                                echo '<select name="disciplinefilter"><option>Filtrer par discipline...</option>';
                                foreach ( $terms as $term ) :
                                    echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
                                endforeach;
                                echo '</select>';
                            endif;
                        ?>
                    <!-- </optgroup> -->
                    <!-- <optgroup label="filtrer par date">
                        <option name="date" value="ASC">Plus récent</option>
                        <option name="date" value="DESC">Plus ancien</option>
                    </optgroup> -->
                <button>Apply filter</button>
                <input type="hidden" name="action" value="myfilter">
            </form>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
            <!-- <script src="<?php //dw_asset('js/filters.js'); ?>"></script> -->
            <script>
                jQuery(function($){
                    $('#filter').submit(function(){
                        var filter = $('#filter');
                        $.ajax({
                            url:filter.attr('action'),
                            data:filter.serialize(), // form data
                            type:filter.attr('method'), // POST
                            beforeSend:function(xhr){
                                filter.find('button').text('Chargement...'); // changing the button label
                            },
                            success:function(data){
                                filter.find('button').text('Filtrer'); // changing the button label back
                                $('.azerty').html(data); // insert data
                            }
                        });
                        return false;
                    });
                });
            </script>
        </div>
            <div class="azerty">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php include('parts/all-artists.php'); ?>
                <?php endwhile; else : ?>
                	<div class="">
                		Oups... Rien n'a été trouvé...
                	</div>
                <?php endif; ?>
            </div>
        </section>
<?php
    get_footer();
?>

