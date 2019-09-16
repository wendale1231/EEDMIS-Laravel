@extends('layouts.app')


@section('content')

<div class="cont">
  <legend>Manage Stalls</legend>
  @if(session('message'))
    <h5>{{session('message')}}</h5>
  @endif
  <div id="table" class="table-editable">
    <div class="form-group"> 
      <div class="col-md-4 selectContainer">
      <div class="input-group">
        <select onchange="get()" id="stall_category" class="form-control selectpicker" >
          <option value="all" >Please select Category</option>
          <option value="green">Green - Fruits, Vegetables, etc..</option>
          <option value="red">Red - Meats, Chicken, Pork, etc..</option>
          <option value="blue">Blue - Seafood</option>
          <option value="yellow">Yellow - Misc, Store, etc..</option>
        </select>
      </div>
  </div>
  <div class="form-group"> 
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
  </div>
    <div class="text-center">
      <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Add</a>
    </div>
    <!-- <a href="{{ route('market.manage.create')}}"><span class="table-add glyphicon glyphicon-plus">ADD</span></a> -->
    <table class="table" id="datas">
      <tr>
        <th>ID</th>
        <th>Stall Code</th>
        <th>Stall Type</th>
        <th>Market</th>
        <th>Availability</th>
        <th></th>
        <th></th>
      </tr>
        @foreach($stalls_details as $stall)
        <tr>
          <form action="{{ route('market.manage.edit',$stall->stall_id)}}" method="get">
            <td>{{$stall->stall_id}}</td>
            <td>{{$stall->stall_code}}</td>
            <td id="{{$stall->stall_type}}">
              <select name="stall_type" class="form-control selectpicker">
                <option value=" " >Please select Category</option>
                <option @if($stall->stall_type == 'green') selected @endif value="green">Green - Fruits, Vegetables, etc..</option>
                <option @if($stall->stall_type == 'red') selected @endif value="red">Red - Meats, Chicken, Pork, etc..</option>
                <option @if($stall->stall_type == 'blue') selected @endif value="blue">Blue - Seafood</option>
                <option @if($stall->stall_type == 'yellow') selected @endif value="yellow">Yellow - Misc, Store, etc..</option>
              </select>
            </td>
            <td id="{{$stall->market_address}}">
              <select name="market_address" class="form-control selectpicker" >
                <option value="">Please select Market</option>
                <option @if($stall->market_address == 'Tambo Market') selected @endif value="Tambo Market">Tambo Market</option>
                <option @if($stall->market_address == 'Wet Market') selected @endif value="Wet Market">Wet Market</option>
                <option @if($stall->market_address == 'Pala-o Market') selected @endif value="Pala-o Market" disabled="true">Pala-o Market(Unavailable)</option>
              </select>
            </td>
            @if($stall->availability)
              <td style="color: green">Available</td>
            @else
              <td style="color: red">Unavailable</td>
            @endif
            <td>
                <button value="submit" class="btn btn-primary">Update</button>
            </td>
          </form>

            <td>
                <form action="{{ route('market.manage.destroy', $stall->stall_id)}}" method="post">
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
<form action="{{ route('market.manage.create')}}" method="get">
  @csrf
  <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Add Stall</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          
          <select name="stall_type" class="form-control selectpicker">
            <option value=" " >Please select Category</option>
            <option value="green">Green - Fruits, Vegetables, etc..</option>
            <option value="red">Red - Meats, Chicken, Pork, etc..</option>
            <option value="blue">Blue - Seafood</option>
            <option value="yellow">Yellow - Misc, Store, etc..</option>
          </select>
          <p>Select Stall Categoty</p>
          <select name="market_address" class="form-control selectpicker" >
            <option value="" selected disabled>Please select Market</option>
            <option value="Tambo Market">Tambo Market</option>
            <option value="Wet Market">Wet Market</option>
            <option value="Pala-o Market" disabled="true">Pala-o Market(Unavailable)</option>
          </select>
          <p>Select Stall Location</p>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-deep-orange" value="{{ csrf_token() }}" name="submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
</form>




@endsection


@section('links')



<!-- I ADD RANI KUNG MA FIX NA NAKO ANG BUG SA JS -->
<link href="{{ asset('/css/manage_stalls.css') }}" rel="stylesheet">
<script src="{{ asset('js/bootstrap-paginator.js') }}" defer></script>
<script src="{{ asset('js/manage_stalls.js') }}" defer></script>

@endsection