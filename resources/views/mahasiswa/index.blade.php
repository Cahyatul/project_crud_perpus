<table border="1">
    <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jenis kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
    </tr>
    @foreach($mahasiswa as $m)
    <tr>
            <td>{{$m->id}}</td>
            <td>{{$m->nama}}</td>
            <td>{{$m->nim}}</td>
            <td>{{$m->jenis_kelamin}}</td>
            <td>{{$m->alamat}}</td>
    </tr>
    @endforeach
</table>