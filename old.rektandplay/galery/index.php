<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/non-log.php';?>
<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/settings.php';?>
<!DOCTYPE html>
<html>
<?php include_once('resources/UberGallery.php'); ?>
<head>
	<title>Rec & Play | Galerie</title>
<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/head.php';?>

    <link rel="stylesheet" type="text/css" href="css/rebase-min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="resources/UberGallery.css" />
    <link rel="stylesheet" type="text/css" href="resources/colorbox/1/colorbox.css" />

</head>
<body>
<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/navigation.php';?>
        <?php $files = scandir('galleries'); ?>
        <?php foreach ($files as $file): ?>
            
            <?php $dir = 'galleries/' . $file; ?>
            
            <?php if (is_dir($dir) && $file != '.' && $file != '..'): ?>
                <h2><?php echo ucwords($file); ?></h2>
                <?php $gallery = UberGallery::init()->createGallery($dir, $file); ?>
            <?php endif; ?>
            
        <?php endforeach; ?>
<br />
<div class="max-before"></div>
<div class="max-after"></div>
<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/footer.php';?>
</body>
</html>
