<?php
    get_header();
?>

    <main class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestras Clases</h2>

        <?php centerfitness_lista_clases(4); ?>

        <div class="contenedor-boton">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title('Nuestras Clases') ) ); ?>" class="boton boton-primario">
                Ver todas las clases
            </a>
        </div>
    </main>

    <section class="contenedor seccion">
        <h2 class="text-center text-primary">Instructores</h2>
        <p class="text-center">Instructores profesionales que te ayudarán a lograr tus objetivos</p>

        <?php centerfitness_instructores(); ?>
    </section>

    <section class="contenedor seccion">
        <h2 class="text-center text-primary">Recomendaciones</h2>
        <p class="text-center">Aprende tips de nuestros instructores expertos</p>

        <ul class="listado-grid">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4
                );
                $blog = new WP_Query($args);
                while($blog->have_posts()) {
                    $blog->the_post();

                    get_template_part('template-parts/blog');
                }
                wp_reset_postdata();
            ?>
        </ul>
    </section>
    
<?php
    get_footer();
?>