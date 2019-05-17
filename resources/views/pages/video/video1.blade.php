<!-- Com a diretiva extends nós herdamos o layout  master colaborador -->
@extends('master')


<!-- Na diretiva section passamos as informações que serão mostradas.  -->
@section('content')

        <link rel="stylesheet" href="{{ asset('css/video-js.css') }}">
        <!-- js -->
       

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Criatividade</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">vídeos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        


        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Criatividade</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">


              <div align="center">

                        <video 
                          controls preload="none" width="960" height="540"
                          poster="img/vet.png"
                          data-setup="{}">


                                  <source src="video.mp4" type='video/mp4' />
                                

                                  
                                  <track kind="subtitles" src="<?php echo asset('demo.captions.vtt')?>" srclang="pt" label="Portugues"></track><!-- Tracks need an ending tag thanks to IE9 -->  

                                  <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>

                    </video>
          </div>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div><!-- /.row -->



      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop



