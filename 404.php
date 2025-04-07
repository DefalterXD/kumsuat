<?php get_template_part('./template-parts/header'); ?>

<main class="error-404 not-found">
    <section class="page-content">
        <h1>Oops! Page not found.</h1>
        <p>Sorry, the page you are looking for doesn't exist.</p>
        <a href="<?php echo home_url(); ?>" class="btn">Go to Homepage</a>
    </section>
</main>

<?php get_template_part('./template-parts/footer'); ?>