@extends('backend.admin.admin')

@section('title', "Daftar Pegawai")

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-success" href="{{ url('/admin/hasiltanam/add') }}">Tambah</a>
        <div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th>NO</th> -->
                            <th>ID Hasil Tanam</th>
                            <th>ID Tanam</th>
                            <th>Jumlah Bibit Yang diTanam</th>
                            <th>Jumlah Bibit yang Disemai</th>
                            <th>Luas</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>                       
                        @foreach($hasiltanam as $p)                                                             
                        <tr>
                        <!-- <td></td> -->
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->id_tanam }}</td>
                        <td>{{ $p->jml_bibittanam }}</td>
                        <td>{{ $p->jml_bibitsemai }}</td>
                        <td>{{ $p->luas}}</td>
                        <td>{{ $p->tgl_perencanaan }}</td>
                       
                        <td style="width: 200px">
                            <a class="btn btn-primary" href="{{ url('/admin/hasiltanam/update/' . $p -> id) }}">Edit</a>
                            <a class="btn btn-danger" onclick="return confirm('Anda yakin menghapus ')" href="{{ url('/admin/hasiltanam/delete/' . $p -> id) }}">Hapus</a>
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
