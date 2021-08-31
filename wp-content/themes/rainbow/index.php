<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="description"
          content="Как победить рассеянный склероз ✓ Практическое применение методики борьбы с рассеянным склерозом
          профессора клинической медицины Терри Уолс ✓ Лечение аутоиммунных заболеваний ✓ Я победила РС"/>
    <meta name="keywords"
          content="Рассеянный склероз,Уолс протокол,Терри Уолс,диета при рассеянном склерозе,аутоимумунное заболевание,
          хроническое заболевание,как победить рс, электростимуляция,медитация,исследования,упражнения,рецепты,методика
           Терри Уолс, как победить рс, победить, новое"/>
    <?php wp_head(); ?>
</head>
<body>
<div class="container">
    <header class="header">
        <a href="<?php bloginfo('url'); ?>" class="logo">
            <span>r</span><span>a</span><span>i</span><span>n</span><span>b</span><span>o</span><span>w</span>
            <div>colors</div>
        </a>
        <?php wp_nav_menu(array(
            'theme_location' => 'top',
            'container' => null,
            'menu_class' => 'nav',
        )) ?>

    </header>
    <main class="main">
        <section class="article-list">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>

                    <article class="list-item">
                        <div class="list-wrapper">
                            <?php the_post_thumbnail('520'); ?>
                        </div>
                        <div class="list-wrapper">
                            <div class="list-tag"><?php the_category($separator = " / "); ?></div>
                            <a href="<?php the_permalink(); ?>" class="list-title"><?php the_title(); ?></a>
                            <p class="list-description"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="list-read">Читать ...</a>
                        </div>
                    </article>
                    <?php
                } ?>
                <?php the_posts_pagination(); ?>
            <?php }
            ?>

        </section>
    </main>
    <footer class="footer">
        <p>&copy; Theme shutkos. Content Dr. Terry Wahls.</p>
    </footer>
</div>

<?php wp_footer(); ?>
<script src="scripts.js"></script>
</body>
</html>