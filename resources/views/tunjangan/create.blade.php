@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Tunjangan</div>

                <div class="panel-body">
                    {!! Form::open(['url'=>'Tunjangan'])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Tunjangan','Kode Tunjangan')!!}
                        {!! Form::text('kode_tunjangan',null,['class'=>'form-control','required'])!!}
                    </div>
                    <label>Nama Jabatan</label>
                    <select name="jabatan_id" class="form-control" required>
                        <option value="">Pilih Nama Jabatan</option>
                        @foreach($jabatans as $baru)
                        <option value="{{$baru->id}}">{{$baru->nama_jabatan}}</option>
                        @endforeach
                    </select><br>
                    <label>Nama Golongan</label>
                    <select name="golongan_id" class="form-control" required>
                        <option value="">Pilih Nama golongan</option>
                        @foreach($golongans as $baru)
                        <option value="{{$baru->id}}">{{$baru->nama_golongan}}</option>
                        @endforeach
                    </select><br>
                    <div class="form-group">
                        {!! Form::label('Status','Status')!!}
                        {!! Form::text('status',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Jumlah Anak','Jumlah Anak')!!}
                        {!! Form::text('jumlah_anak',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang')!!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('save',['class'=>'btn btn-success form-control'])!!}
                    </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
