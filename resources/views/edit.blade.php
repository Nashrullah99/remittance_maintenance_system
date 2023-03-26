@extends('layouts.common')
@section('content')
<div class="card bg-light contact-card p-3 m-3" >
        <form action="{{ url('/' . $member->id . '/update') }}" method="POST" class="add-member-form">
                                @csrf 
                                <div>
                                    @if(session('status'))
                                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                                    @endif
                                    <div>
                                        <h4 style="text-align:center">Member Information</h4>
                                    </div><hr>     
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_name">Branch name</label>
                                                <input id="form_name" type="text" name="branchName" value="{{$member->branchName}}" class="form-control" placeholder="Please enter remittance no " required="required" data-error="Firstname is required.">    
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_lastname">Receiver name</label>
                                                <input id="form_lastname" type="text" name="receiverName" value="{{$member->receiverName}}" class="form-control" placeholder="Please enter your phonenumber " required="required" data-error="Lastname is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_name">Receiver phone number</label>
                                                <input id="form_name" type="text" name="receiverNumber" value="{{$member->receiverNumber}}" class="form-control" placeholder="Please enter your username " required="required" data-error="Firstname is required.">    
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_email">Receiver email</label>
                                                <input id="form_email" type="email" name="receiverEmail" value="{{$member->receiverEmail}}" class="form-control" placeholder="Please enter your email " required="required" data-error="Valid email is required.">    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                       
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_need">Receiver ID type</label>
                                                <select id="form_need" name="receiverIdType" class="form-control" value="{{$member->receiverIdType}}" required="required" data-error="Please specify your need.">
                                                    <option value="" selected disabled>--Select ID type--</option>
                                                    <option >NID</option>
                                                    <option >Birth certificate</option>
                                                </select>   
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div>
                                                <label for="form_name">Receiver ID no.</label>
                                                <input id="form_name" type="text" name="receiverId" value="{{$member->receiverId}}" class="form-control" placeholder="Please enter your username " required="required" data-error="Firstname is required.">    
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_name">Receiver Address</label>
                                                <input id="form_name" type="text" name="receiverAdd" value="{{$member->receiverAdd}}" class="form-control" placeholder="Please enter your username " required="required" data-error="Firstname is required.">    
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_lastname">Receiver occupation</label>
                                                <input id="form_lastname" type="text" name="receiveroccu" value="{{$member->receiveroccu}}" class="form-control" placeholder="Please enter your phonenumber " required="required" data-error="Lastname is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <label for="form_message">Comment</label>
                                                <input id="form_message" type="text" name="comment" value="{{$member->comment}}" class="form-control" placeholder="Please enter comments " required="required" data-error="Lastname is required.">
                                            </div>
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <div class="pt-2">
                                                <input type="submit" class="btn btn-success btn-send btn-block" value="Update" >
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </form>                      
        </div>
@endsection