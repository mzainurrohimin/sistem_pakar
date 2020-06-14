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
        <a href="{{url('gejala/create')}}">Tambah</a>
        <tr>
            @foreach ($tampil as $item)
                <td>{{$item->id}}</td>
                <td>{{$item->nama_gejala}}</td>
                <td>
                    <a href="{{url('gejala/edit').'/'.$item->id}}">Edit</a>
                    <form action="{{url('gejala/delete').'/'.$item->id}}" method="POST">
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
