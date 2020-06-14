<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{url('penyakit/store')}}" method="POST">

        @csrf
        <label for="">Nama Peyakit</label>
        <input type="text" name="nama_penyakit" id="">
        <label for="">Nama Medis</label>
        <input type="text" name="nama_medis" id="">
        <label for="">Keterangan</label>
        <input type="text" name="keterangan" id="">
        <button type="submit">Save</button>

    </form>

</body>
</html>
