<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1 style="text-align:center;">Monthly Report</h1>

<table id="customers">
  <tr>
    <th>Date</th>
    <th>Transfer method</th>
    <th>REMI no</th>
    <th>Remitter Name</th>
    <th>Amount</th>
  </tr>
  <tr>
    <td colspan="7" style="text-align:center;color:red">Transaction occured by BEFTN</td>
  </tr>
  @foreach($transactions as $transaction)
    @if($transaction->method=='BEFTN')
        <tr>
            <td>{{$transaction->created_at}}</td>
            <td>{{$transaction->method}}</td>
            <td>{{$transaction->remiNo}}</td>
            <td>{{$transaction->remitterName}}</td>
            <td>{{$transaction->amount}}</td>
        </tr>
    @endif
  @endforeach
    <tr>
        <td colspan="7" style="text-align:center;color:red">Transaction occured by PIN</td>
    </tr>
    @foreach($transactions as $transaction)
    @if($transaction->method=='PIN')
        <tr>
            <td>{{$transaction->created_at}}</td>
            <td>{{$transaction->method}}</td>
            <td>{{$transaction->remiNo}}</td>
            <td>{{$transaction->remitterName}}</td>
            <td>{{$transaction->amount}}</td>
        </tr>
    @endif
  @endforeach
  <tr>
        <td colspan="7" style="text-align:center;color:red">Transaction occured by Direct Banking</td>
    </tr>
    @foreach($transactions as $transaction)
    @if($transaction->method=='Direct Banking')
        <tr>
            <td>{{$transaction->created_at}}</td>
            <td>{{$transaction->method}}</td>
            <td>{{$transaction->remiNo}}</td>
            <td>{{$transaction->remitterName}}</td>
            <td>{{$transaction->amount}}</td>
        </tr>
    @endif
  @endforeach
</table>

</body>
</html>