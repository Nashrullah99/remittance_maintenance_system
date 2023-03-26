@extends('layouts.common')
@section('content')
    <div class="m-4">
    <div class="list-group mt-3">
          <div class="list-group-item d-flex justify-content-between">
            <div>
              <h5 class="text-primary">Monthly Report</h5>
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
                    <h6 style="color:red;text-align:center">Transaction occured by BEFTN</h6> <hr>
                </tr>
                <tr>
                  <th>Date</th>
                  <th>Transfer method</th>
                  <th>REMI no</th>
                  <th>Remitter Name</th>
                  <th>Remitter Country</th>
                  <th>Receiver NID</th>
                  <th>Amount</th>
                  <th>Received by</th>
                </tr>
              </thead>
              <tbody>
                @foreach($transactions as $transaction)
                @if($transaction->method=='BEFTN')
                <tr>
                  <td>{{$transaction->created_at}}</td>
                  <td>{{$transaction->method}}</td>
                  <td>{{$transaction->remiNo}}</td>
                  <td>{{$transaction->remitterName}}</td>
                  <td>{{$transaction->remitterCountry}}</td>
                  <td>{{$transaction->fk}}</td>
                  <td>{{$transaction->amount}}</td>
                  <td>{{$transaction->receivedBy}}</td>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="list-group-item">
            <table class="table table-striped table-hover">
              <thead>
                <r colspan="7">
                    <h6 style="color:red;text-align:center">Transaction occured by PIN</h6> <hr>
                </tr>
                <tr>
                  <th>Date</th>
                  <th>Transfer method</th>
                  <th>REMI no</th>
                  <th>Remitter Name</th>
                  <th>Remitter Country</th>
                  <th>Receiver NID</th>
                  <th>Amount</th>
                  <th>Received by</th>
                </tr>
              </thead>
              <tbody>
                @foreach($transactions as $transaction)
                @if($transaction->method=='PIN')
                <tr>
                  <td>{{$transaction->created_at}}</td>
                  <td>{{$transaction->method}}</td>
                  <td>{{$transaction->remiNo}}</td>
                  <td>{{$transaction->remitterName}}</td>
                  <td>{{$transaction->remitterCountry}}</td>
                  <td>{{$transaction->fk}}</td>
                  <td>{{$transaction->amount}}</td>
                  <td>{{$transaction->receivedBy}}</td>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="list-group-item">
            <table class="table table-striped table-hover">
              <thead>
                <r colspan="7">
                    <h6 style="color:red;text-align:center">Transaction occured by Direct Banking</h6> <hr>
                </tr>
                <tr>
                  <th>Date</th>
                  <th>Transfer method</th>
                  <th>REMI no</th>
                  <th>Remitter Name</th>
                  <th>Remitter Country</th>
                  <th>Receiver NID</th>
                  <th>Amount</th>
                  <th>Received by</th>
                </tr>
              </thead>
              <tbody>
                @foreach($transactions as $transaction)
                @if($transaction->method=='Direct Banking')
                <tr>
                  <td>{{$transaction->created_at}}</td>
                  <td>{{$transaction->method}}</td>
                  <td>{{$transaction->remiNo}}</td>
                  <td>{{$transaction->remitterName}}</td>
                  <td>{{$transaction->remitterCountry}}</td>
                  <td>{{$transaction->fk}}</td>
                  <td>{{$transaction->amount}}</td>
                  <td>{{$transaction->receivedBy}}</td>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="d-flex justify-content-center m-2">
                <button class="btn btn-success"><a href="{{ route('generate-pdf') }}">Generate pdf</a></button>
        </div>
    </div>
@endsection