<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{url('gejala/update').'/'.$edit->id}}" method="POST">
        @csrf
        <label for="">Nama Gejala</label>
        <input type="text" name="nama_gejala" id="" value="{{$edit->nama_gejala}}">
        <button type="submit">Save</button>

    </form>

</body>
</html>
