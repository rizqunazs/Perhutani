@extends('backend.admin.admin')

@section('title', "Tambah Hasil Tebang")

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
        <form class="form-horizontal" method="post" action="{{ url('/admin/hasiltebang/add') }}">
            @csrf
            
            <div class="form-group">
                <label class="control-label col-sm-2">ID Tebang :</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="id_tebang" placeholder=" " name="id_tebang">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Jumlah Pohon yang Ditebang :</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="jumlah_tebang" placeholder=" " name="jumlah_tebang">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Volume Tebang :</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="volume_tebang" placeholder=" " name="volume_tebang">
                </div>
            </div>


            
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection