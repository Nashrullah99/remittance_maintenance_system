<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\member;
use App\Models\transaction;
use Exception;
use Twilio\Rest\Client;

class IndexController extends Controller
{
    public function index(){
        return view('home');
    }
    public function root(){
        return view('root');
    }

    public function addmember(Request $req){
        $Addmember = new member;
        $Addmember->branchName = $req->input('branchName');
        $Addmember->receiverName = $req->input('receiverName');
        $Addmember->receiverNumber = $req->input('receiverNumber');
        $Addmember->receiverEmail = $req->input('receiverEmail');
        $Addmember->receiverIdType = $req->input('receiverIdType');
        $Addmember->receiverId = $req->input('receiverId');
        $Addmember->receiverAdd = $req->input('receiverAdd');
        $Addmember->receiveroccu = $req->input('receiveroccu');
        $Addmember->comment = $req->input('comment');
        $Addmember->save();
        return redirect()->back()->with('status','Added member successfully');
    }

    public function details($id){
        $user= member::find($id);
        $transaction = transaction::all()->where('fk','=', $user->receiverId);
        return view('details',[
            'user' => $user,
            'transactions' => $transaction,
        ]);
    }
    public function edit($id)
    {
        $member = member::find($id);
        return view('edit',[
            'member' => $member,
        ]);
    }
  
    public function update(Request $request, $id)
    {
        $member = member::find($id);
        $input = $request->all();
        $member->update($input);
        return redirect()->back()->with('status', 'Information Updated!');  
    }
  
    public function delete($id)
    {
        member::destroy($id);
        return redirect()->back()->with('status', 'Member deleted!');  
    }
    public function addtransaction(Request $req){
        $Addtransaction = new transaction;
        $Addtransaction->method = $req->input('method');
        $Addtransaction->remiNo = $req->input('remiNo');
        $Addtransaction->remitterName = $req->input('remitterName');
        $Addtransaction->remitterCountry = $req->input('remitterCountry');
        $Addtransaction->amount = $req->input('amount');
        $Addtransaction->receivedBy = $req->input('receivedBy');
        $Addtransaction->relationship = $req->input('relationship');
        $Addtransaction->fk = $req->input('BId');
        $Addtransaction->save();
        return redirect()->back()->with('status','Added transaction successfully');
    }

    public function searchbeneficiary(Request $req){
        $id = $req->input('searchId');
        // return redirect()->url('seesearch',[$studentid]);
        return to_route('seesearch', [$id]);
    }
    public function seesearch($id){
        $user= member::where ('receiverId', '=', $id)->first();
        $transaction = transaction::all()->where('fk','=', $id);
        return view('details',[
            'user' => $user,
            'transactions' => $transaction,
        ]);
    }

    public function sendsms(Request $req)
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('aa32c992', 'cKny0UBAh2MPYkpf');
        $client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '+8801608786605',
            'from' => 'Janata Bank',
            'text' => $req->message,
        ]);
 
        return redirect()->back()->with('status','Message sent successfully');
    }

    public function monthlyreport()
    {
        $transaction = transaction::all();
        return view('monthlyreport',[
            'transactions' => $transaction,
        ]);
    }
}
