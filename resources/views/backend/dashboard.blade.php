@extends('layouts.backend.app')
@section('content')
   
    
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
    
     
        <section class="content">
       
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>15</h3>
    
                  <p>Ordenes</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Más <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53</h3>
    
                  <p>Usuarios registrados</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Más <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            
          </div>
       
          <div class="row">
         
            <section class="col-lg-7 connectedSortable">
            
              <div class="nav-tabs-custom">
             
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                  
                  <li class="pull-left header"><i class="fa fa-inbox"></i> Ventas</li>
                </ul>
                <div class="tab-content no-padding">
                
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                
                </div>
              </div>
    
            </section>
          
          </div>
        
    
        </section>
      
      </div>


      
@endsection
