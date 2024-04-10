@extends('Dashboard.layouts.master')
@section('css')

@section('title')
    {{ __("main.Sliders") }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{__("main.Sliders")}} </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color"> {{__("main.Home_Dashboard")}} </a></li>
                <li class="breadcrumb-item active">{{ __("main.Sliders") }}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12 mb-30">
                        <button class="btn btn-primary m-4" data-toggle="modal" data-target="#exampleModal"> {{__("main.Add_Slide")}} </button>
                      <div class="card card-statistics h-100">
                        <div class="card-body">
                          <div class="table-responsive text-center">
                          <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>image</th>
                                    <th>title</th>
                                    <th>desc</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Sliders as $Slider )
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td> <img src="{{asset("$Slider->filename")}}" width="100" alt=""> </td>
                                    <td> {{$Slider->title}} </td>
                                    <td> {{$Slider->desc }} </td>
                                    <td> 
                                        <button class="btn btn-primary"> <i class="fa-solid fa-pen-to-square"></i> </button>    
                                        <button class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i> </button>    
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                         </table>
                        </div>
                        </div>
                      </div>
                    </div>
                    @include("Dashboard.Pages.Sliders.add")
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
