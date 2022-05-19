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
    @foreach ($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['title']}}</td>
        <td>{{$member['small_desc']}}</td>
        <td>{{$member['detail_desc']}}</td>
        <td>{{$member['galleryid']}}</td>
        <td>{{$member['photo_url']}}</td>
        <td> 
            <a href={{"edit/".$member['id']}}>Edit</a>
            <a href={{"delete/".$member['id']}}>Delete</a>

        </td>
      
    </tr>
    
        
    @endforeach
    
</table>

<style>
    .w-5
    {
        display:none;
    }
    </style>
</body>
</html>
