<aside id="sidebar" role="complementary">
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
    <div id="primary" class="widget-area">
        <ul class="xoxo">
            <?php dynamic_sidebar( 'primary' ); ?>
        </ul>
    </div>
    <?php endif; ?>
</aside>
