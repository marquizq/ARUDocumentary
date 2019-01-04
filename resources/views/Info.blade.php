@extends('layouts.app1')
@section('content')


<div class="container">
  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Videos</div>
        <div class="card-body">

          <video video width="950" height="700" controls>
            <source src="{{asset('/storage/v1.mp4')}}" type="video/mp4">

          </video>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Videos</div>
            <div class="card-body">

              <video width="320" height="240" controls>
                <source src="{{asset('/storage/v2.mp4')}}" type="video/mp4">

              </video>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Videos</div>
            <div class="card-body">

              <video width="320" height="240" controls>
                <source src="{{asset('/storage/v3.mp4')}}" type="video/mp4">

              </video>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Videos</div>
            <div class="card-body">

              <video width="320" height="240" controls>
                <source src="{{asset('/storage/v4.mp4')}}" type="video/mp4">

              </video>
            </div>
          </div>
        </div>





@endsection
