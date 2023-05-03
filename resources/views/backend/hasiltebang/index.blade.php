@extends('backend.admin.admin')

@section('title', "Daftar Hasil Pohon yang Ditebang")

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-success" href="{{ url('/admin/hasiltebang/add') }}">Tambah</a>
        <div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th>NO</th> -->
                            <th>ID Hasil Tebang</th>
                            <th>ID Tebang</th>
                            <th>Jumlah Pohon yang Ditebang</th>
                            <th>Volume Tebang</th>
                            <th>Luas</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>                       
                        @foreach($hasiltebang as $p)                                                             
                        <tr>
                        <!-- <td></td> -->
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->id_tebang }}</td>
                        <td>{{ $p->jumlah_tebang }}</td>
                        <td>{{ $p->volume_tebang }}</td>
                        <td>{{ $p->luas}}</td>
                        <td>{{ $p->tanggal_pelaksanaan }}</td>
                       
                        <td style="width: 200px">
                            <a class="btn btn-primary" href="{{ url('/admin/hasiltebang/update/' . $p -> id) }}">Edit</a>
                            <a class="btn btn-danger" onclick="return confirm('Anda yakin menghapus ')" href="{{ url('/admin/hasiltebang/delete/' . $p -> id) }}">Hapus</a>
                        </td>
                        </tr>                        
                        @endforeach
                                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
