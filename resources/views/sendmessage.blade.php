@extends('layouts.common')
@section('content')
<div class="row m-5">
<div class="col-md-6">
<div class="container d-flex flex-column justify-content-center align-items-center">
    <div style="margin-top: 35px">
        <h4 class="mb-2">Send a common message to All beneficiaries</h4>
    </div>
    <div class="card bg-light contact-card p-3 m-3 w-100" style="text-align:center;">
        <form class="" action="" method="POST">
            @csrf
            <div class="d-flex flex-column">
                <div class="pt-2">
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
</div>
<div class="col-md-6">
<div class="container d-flex flex-column justify-content-center align-items-center">
    <div style="margin-top: 35px">
        <h4 class="mb-2">Send a message to a specific number</h4>
    </div>
    @if(session('status'))
        <h6 class="alert alert-success mt-2">{{ session('status') }}</h6>
    @endif
    <div class="card bg-light contact-card p-3 m-3 w-100" style="text-align:center;">
        <form class="" action="{{ route('sendsms') }}" method="POST">
            @csrf
            <div class="d-flex flex-column">
                <div class="pt-2">
                    <label for="form_lastname">Enter phone number</label>
                    <input id="form_lastname" type="text" class="form-control" placeholder="Please enter phone number here " data-error="Lastname is required.">
                </div>
                <div class="pt-2">
                <label for="form_message">write message</label>
                    <textarea id="form_message" name="message" class="form-control w-100" placeholder="Write message here." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                </div>

                <div>
                    <button class="btn btn-success w-100 mt-4" type="submit">Send message</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection