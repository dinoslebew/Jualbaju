<html>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>nama</th>
                <th>harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dataku)
                <tr>
                    <td>{{$dataku['id']}}</td>
                    <td>{{$dataku['nama']}} </td>
                    <td>{{$dataku['harga']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</html>