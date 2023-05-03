@extends('backend.admin.admin')

@section('title', "Tambah Penebangan")

@section('content')
<div class="row">
    <div class="container">
        @if (session("success"))
            <div class="alert alert-primary">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </div>
        @endif
        <form class="form-horizontal" method="post" action="{{ url('/admin/tebang/add') }}">
            @csrf
            
            <div class="form-group">
                <label class="control-label col-sm-2">Penanggung :</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="penanggung" placeholder=" " name="penanggung">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Jenis Tanaman :</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="jenis_tanaman" placeholder=" " name="jenis_tanaman">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Luas :</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="luas" placeholder=" " name="luas">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Tanggal Perencanaan:</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="tanggal_perencanaan" placeholder=" " name="tanggal_perencanaan">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Tanggal Pelaksanaan:</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="tanggal_pelaksanaan" placeholder=" " name="tanggal_pelaksanaan">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Status:</label>
                <div class="col-sm-3">          
                    <select name="status" id="status" class="form-control">
                    <option value="YA">Terlaksana</option>
                    <option value="TIDAK">Belum Terlaksana</option>
                    
                </select>
                </div>
            </div>

            
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection