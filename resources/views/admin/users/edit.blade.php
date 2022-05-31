@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование пользователя</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-12">      
            <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="col-4">
              @csrf 
              @method('PATCH')
              <div class="form-group">
                <label>Имя пользователя</label>
                <input type="text" class="form-control" name="name" placeholder="Имя пользователя" value="{{ $user->name }}">
                @error('name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" value="{{$user->email}}" class="form-control" name="email" placeholder="Email пользователя">
                @error('email')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <input type="submit" class="btn-primary" value="Обновить">
            </form>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection