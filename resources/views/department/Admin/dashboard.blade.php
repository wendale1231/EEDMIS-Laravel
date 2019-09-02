@extends('layouts.app')


@section('content')


      <div class="welcome">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="content">

                <h2>Welcome to Dashboard</h2>
                    @if (isset(Auth::user()->dept))
                    {{Auth::user()->dept}}
                    @endif
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
                <i class="fa fa-envelope fa-fw bg-primary"></i>
                <div class="info">
                  <h3>{{$stall_count->count()}}</h3> <span>Total Stalls</span>
                  <p>Dummy</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <i class="fa fa-file fa-fw danger"></i>
                <div class="info">
                  <h3>{{$stall_avail->count()}}</h3> <span>Stalls Available</span>
                  <p>Dummy</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <i class="fa fa-users fa-fw success"></i>
                <div class="info">
                  <h3>{{$stall_applicant->count()}}</h3> <span>Registered</span>
                  <p>Dummy</p>
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
