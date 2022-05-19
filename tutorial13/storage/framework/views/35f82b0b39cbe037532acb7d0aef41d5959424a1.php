<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1> Update </h1>
    <form action="/edit" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($data['id']); ?>">
        
        <input type="text" name="title" id="title" placeholder="Title" value="<?php echo e($data['title']); ?>"required><br/>
        <input type="text" name="small" id="small" placeholder="Small"value="<?php echo e($data['small_desc']); ?>" required><br/>
        <input type="text" name="detail" id="detail" placeholder="Details" value="<?php echo e($data['detail_desc']); ?>"required><br/>
        <input type="text" name="gallery" id="gallery" placeholder="Gallery" value="<?php echo e($data['galleryid']); ?>" required><br/>
        <input type="text" name="photo" id="photo" placeholder="photo"value="<?php echo e($data['photo_url']); ?>" required><br/>
        <button type="submit">Update Data </button>

    </form>
    

</body>
</html><?php /**PATH C:\xampp\htdocs\all php\B.TECH\SEM-4\t-13\resources\views/edit.blade.php ENDPATH**/ ?>