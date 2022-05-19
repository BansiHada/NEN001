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
        @csrf
        <input type="hidden" name="id" id="id" value="{{$data['id']}}">
        
        <input type="text" name="title" id="title" placeholder="Title" value="{{$data['title']}}"required><br/>
        <input type="text" name="small" id="small" placeholder="Small"value="{{$data['small_desc']}}" required><br/>
        <input type="text" name="detail" id="detail" placeholder="Details" value="{{$data['detail_desc']}}"required><br/>
        <input type="text" name="gallery" id="gallery" placeholder="Gallery" value="{{$data['galleryid']}}" required><br/>
        <input type="text" name="photo" id="photo" placeholder="photo"value="{{$data['photo_url']}}" required><br/>
        <button type="submit">Update Data </button>

    </form>
    

</body>
</html>