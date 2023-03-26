@extends('layouts.common')
@section('content')
<div>
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
                              <th>Branch Name</th>
                              <th>Receiver Name</th>
                              <th>Receiver Phone Number</th>
                              <th>Receiver Address</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($members as $member)
                            <tr>
                              <td>{{$member->branchName}}</td>
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
</div>
@endsection