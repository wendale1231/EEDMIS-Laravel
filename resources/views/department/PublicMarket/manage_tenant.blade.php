<!-- This Feature will be added soon -->


@extends('layouts.app')


@section('content')

<div class="cont">
  <legend>Manage Tenants</legend>
  @if(session('message'))
    <h5 style="color: green">{{session('message')}}</h5>
  @endif
  <div id="table" class="table-editable">
    <div class="form-group"> 
<!--       <div class="col-md-4 selectContainer">
        <div class="input-group">
            <select onchange="get()" id="stall_category" class="form-control selectpicker" >
              <option value="all" >Please select Category</option>
              <option value="green">Green - Fruits, Vegetables, etc..</option>
              <option value="red">Red - Meats, Chicken, Pork, etc..</option>
              <option value="blue">Blue - Seafood</option>
              <option value="yellow">Yellow - Misc, Store, etc..</option>
            </select>
        </div>
    </div> -->
<!--   <div class="form-group"> 
      <div class="col-md-4 selectContainer">
      <div class="input-group">
        <select onchange="get()" id="stall_address" name="market_address" class="form-control selectpicker" >
          <option value="all">Please select Market</option>
          <option value="Tambo Market">Tambo Market</option>
          <option value="Wet Market">Wet Market</option>
          <option value="Pala-o Market" disabled="true">Pala-o Market(Unavailable)</option>
        </select>
      </div>
    </div>
  </div> -->
<!--     <div class="text-center">
      <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Add</a>
    </div> -->
    <!-- <a href="{{ route('market.manage.create')}}"><span class="table-add glyphicon glyphicon-plus">ADD</span></a> -->
    <table class="table" id="datas">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Market Category</th>
        <th>Market Address</th>
        <th>Stall ID</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
        @foreach($tenant_details as $tenant)
        <tr>
          <form action="{{ route('market.tenants.edit',$tenant->applicant_id)}}" method="get">
            <td>{{$tenant->applicant_id}}</td>
            <td>{{$tenant->name}}</td>
            <td id="{{$tenant->stall_category}}">
              <select name="stall_type" class="form-control selectpicker">
                <option value=" " >Please select Category</option>
                <option @if($tenant->stall_category == 'green') selected @endif value="green">Green - Fruits, Vegetables, etc..</option>
                <option @if($tenant->stall_category == 'red') selected @endif value="red">Red - Meats, Chicken, Pork, etc..</option>
                <option @if($tenant->stall_category == 'blue') selected @endif value="blue">Blue - Seafood</option>
                <option @if($tenant->stall_category == 'yellow') selected @endif value="yellow">Yellow - Misc, Store, etc..</option>
              </select>
            </td>
            <td>{{$tenant->market_address}}</td>
            <td>{{$tenant->stall_id}}</td>
            <td>
                <button value="submit" class="btn btn-primary">Update</button>
            </td>
          </form>
            <td>
                <a href="{{route('market.tenants.show', $tenant->applicant_id)}}" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#ViewTenant">View</a>
            </td>
            <td>
                <form action="{{ route('market.tenants.destroy', $tenant->applicant_id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

  </div>
</div>


<div class="modal fade" id="ViewTenant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        </div>
    </div>
</div>


@endsection

@section('links')

    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('/css/manage_stalls.css') }}" rel="stylesheet">
    <!-- <script src="{{ asset('js/manage_stalls.js') }}" defer></script> -->

@endsection

