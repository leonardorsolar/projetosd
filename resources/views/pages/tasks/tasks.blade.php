<!-- Com a diretiva extends nós herdamos o layout  master colaborador -->
@extends('master')


<!-- Na diretiva section passamos as informações que serão mostradas.  -->
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-7">
          <h5 class="m-0 text-dark">Apresentação</h5>
        </div><!-- /.col -->



            <div class="col-sm-1 pull-right">
            <span>
              <button type="button" class="btn btn-block btn-primary btn-sm float-right" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle "></i>  Sinopse</button>
            </span>
            </div>

    

        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tarefas</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->


<!-- Main content -->
  <div class="content">
    <div class="container-fluid">
  
       

    <div class="row">
       <div class="col-md-12">
    <div class="card card-primary card-outline">
            <div class="card-body">
              <h5 class="card-title">Bem vindo ao curso</h5>

              <p class="card-text">
                
              </p>
            </div>
        </div><!-- /.card -->
      </div>
   </div>

    </div><!-- /.container-fluid -->

  </div>
  <!-- /.content -->

  <!-- modal -->

  <!-- modal -->
@include('pages.tasks.modal')

</div>
<!-- /.content-wrapper -->

@stop



