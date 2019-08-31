@extends('layouts.app')


@section('content')

      <div class="welcome">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="content">
                <h2>Welcome to Dashboard</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <div class="box">
                <i class="fa fa-building fa-fw bg-primary"></i>
                <div class="info">
                  <h3>{{ $stalls_details->count() }}</h3> <span>Total Stalls</span>
                  <p>Total of all Stalls</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <i class="fa fa-check-square-o fa-fw danger"></i>
                <div class="info">
                  <h3>{{ $stalls_details->where('availability', 1)->count() }}  </h3> <span>Stalls Available</span>
                  <p>Available Stalls in total</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <i class="fa fa-users fa-fw success"></i>
                <div class="info">
                  <h3>{{$applicants->count()}}</h3> <span>Registered</span>
                  <p>Registered Tenants</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="charts">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="chart-container">
                <h3>Chart</h3>
                <canvas id="myChart"></canvas>
              </div>
            </div>
            <div class="col-md-6">
              <div class="chart-container">
                <h3>Chart2</h3>
                <canvas id="myChart2"></canvas>
              </div>
            </div>
          </div>
        </div>
      </section>



@endsection


@section('links')


  <script src="{{ asset('js/render-js.js') }}" defer></script>

@endsection


@section('script')


    function load_main_content()
    {
        $('#contents').load('/register');
    }


  @endsection