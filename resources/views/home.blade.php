@extends('layouts.common')

@section('content')
    <section class="home">

    </section>
    <section id="add-member" class="fluid container">
        <div class="card bg-light contact-card p-3 m-3" >
        <form action="{{ route('addmember') }}" method="POST" class="add-member-form">
                                @csrf 
                                <div>
                                    @if(session('status'))
                                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                                    @endif
                                    <div>
                                        <h4 style="text-align:center">Add Member</h4>
                                    </div><hr>     
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_name">Branch name*</label>
                                                <input id="form_name" type="text" name="branchName" class="form-control" placeholder="Please enter branch name " required="required" data-error="Firstname is required.">    
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_lastname">Receiver name</label>
                                                <input id="form_lastname" type="text" name="receiverName" class="form-control" placeholder="Please enter receiver name " required="required" data-error="Lastname is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_name">Receiver phone number</label>
                                                <input id="form_name" type="text" name="receiverNumber" class="form-control" placeholder="Please enter your username " required="required" data-error="Firstname is required.">    
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_email">Receiver email</label>
                                                <input id="form_email" type="email" name="receiverEmail" class="form-control" placeholder="Please enter your email " required="required" data-error="Valid email is required.">    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                       
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_need">Receiver ID type</label>
                                                <select id="form_need" name="receiverIdType" class="form-control" required="required" data-error="Please specify your need.">
                                                    <option value="" selected disabled>--Select ID type--</option>
                                                    <option >NID</option>
                                                    <option >Birth certificate</option>
                                                </select>   
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div>
                                                <label for="form_name">Receiver ID no.</label>
                                                <input id="form_name" type="text" name="receiverId" class="form-control" placeholder="Please enter your username " required="required" data-error="Firstname is required.">    
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_name">Receiver Address</label>
                                                <input id="form_name" type="text" name="receiverAdd" class="form-control" placeholder="Please enter your username " required="required" data-error="Firstname is required.">    
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_lastname">Receiver occupation</label>
                                                <input id="form_lastname" type="text" name="receiveroccu" class="form-control" placeholder="Please enter your phonenumber " required="required" data-error="Lastname is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <label for="form_message">Comment</label>
                                                <input id="form_message" type="text" name="comment" class="form-control" placeholder="Please enter comments " required="required" data-error="Lastname is required.">
                                            </div>
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <div class="pt-2">
                                                <input type="submit" class="btn btn-success btn-send btn-block" value="submit" >
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </form>                      
        </div>
    </section>
@endsection
