<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('submit-exel')}}" method="post" enctype="multipart/form-data">
        <div>
            <label>Exel upload</label>
            <input type="file" name="exelfile" />
            @csrf
            <input type="submit" value="submit" />
        </div>
    </form>
</body>
</html>