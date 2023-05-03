@extends('backend.admin.admin')

@section('title', "Update Tanam")

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
        <form class="form-horizontal" method="post" action="{{ url('/admin/tanam/update/' . $tanam -> id_tanam) }}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2">Penanggung Jawab:</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="penanggung" value="{{ $tanam -> penanggung }}" name="penanggung">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Luas Lahan:</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="luas" value="{{ $tanam -> luas }}" name="luas">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Jenis Tanaman :</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="jns_tanaman" value="{{ $tanam -> jns_tanaman }}" name="jns_tanaman">
                </div>
            </div>
           
            <div class="form-group">
                <label class="control-label col-sm-2">Tanggal Perencanaan </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="tgl_perencanaan" value="{{ $tanam -> tgl_perencanaan}}" name="tgl_perencanaan">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Tanggal Pelaksanaan</label>
                <div class="col-sm-4">          
                    <input type="date" class="form-control" id="tgl_pelaksanaan" value="{{ $tanam -> tgl_pelaksanaan }}" name="tgl_pelaksanaan">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Status :</label>
                <div class="col-sm-3">          
                <select name="status" id="status" class="form-control">
                    @if($tanam->status=='YA')
                    <option selected value="YA">Terlaksana</option>
                    <option value="TIDAK">Belum Terlaksana</option>
                    @elseif ($tanam->status=='TIDAK')
                    <option value="YA">Terlaksana</option>
                    <option selected value="TIDAK">Belum Terlaksana</option>
                    @endif
                   
                </select>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
</div>
@endsection