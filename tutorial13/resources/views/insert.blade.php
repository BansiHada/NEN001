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
    <h1> Add Record </h1>
    <form action="add" method="get">
        @csrf
        <input type="text" name="title" id="title" placeholder="Title" required><br/>
        <input type="text" name="small" id="small" placeholder="Small" required><br/>
        <input type="text" name="detail" id="detail" placeholder="Details" required><br/>
        <input type="text" name="gallery" id="gallery" placeholder="Gallery" required><br/>
        <input type="text" name="photo" id="photo" placeholder="photo" required><br/>
        <button type="submit"> Add Data </button>

    </form>
    
</body>
</html>