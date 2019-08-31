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
        <select name="stall_category" class="form-control selectpicker" >
          <option value=" " >Please select Category</option>
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
        <select name="market_address" class="form-control selectpicker" >
          <option value=" ">Please select Market</option>
          <option value="Tambo Market">Tambo Market</option>
          <option value="Wet Market">Wet Market</option>
          <option value="Pala-o Market" disabled="true">Pala-o Market(Unavailable)</option>
        </select>
      </div>
    </div>
  </div>
    <a href="{{ route('market.manage.create')}}"><span class="table-add glyphicon glyphicon-plus">ADD</span></a>
    <table class="table">
      <tr>
        <th>ID</th>
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
            <td><input type="text" name="stall_type" value="{{$stall->stall_type}}"></td>
            <td>Dummy Market</td>
            @if($stall->availability)
              <td>Available</td>
            @else
              <td>Unavailable</td>
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

      <!-- This is our clonable table line -->
      <tr class="hide">
        <td>{{count($stalls_details)}}
        <td contenteditable="true">Untitled</td>
        <td contenteditable="true">undefined</td>
        <td contenteditable="true">undefined</td>
        <td>
            <a href="{{ route('market.manage.edit',$stall->stall_id)}}" class="btn btn-primary">Edit</a>
        </td>
        <td>
          <form action="{{ route('market.manage.destroy', $stall->stall_id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
    </table>
  </div>
  
  <button id="export-btn" class="btn btn-primary">Export Data</button>
  <p id="export"></p>
</div>



@endsection


@section('links')



<!-- I ADD RANI KUNG MA FIX NA NAKO ANG BUG SA JS -->
<link href="{{ asset('/css/manage_stalls.css') }}" rel="stylesheet">

<script src="{{ asset('js/manage_stalls.js') }}" defer></script>

@endsection