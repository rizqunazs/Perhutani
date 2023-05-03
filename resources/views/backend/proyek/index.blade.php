@extends('backend.admin.admin')

@section('content')
<div class="container">

    <h1>Proyek <a href="{{ url('/admin/proyek/create') }}" class="btn btn-primary btn-xs" title="Tambah Proyek Baru"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th><th> No Proyek </th><th> Nama Proyek </th><th>Aksi</th>
                </tr>
            </thead>            
        </table>
    </div>

</div>
@endsection
