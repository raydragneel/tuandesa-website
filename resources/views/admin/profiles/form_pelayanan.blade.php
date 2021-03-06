@extends('admin.layout')
@section('headTitle',"Pengajuan Pelayanan")
@section('content')
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengajuan Pelayanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/profile')}}">Back</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="row mt-2">
        <div class="col">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              @include('flash::message')
              @include('admin.partials.flash',['$errors' => $errors])
              {!! Form::open(['url' => 'admin/profile/pelayanan', 'enctype' => 'multipart/form-data']) !!}
              {!! Form::hidden('user_id', auth()->user()->id) !!}
              <div class="form-group">
                {!! Form::label('jenis_pelayanan', 'Jenis Pelayanan') !!}
                {!! Form::select('jenis_pelayanan_id', $jenispelayanans,null, ['class' => 'form-control','id' => 'jenis_pelayanan','placeholder' => '--Pilih Jenis Pelayanan--']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('komentar', 'Komentar') !!}
                {!! Form::textarea('komentar', null, ['class' => 'form-control','placeholder' => 'Komentar']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('image', 'Lampiran') !!}
                {!! Form::file('image[]', ['class' => 'form-control-file','placeholder' => 'Lampiran','multiple' => true]) !!}
              </div>
              <div class="form-footer pt-2 border-top">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
              {!! Form::close() !!}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
@endsection

@push('scripts')
@endpush