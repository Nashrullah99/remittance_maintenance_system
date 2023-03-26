@extends('layouts.common')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center">
    <div style="margin-top: 70px">
        <h3 style="text-align:center; color:red;">WELCOME TO</h3>
        <h4 class="mb-5">Janata Bank Remittance Beneficiary Maintenance App</h4>
    </div>
    <div class="card bg-light contact-card p-3 m-3 w-50" style="text-align:center;">
        <form class="" action="{{ route('searchbeneficiary') }}" method="POST">
            @csrf
            <div class="d-flex flex-column">
                <div class="pt-2">
                    <input class="form-control me-2 p-3 w-100" placeholder="Search beneficiary" aria-label="Search" name="searchId">
                </div>

                <div>
                    <button class="btn btn-success w-100 mt-4" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection