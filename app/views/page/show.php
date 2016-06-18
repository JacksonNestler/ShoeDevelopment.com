<?php require VIEW_ROOT . '/templates/header.php'; ?>
    
    <?php if(!$page): ?>
        <p>Page not found. Sorry!</p>
    <?php else: ?>
        
        <h2><?php echo escape($page['title']); ?> </h2>

    <?php endif; ?>

 <?php require APP_ROOT.'/views/page/show.php'; ?>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>