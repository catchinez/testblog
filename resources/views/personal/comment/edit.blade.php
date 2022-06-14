@extends('personal.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Комментарии</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('personal.main.index') }}">Главная</a></li>
              <li class="breadcrumb-item active">Комментарии</li>
              <!--<li class="breadcrumb-item active">Dashboard v1</li> -->
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
            <form action="{{ route('personal.comment.update', $comment->id) }}" method="POST" class="col-4 w-50" >
              @csrf 
              @method('PATCH')
              <div class="form-group">
                <label>Комментарий</label>
                <textarea  class="form-control" name="message" cols="30" rows="10">{{$comment->message}}</textarea>
                @error('message')
                  <div class="text-danger">Это поле необходимо для заполнения {{ $message }}</div>
                @enderror
              </div>
              <input type="submit" class="btn-primary" value="Обновить">
            </form>
          </div>
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