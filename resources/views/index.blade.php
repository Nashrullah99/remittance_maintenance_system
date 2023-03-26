@extends('layouts.common')

@section('content')
    <section class="home active">

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
                                                <label for="form_name">REMI NO.</label>
                                                <input id="form_name" type="text" name="remiNo" class="form-control" placeholder="Please enter remittance no " required="required" data-error="Firstname is required.">    
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_lastname">Name of bank</label>
                                                <input id="form_lastname" type="text" name="bankName" class="form-control" placeholder="Please enter Bank name " required="required" data-error="Lastname is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_name">Branch name</label>
                                                <input id="form_name" type="text" name="branchName" class="form-control" placeholder="Please enter remittance no " required="required" data-error="Firstname is required.">    
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_lastname">Remitter country</label>
                                                <input id="form_lastname" type="text" name="remitterCountry" class="form-control" placeholder="Please enter Bank name " required="required" data-error="Lastname is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_name">Remitter name</label>
                                                <input id="form_name" type="text" name="remitterName" class="form-control" placeholder="Please enter your username " required="required" data-error="Firstname is required.">    
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_lastname">Receiver name</label>
                                                <input id="form_lastname" type="text" name="receiverName" class="form-control" placeholder="Please enter your phonenumber " required="required" data-error="Lastname is required.">
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
                                                <label for="form_lastname">Receiver relationship</label>
                                                <input id="form_lastname" type="text" name="receiverrela" class="form-control" placeholder="Please enter your phonenumber " required="required" data-error="Lastname is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div>
                                            <label for="">Remittance transfer method : </label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="method" id="inlineRadio1" value="PIN">
                                                <label class="form-check-label" for="inlineRadio1">PIN</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="method" id="inlineRadio2" value="Direct Banking">
                                                <label class="form-check-label" for="inlineRadio2">Direct Banking</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="method" id="inlineRadio3" value="BEFTN">
                                                <label class="form-check-label" for="inlineRadio3">BEFTN</label>
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
    <section>
    <div class="list-group">
                      <div class="list-group-item d-flex justify-content-between">
                        <div>
                          <h5>All Beneficiary List</h5>
                        </div>
                        <div>
                          <button type="button" class="btn btn-primary">
                            Total Member <span class="badge text-bg-secondary">{{ $members->count() }}</span>
                          </button>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>REMI no.</th>
                              <th>Branch name</th>
                              <th>Remitter name</th>
                              <th>Beneficiary name</th>
                              <th>Beneficiary Mobile no</th>
                              <th>Beneficiary address</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($members as $member)
                            <tr>
                              <td>{{$member->remiNo}}</td>
                              <td>{{$member->branchName}}</td>
                              <td>{{$member->remitterName}}</td>
                              <td>{{$member->receiverName}}</td>
                              <td>{{$member->receiverNumber}}</td>
                              <td>{{$member->receiverAdd}}</td>
                              <td>
                                <a href="{{ url('/' . $member->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href="{{ url('/' . $member->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                <form method="POST" action="{{ url('/' . $member->id . '/edit') }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="list-group-item d-flex justify-content-center"><button class="btn btn-success" style="width: 120px;">See All</button>
                      </div>
                    </div>
    </section>
@endsection
