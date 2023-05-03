@extends('backend.admin.admin')

@section('title', "Tambah Penanaman")

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
        <form class="form-horizontal" method="post" action="{{ url('/admin/hasiltanam/add') }}">
            @csrf
            
            <div class="form-group">
                <label class="control-label col-sm-2">ID Tanam :</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="id_tanam" placeholder=" " name="id_tanam">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Jumlah Bibit Tanam:</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="jml_bibittanam" placeholder=" " name="jml_bibittanam">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Jumlah Bibit Semai :</label>
                <div class="col-sm-6">          
                    <input type="text" class="form-control" id="jml_bibitsemai" placeholder=" " name="jml_bibitsemai">
                </div>
            </div>


            
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection