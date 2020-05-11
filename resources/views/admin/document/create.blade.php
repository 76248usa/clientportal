<!doctype html>
<html>

<head>
    <title>Create Document</title>

<body>
    <form action="/files" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="text" name="title" placeholder="title">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="client_id" placeholder="client id">

        <input type="file" name="file">
        <input type="submit" value="Submit">

    </form>




</body>

</html>