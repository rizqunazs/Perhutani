@extends('backend.admin.admin')

@section('title', "Daftar Pegawai")

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-success" href="{{ url('/admin/pegawai/add') }}">Tambah</a>
        <div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th>NO</th> -->
                            <th>NIP</th>
                            <th>NIK</th>
                            <th>NAMA</th>
                            <th>DEPT</th>
                            <th>JABATAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>                       
                        @foreach($pegawai as $p)                                                             
                        <tr>
                        <!-- <td></td> -->
                        <td>{{ $p->nip }}</td>
                        <td>{{ $p->nik }}</td>
                        <td>{{ $p->nama_lengkap }}</td>
                        <td>{{ $p->id_dept}}</td>
                        <td>{{ $p->jabatan }}</td>
                        <td style="width: 200px">
                            <a class="btn btn-primary" href="{{ url('/admin/pegawai/update/' . $p -> nip) }}">Edit</a>
                            <a class="btn btn-danger" onclick="return confirm('Anda yakin menghapus ')" href="{{ url('/admin/pegawai/delete/' . $p -> nip) }}">Hapus</a>
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
