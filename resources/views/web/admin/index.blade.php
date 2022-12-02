@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Información de Registros</h1>
@stop

@section('content')
<div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-file-video"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Numero de Inscripciones</span>
                    <span class="info-box-number">
                        
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-check"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Juegos Individuales</span>
                    <span class="info-box-number"></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-ticket-alt"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Juegos Grupales</span>
                    <span class="info-box-number"></span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-exclamation-circle"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Aulas Disponibles</span>
                    <span class="info-box-number"></span>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop