@extends('backend.admin.admin')

@section('title', "Daftar Pegawai")

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-success" href="{{ url('/admin/tanam/add') }}">Tambah</a>
        <div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th>NO</th> -->
                            <th>ID Tanam</th>
                            <th>Penanggung Jawab</th>
                            <th>Luas Lahan</th>
                            <th>Jenis Tanaman</th>
                            <th>Tanggal Perencanaan</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>                       
                        @foreach($tanam as $p)                                                             
                        <tr>
                        <!-- <td></td> -->
                        <td>{{ $p->id_tanam }}</td>
                        <td>{{ $p->penanggung }}</td>
                        <td>{{ $p->luas }}</td>
                        <td>{{ $p->jns_tanaman }}</td>
                        <td>{{ $p->tgl_perencanaan}}</td>
                        <td>{{ $p->tgl_pelaksanaan }}</td>
                        <td>{{ $p->status }}</td>
                        <td style="width: 200px">
                            <a class="btn btn-primary" href="{{ url('/admin/tanam/update/' . $p -> id_tanam) }}">Edit</a>
                            <a class="btn btn-danger" onclick="return confirm('Anda yakin menghapus ')" href="{{ url('/admin/tanam/delete/' . $p -> id_tanam) }}">Hapus</a>
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
