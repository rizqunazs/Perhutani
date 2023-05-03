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
        <form class="form-horizontal" method="post" action="{{ url('/admin/hasiltanam/update/' . $hasiltanam -> id) }}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2">ID Tanam:</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="id_tanam" value="{{ $hasiltanam -> id_tanam }}" name="id_tanam">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Jumlah Bibit Tanaman :</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="jml_bibittanam" value="{{ $hasiltanam -> jml_bibittanam }}" name="jml_bibittanam">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Jumlah Bibit Semai :</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="jml_bibitsemai" value="{{ $hasiltanam -> jml_bibitsemai }}" name="jml_bibitsemai">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
</div>
@endsection