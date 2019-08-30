@extends('layouts.app')


@section('content')




<div class="cont">
  <legend>Manage Stalls</legend>
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
    <span class="table-add glyphicon glyphicon-plus">ADD</span>
    <table class="table">
      <tr>
        <th>Stall Type</th>
        <th>Market</th>
        <th>Availability</th>
        <th></th>
        <th></th>
      </tr>
      @foreach($stalls_details as $stall)
      	<tr>
	      	<td contenteditable="true">{{$stall->stall_type}}</td>
	      	<td contenteditable="true">Dummy Market</td>
	      	@if($stall->availability == 1)
	      		<td>Avaliable</td>
	      	@else
	      		<td>Occupied</td>
	      	@endif
  	        <td>
	          <span class="table-remove glyphicon glyphicon-remove"></span>
	        </td>
	        <td>
	          <span class="table-up glyphicon glyphicon-arrow-up"></span>
	          <span class="table-down glyphicon glyphicon-arrow-down"></span>
	        </td>
      	</tr>
      @endforeach

      <!-- This is our clonable table line -->
      <tr class="hide">
        <td contenteditable="true">Untitled</td>
        <td contenteditable="true">undefined</td>
        <td contenteditable="true">undefined</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
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