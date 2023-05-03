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
        <form class="form-horizontal" method="post" action="{{ url('/admin/tebang/update/' . $tebang -> id_tebang) }}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2">Penanggung Jawab:</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="penanggung" value="{{ $tebang -> penanggung }}" name="penanggung">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Luas Lahan:</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="luas" value="{{ $tebang -> luas }}" name="luas">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Jenis Tanaman :</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="jenis_tanaman" value="{{ $tebang -> jenis_tanaman }}" name="jenis_tanaman">
                </div>
            </div>
           
            <div class="form-group">
                <label class="control-label col-sm-2">Tanggal Perencanaan </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="tanggal_perencanaan" value="{{ $tebang -> tanggal_perencanaan}}" name="tanggal_perencanaan">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Tanggal Pelaksanaan</label>
                <div class="col-sm-4">          
                    <input type="date" class="form-control" id="tanggal_pelaksanaan" value="{{ $tebang -> tanggal_pelaksanaan }}" name="tanggal_pelaksanaan">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Status :</label>
                <div class="col-sm-3">          
                <select name="status" id="status" class="form-control">
                    @if($tebang->status=='YA')
                    <option selected value="YA">Terlaksana</option>
                    <option value="TIDAK">Belum Terlaksana</option>
                    @elseif ($tebang->status=='TIDAK')
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