@extends('layouts.app')


@section('page-title')
{{ __('Dashboard') }}
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Main</li>
@endsection



@section('content')

<!-- Hoverable rows start -->
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">My projects</h4>
                </div>
                <div class="card-content">

                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Service</th>
                                    <th>Project</th>
                                    <th>State</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clientOrders as $order)
                                <tr>
                                    <td class="text-bold-500">{{ $order->created_at->format('m/d/Y') }}</td>
                                    <td>{{ $order->detailed_service }}</td>
                                    <td class="text-bold-500">{{ $order->business_name }}</td>
                                    <td>{{ $order->state }}</td>
                                    <td>
                                        <div class="buttons">
                                            <a class="btn icon icon-left btn-primary"
                                                href="{{ route('orders.show', ['id' => $order->id]) }}">
                                                View Project</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
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
