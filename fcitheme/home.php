<?php get_header(); ?>
<main class="blge boxedContent">
    <!-- blge: Blog General -->
    <div class="internaPpal">

        <section class="container-fluid header_interna">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid ciru-pagina fondo7 py-5">
            <div class="container position-relative">
                <div class="row">
                    <div class="mb-9 col-6 pt-3">
                        <h1 class="mb-5">Blog</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid home_especialistas mw-1600 py-5">
            <div class="row">
                <?php
                global $paged;
                $curpage = $paged ? $paged : 1;
                $args = array(
                    'post_type' => 'post',
                    'orderby' => 'post_date',
                    'posts_per_page' => 11,
                    'paged' => $paged
                );
                $entrada_index = 0;
                $query = new WP_Query($args);
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    $imagen = get_the_post_thumbnail($post->ID, array(700, 460));
                    if($entrada_index == 0):
                        ?>
                        <div id="post-<?php the_ID(); ?>" class="col-12 col-md-12 col-lg-8 post-indv-big">
                            <a href="<?php the_permalink(); ?>" class="entrada-blog">
                                <div class="-int">
                                    <?php
                                        if($imagen != ""):
                                        ?>
                                        <div class="-foto">
                                            <?php echo $imagen; ?>
                                        </div>
                                        <?php
                                        endif;
                                    ?>
                                    <div class="-contenido">
                                        <h2><?php the_title(); ?></h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    else:
                        ?>
                        <div id="post-<?php the_ID(); ?>" class="col-12 col-md-6 col-lg-4 post-indv">
                            <a href="<?php the_permalink(); ?>" class="entrada-blog">
                                <div class="-int">
                                    <?php
                                        if($imagen != ""):
                                        ?>
                                        <div class="-foto">
                                            <?php echo $imagen; ?>
                                        </div>
                                        <?php
                                        endif;
                                    ?>
                                    <div class="-contenido">
                                        <h2><?php the_title(); ?></h2>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    endif;
                    $entrada_index++;
                    endwhile;

                    if($query->max_num_pages > 1): /* Si hay más de 1 página */
                        echo '<div class="wp_pagination my-5" id="wp_pagination">';
    
                        if($curpage > 1): /* Si estoy más adelante de la pag 1 */
                            echo '<a class="first page button" href="' . get_pagenum_link(1) . '">&laquo;</a>';
                            echo '<a class="previous page button" href="' . get_pagenum_link(($curpage - 1 > 0 ? $curpage - 1 : 1)) . '">&lsaquo;</a>';
                        endif;
                        
                        for ($i = 1; $i <= $query->max_num_pages; $i++)
                            echo '<a class="' . ($i == $curpage ? 'active ' : '') . 'page button" href="' . get_pagenum_link($i) . '">' . $i . '</a>';
    
                        if($curpage < $query->max_num_pages):
                            echo '<a class="next page button" href="' . get_pagenum_link(($curpage + 1 <= $query->max_num_pages ? $curpage + 1 : $query->max_num_pages)) . '">&rsaquo;</a>';
                            echo '<a class="last page button" href="' . get_pagenum_link($query->max_num_pages) . '">&raquo;</a>';
                        endif;
    
                        echo '</div>';
                    endif;

                    wp_reset_postdata();
                endif;

                ?>






            </div>
        </section>



    </div>
</main>
<?php get_footer(); ?>