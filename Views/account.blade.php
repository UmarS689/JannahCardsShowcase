<!-- ACCOUNT PAGE -->
@extends('layouts.app')
@vite(['resources/css/account.css'])
@section('content')

    <div id="account-container">

        <h1>My Account</h1>

        <div class="account-card">

            <div class="account-row">
                <span class="label">First Name:</span>
                <span class="value">{{ auth()->user()->first_name }}</span>
            </div>

            <div class="account-row">
                <span class="label">Last Name:</span>
                <span class="value">{{ auth()->user()->last_name }}</span>
            </div>

            <div class="account-row">
                <span class="label">Email:</span>
                <span class="value">{{ auth()->user()->email }}</span>
            </div>

            <div class="account-row">
                <span class="label">Phone:</span>
                <span class="value">{{ auth()->user()->phone ?? '—' }}</span>
            </div>

            <div class="account-row">
                <span class="label">Address:</span>
                <span class="value">{{ auth()->user()->address_line_1 ?? '—' }}</span>
            </div>

            <div class="account-row">
                <span class="label">Postcode:</span>
                <span class="value">{{ auth()->user()->postcode ?? '—' }}</span>
            </div>

        </div>

    </div>

@endsection
