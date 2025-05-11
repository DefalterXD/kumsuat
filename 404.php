<?php get_template_part('./template-parts/header'); ?>

<main class="error-404 not-found">
    <section class="page-content">
        <h1 class="error-404 title">404</h1>
        <h2 class="error-404 title-desc">Страница не найдена</h2>
        <p class="error-404 desc">Страницу, которую вы ищите не существует</p>
        <a href="<?php echo home_url(); ?>" class="btn">Вернуться на главную</a>
    </section>
</main>

<?php get_template_part('./template-parts/footer'); ?>