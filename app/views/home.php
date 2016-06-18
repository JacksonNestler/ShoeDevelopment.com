<?php require VIEW_ROOT . '/templates/header.php'; ?>
    <?php print_r($pages); ?>
    <?php if(empty($pages)): ?>
        <p>Sorry, no pages are available.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($pages as $page): ?>
                <li><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page['slug'] ?>"><?php echo $page['label']; ?> </a></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>