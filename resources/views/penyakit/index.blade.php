<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table>
        <a href="{{url('penyakit/create')}}">Tambah</a>
        <tr>
            @foreach ($tampil as $item)
                <td>{{$item->id}}</td>
                <td>{{$item->nama_penyakit}}</td>
                <td>
                    <a href="{{url('penyakit/edit').'/'.$item->id}}">Edit</a>
                    <form action="{{url('penyakit/delete').'/'.$item->id}}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>

                    </form>

                </td>
            @endforeach
        </tr>
    </table>

</body>
</html>
