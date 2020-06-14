<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('solusi/store')}}" method="POST">

        @csrf
        <label for="">Penyakit</label>
    <select name="penyakit_id" id="">
        <option value="">Silahkan Pilih</option>
        @foreach ($a as $item)
            <option value="{{$item->id}}">
                {{$item->nama_penyakit}}
            </option>
        @endforeach

    </select><br>
    <label for="">Solusi Medis</label><br>
    <textarea name="solusi_medis" id="" cols="30" rows="10">Nama Medis</textarea>
    <label for="">Solusi Non Medis</label>
    <textarea name="solusi_non_medis" id="" cols="30" rows="10"></textarea>
    <label for="">Keterangan</label>
    <textarea name="keterangan" id="" cols="30" rows="10"></textarea>

    <button type="submit">Save</button>
    </form>


</body>
</html>
