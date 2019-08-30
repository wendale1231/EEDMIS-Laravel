@extends('layouts.app')


@section('content')

<div class="cont" style="width: 100%;" style="background-color: #252636">

    <form  class="well form-horizontal" action="{{route('market.register.store')}}" style="margin: 0 auto" method="post"  id="contact_form">
      @csrf
<fieldset>

<legend>Tenant Registration</legend>


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
    <label class="col-md-4 control-label">Gender</label>
      <div class="col-md-4">
          <div class="radio">
              <label>
                  <input type="radio" name="gender" value="male" /> Male
              </label>
          </div>
          <div class="radio">
              <label>
                  <input type="radio" name="gender" value="female" /> Female
              </label>
          </div>
      </div>
  </div>


<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone_number" placeholder="(09)99999999" class="form-control" type="number">
    </div>
  </div>
</div>
      
<div class="form-group">
  <label class="col-md-4 control-label">Tenant Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>
 
<div class="form-group"> 
  <label class="col-md-4 control-label">Market Address</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="market_address" class="form-control selectpicker" >
      <option value=" ">Please select Market</option>
      <option>Tambo Market</option>
      <option>Wet Market</option>
      <option>Pala-o Market(Unavailable)</option>
    </select>
  </div>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Stall Name</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-shopping-basket"></i></span>
  <input name="stall_name" placeholder="Stall Name" class="form-control"  type="text">
    </div>
  </div>
</div>
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Stall Category</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="stall_category" class="form-control selectpicker" >
      <option value=" " >Please select Category</option>
      <option>Green - Fruits, Vegetables, etc..</option>
      <option>Red - Meats, Chicken, Pork, etc..</option>
      <option>Blue - Seafood</option>
      <option>Yellow - Misc, Store, etc..</option>
    </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Stall ID</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="stall_id" placeholder="Stall ID" class="form-control"  type="text">
    </div>
</div>
</div>

  
<div class="form-group">
  <label class="col-md-4 control-label">Stall Description</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="stall_description" placeholder="Stall Description"></textarea>
  </div>
  </div>
</div>

@if(session('message'))
<div class="alert alert-success" role="alert"> Success<i class="glyphicon glyphicon-thumbs-up"></i> {{session('message')}}!</div>
@endif



<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Register <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div>



@endsection


@section('links')

<!-- <link href="{{ asset('/css/register_tenant.css') }}" rel="stylesheet"> -->

<!-- <script src="{{ asset('js/register_tenant.js') }}" defer></script> -->

@endsection