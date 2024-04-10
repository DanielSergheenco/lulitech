@extends('layouts.app')


@section('page-title')
{{ __('Affiliate Program') }}
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('client.dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Affiliate Program</li>
@endsection



@section('content')

<!-- Hoverable rows start -->
<section class="section">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Invite a client and get paid</h4>
            </div>
            <div class="card-content">
                {{__('You referral Link:')}} {{ $referralLink }}
            </div>
        </div>
    </div>


    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Your refferals</h4>
                </div>
                <div class="card-content">

                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Date</th>

                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hoverable rows end -->

@endsection



