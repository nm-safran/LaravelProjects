@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Transaction to Export') }}</div>

                <div class="card-body">
                    <b>Please check details:</b>
                    <br />
                    @if ($transaction)
                        ID: {{ $transaction->id }}<br />
                        Description: {{ $transaction->description }}<br />
                        Amount: ${{ number_format($transaction->amount / 100, 2) }}<br />
                        User: {{ $transaction->user ? $transaction->user->name : 'User not found' }}<br />
                        Created at: {{ $transaction->created_at }}<br />
                    @else
                        <p>Transaction not found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
