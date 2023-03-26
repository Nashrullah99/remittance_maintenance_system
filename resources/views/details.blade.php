@extends('layouts.common')
@section('content')
<div class="row m-3">
    <div class="col-md-4">
    <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th colspan="2" style="background-color: rgb(83, 223, 83); text-align: center;">Details of {{ $user->receiverName }}</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><strong>Branch Name</strong></td>
                            <td>{{ $user->branchName }}</td>
                          </tr>
                          <tr>
                            <td><strong>Beneficiary name</strong></td>
                            <td>{{ $user->receiverName }}</td>
                          </tr>
                          <tr>
                            <td><strong>Beneficiary mobile number</strong></td>
                            <td>{{ $user->receiverNumber }}</td>
                          </tr>
                          <tr>
                            <td><strong>Beneficiary Email</strong></td>
                            <td>{{ $user->receiverEmail }}</td>
                          </tr>
                          <tr>
                            <td><strong>Beneficiary ID type</strong></td>
                            <td>{{ $user->receiverIdType }}</td>
                          </tr>
                          <tr>                       
                            <td><strong>Beneficiary ID no</strong></td>
                            <td>{{ $user->receiverId }}</td>
                          </tr>
                          <tr>
                            <td><strong>Beneficiary Address</strong></td>
                            <td>{{ $user->receiverAdd }}</td>
                          </tr>
                          <tr>
                            <td><strong>Beneficiary Occupation</strong></td>
                            <td>{{ $user->receiveroccu }}</td>
                          </tr>
                          <tr>
                            <td><strong>Comments</strong></td>
                            <td>{{ $user->comment }}</td>
                          </tr>
                        </tbody>
                    </table>
    </div>
    <div class="col-md-7">
        <div>
        <button class="transaction-btn" data-id="add-transaction">Make Transaction</button>
        </div>
        <div>
        <button class="transaction-btn mt-2" data-id="send-message">Send SMS</button>
        </div>
        @if(session('status'))
            <h6 class="alert alert-success mt-2">{{ session('status') }}</h6>
        @endif
        <div class="contentt" id="send-message">
        <div class="card bg-light contact-card p-3 m-3 w-50" style="text-align:center;">
        <form class="" action="{{ route('sendsms') }}" method="POST">
            @csrf
            <div class="d-flex flex-column">
                <div>
                    <label for="form_message">write message</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Write message here." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                </div>               
                <div>
                    <button class="btn btn-success w-100 mt-4" type="submit">Send message</button>
                </div>
            </div>
        </form>
    </div>
        </div>
        <div class="contentt" id="add-transaction">
        <div class="card bg-light contact-card p-3 m-3" >
        <form action="{{ route('addtransaction') }}" method="POST" class="">
            @csrf 
            <div> 
                <input type="hidden" id="beneficiary ID" name="BId" value="{{ $user->receiverId }}">
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
                <div class="row" pt-2>
                    <div class="col-md-12">
                        <div>
                            <label for="form_name" class="pb-2">RENI no.</label>
                            <input id="form_name" type="text" name="remiNo" class="form-control" placeholder="Please enter Remi no " required="required" data-error="It is required.">    
                        </div>
                    </div>
                </div>
                <div class="row" pt-2>
                    <div class="col-md-12">
                        <div>
                            <label for="form_name" class="pb-2">Remitter name</label>
                            <input id="form_name" type="text" name="remitterName" class="form-control" placeholder="Please enter Remitter name " required="required" data-error="It is required.">    
                        </div>
                    </div>
                </div>
                <div class="row" pt-2>
                    <div class="col-md-12">
                        <div>
                            <label for="form_name" class="pb-2">Remitter country</label>
                            <input id="form_name" type="text" name="remitterCountry" class="form-control" placeholder="Please enter Remitter country " required="required" data-error="It is required.">    
                        </div>
                    </div>
                </div>
                <div class="row" pt-2>
                    <div class="col-md-12">
                        <div>
                            <label for="form_name" class="pb-2">Enter Amount</label>
                            <input id="form_name" type="text" name="amount" class="form-control" placeholder="Please enter proper amount " required="required" data-error="It is required.">    
                        </div>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-12">
                        <div>
                            <label for="form_need">Select remittance amount receiver type</label>
                            <select id="form_need" name="receivedBy" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Select receiver type--</option>
                                <option >Self</option>
                                <option >Others</option>
                            </select>   
                        </div>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-12">
                        <div>
                            <label for="form_name" class="pb-2">If others then fill relationship</label>
                            <input id="form_name" type="text" name="relationship" class="form-control" placeholder="Please write relationship if others " data-error="It is required.">    
                        </div>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-12">
                        <div class="pt-2 w-100">
                            <input type="submit" class="btn btn-success btn-send btn-block w-100" value="submit" onclick="return confirm('All informations are correct?')" >
                        </div>                                            
                    </div>
                </div>
            </div>                    
        </form>                      
        </div> 
        </div>
        <div class="list-group mt-3">
          <div class="list-group-item d-flex justify-content-between">
            <div>
              <h5>Transaction History</h5>
            </div>
            <div>
              <button type="button" class="btn btn-primary">
                Total transaction occured <span class="badge text-bg-secondary">{{ $transactions->count() }}</span>
              </button>
            </div>
          </div>
          <div class="list-group-item">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Transfer method</th>
                  <th>REMI no</th>
                  <th>Remitter Name</th>
                  <th>Remitter Country</th>
                  <th>Amount</th>
                  <th>Received by</th>
                </tr>
              </thead>
              <tbody>
                @foreach($transactions as $transaction)
                <tr>
                  <td>{{$transaction->created_at}}</td>
                  <td>{{$transaction->method}}</td>
                  <td>{{$transaction->remiNo}}</td>
                  <td>{{$transaction->remitterName}}</td>
                  <td>{{$transaction->remitterCountry}}</td>
                  <td>{{$transaction->amount}}</td>
                  <td>{{$transaction->receivedBy}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
@endsection