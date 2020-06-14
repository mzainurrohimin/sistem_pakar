<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{url('penyakit/update').'/'.$edit->id}}" method="POST">
        @csrf
        <label for="">Nama Peyakit</label>
        <input type="text" name="nama_penyakit" id="" value="{{$edit->nama_penyakit}}">
        <label for="">Nama Medis</label>
        <input type="text" name="nama_medis" id="" value="{{$edit->nama_medis}}">
        <label for="">Keterangan</label>
        <input type="text" name="keterangan" id="" value="{{$edit->keterangan}}">
        <button type="submit">Save</button>

    </form>

</body>
</html>
