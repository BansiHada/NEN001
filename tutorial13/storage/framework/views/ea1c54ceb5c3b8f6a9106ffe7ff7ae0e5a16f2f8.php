<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">


    <title>Document</title>
</head>
<body>
    <a href="insert">Add </a>
    <h1>Member List </h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Small Desc</td>
        <td>Details Desc</td>
        <td>Gallery Id</td>
        <td>Photo Url</td>
        <td>Operation</td>
          
    </tr>
    <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($member['id']); ?></td>
        <td><?php echo e($member['title']); ?></td>
        <td><?php echo e($member['small_desc']); ?></td>
        <td><?php echo e($member['detail_desc']); ?></td>
        <td><?php echo e($member['galleryid']); ?></td>
        <td><?php echo e($member['photo_url']); ?></td>
        <td> 
            <a href=<?php echo e("edit/".$member['id']); ?>>Edit</a>
            <a href=<?php echo e("delete/".$member['id']); ?>>Delete</a>

        </td>
      
    </tr>
    
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</table>

<style>
    .w-5
    {
        display:none;
    }
    </style>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\all php\B.TECH\SEM-4\t-13\resources\views/list.blade.php ENDPATH**/ ?>