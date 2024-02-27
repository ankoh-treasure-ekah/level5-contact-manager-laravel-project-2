@extends('layout.app')


@section('content')

<div class="container"> <!-- open container -->
    <div class="row"> <!--  open row -->
      
      <div id="form-header" class="col-12">
        <h1 id="title">Edit Contact</h1>
      </div>
    </div> <!--  close row --> 
   
   <div class="row"> <!--  open row -->    
       <div id="form-tagline" class="col-md-4">
           <div class="form-tagline">
               <i class="fa fa-envelope fa-5x"></i>
               <h2>How Are We Doing?</h2>
               <p id="description" class="lead">Edit Contact</p>
           </div>
       </div>
      
       <div id="form-content" class="col-md-8">
         
         <form id="survey-form" action="{{route('update-contact', $contact->id)}}" method="post"> <!-- open form -->
             @csrf         
             <div class="row form-group">
                <div class="col-sm-3">
                 <label id="name-label" class="control-label" for="name">*first name:</label>
                </div>
               
                <div class="input-group col-sm-9">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon-name"><i class="fa fa-user"></i></span>
                  </div>                   
                  <input id="name" type="text" class="form-control" placeholder="first name" name="firstName" value="{{$contact->firstName}}" required>
                </div>
             </div>
             <div class="row form-group">
                <div class="col-sm-3">
                 <label id="name-label" class="control-label" for="name">*last name:</label>
                </div>
               
                <div class="input-group col-sm-9">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon-name"><i class="fa fa-user"></i></span>
                  </div>                   
                  <input id="name" type="text" class="form-control" placeholder="last name" name="lastName" value="{{$contact->lastName}}" required>
                </div>
             </div>
              
             <div class="form-group row">
                <div class="col-sm-3">
                  <label id="email-label" class="control-label" for="email">*Email:</label>
                </div>
              
                <div class="input-group col-sm-9">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon-mail"><i class="fa fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" pattern="^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$" value="{{$contact->email}}" required>
                </div>
             </div>
              
             <div class="form-group row">
                <div class="col-sm-3">
                  <label id="number-label" class="control-label" for="email">*Phone Number:</label>
                </div>
              
                <div class="input-group col-sm-9">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon-room"><i class="fa fa-door-open"></i></span>
                  </div>
                  <input type="number" class="form-control" id="number" placeholder="phone number" name="phone" value="{{$contact->phone}}" required>
                </div>
              </div>
              
        

             <div class="form-group row">
                <div class="col-sm-3">
                  <label id="number-label" class="control-label" for="email">*address:</label>
                </div>
              
                <div class="input-group col-sm-9">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon-room"><i class="fa fa-door-open"></i></span>
                  </div>
                  <input type="text" class="form-control" id="number" placeholder="address" name="address" value="{{$contact->address}}" required>
                </div>
              </div>
              
             
             
              <div class="form-group row">    
                <div class="col-sm-3">
                  <label class="control-label"for="visit-purpose">group:</label>
                </div>
                
                <div class="input-group col-sm-9">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon-purpose"><i class="fa fa-hotel"></i></span>
                  </div>
                  <input type="text" id="" value="{{$contact->group}}" readonly> ----->
                  <select value="work" class="form-control" id="dropdown" name="group">
                    <option>Family</option>
                    <option>work</option>
                    <option>Friends</option>
                    <option>Other</option>
                  </select>
                  
                </div>     
             </div>
              
           
             
           <div class="form-group row">
             <div class="col-sm-12 submit-button">
               <button type="submit" id="submit" class="btn btn-default" aria-pressed="true">Edit Contact</button>
             </div>
           </div>
                            
         </form> <!-- close form -->

     </div> <!-- close form content div -->
            
   </div> <!-- close row -->
</div><!--  close container -->

@stop