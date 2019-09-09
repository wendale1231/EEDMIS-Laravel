@extends('layouts.app')


@section('content')


<div class="cont" style="width: 100%;" style="background-color: #252636">

    <form  class="well form-horizontal" action="{{route('slaughter.transact.store')}}" style="margin: 0 auto" method="post"  id="contact_form">
      @csrf
<fieldset>

<legend>Add Transactions</legend>


<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>




<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="client_number" placeholder="(09)99999999" class="form-control" type="text">
    </div>
  </div>
</div>
      
<div class="form-group">
  <label class="col-md-4 control-label">Client Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>
 


   
<div class="form-group"> 
  <label class="col-md-4 control-label">Species</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <select name="species" class="form-control selectpicker" >
          <option disabled selected value=" " >Please select Species</option>
          <option value="cow">Cow</option>
          <option value="pig">Pig</option>
          <option value="chicken">Chiken</option>
          <option value="goat">Goat</option>
        </select>
  </div>
</div>
</div>




  
<div class="form-group">
  <label class="col-md-4 control-label">Unit</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <input type="number" class="form-control" name="unit" placeholder="Units"></input>
  </div>
  </div>
</div>

@if(session('message'))
  <div class="alert alert-success" role="alert"> Success<i class="glyphicon glyphicon-thumbs-up"></i> {{session('message')}}!</div>
@endif



<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Add<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>



@endsection


@section('links')


  <script src="{{ asset('js/render-js.js') }}" defer></script>

@endsection
