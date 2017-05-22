<?php

function custom_songs_list( $atts, $content = null ) {

        $atts = shortcode_atts(array(
                'title' => 'Song',
                'count' => 200,
                'song_body' => '',
                'pagination' => 'off'
                ), $atts);

    //    $pagination = $atts['pagination'] == 'on' ? false : true;

    //    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

        $args = array(
                'post_type' => 'song',
                'orderby' => 'title',
                'order' => 'asc',
                'limit' => 1,
                'posts_per_page' => 10000,

        //        'post_status' => 'publish',
        //        'no_found_rows' => $pagination,
        //        'posts_per_page' => $atts['count'],
        //        'paged' => $paged,

            );
        $song = new WP_Query($args);

        if ($song->have_posts())  :


                $display_song = '<table>';

                while ($song->have_posts()) : $song->the_post();
                    global $post;

                     $song_body = get_the_content();
                     $title = get_the_title();
                     $slug = get_permalink();

                     $display_song .= '<tr><td class="songs-listing">';
                     $display_song .= sprintf('<a href="%s">%s</a>&nbsp&nbsp', esc_url($slug), esc_html__($title));
                     $display_song .= '</td><td>' . wp_trim_words($song_body, $num_words = 10, $more = ' ... ') . '</td>';
                     $display_song .= '</tr>';

                 endwhile;

         $display_song .= '</table>';

         wp_reset_postdata();

 //        if ( $song->max_num_pages > 1 && is_page() ) {
 //
 //            $display_song .= '<nav class="prev-next-posts">';
 //            $display_song .= '<div class="nav-previous">';
 //            $display_song .= get_next_posts_link(__( '<span class="meta-nav">&larr;</span> Previous' ), $song->max_num_pages );
 //            $display_song .= '</div>';
 //            $display_song .= '<nav class="next-posts-link">';
 //            $display_song .= get_previous_posts_link(__( ' Next <span class="meta-nav">&rarr;</span>' ));
 //            $display_song .= '</div>';
 //            $display_song .='</nav>';
 //
 //        }

     endif;

     return $display_song;
 }

 add_shortcode('songs_list', 'custom_songs_list');

 ?>