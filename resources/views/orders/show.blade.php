@extends('layouts.app')


@section('page-title')
{{ __('Order') }} "{{$order->business_name}}"
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$order->business_name}}</li>
@endsection



@section('content')

<section class="section">

    <div class="row">
        <div class="col-md-12">

            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-project-details-tab" data-bs-toggle="pill"
                                    href="#v-pills-project-details" role="tab" aria-controls="v-pills-project-details"
                                    aria-selected="true">Project Details</a>
                                <a class="nav-link" id="v-pills-project-requirements-tab" data-bs-toggle="pill"
                                    href="#v-pills-project-requirements" role="tab"
                                    aria-controls="v-pills-project-requirements" aria-selected="false">Project
                                    Requirements</a>
                                <a class="nav-link" id="v-pills-agreements-tab" data-bs-toggle="pill"
                                    href="#v-pills-agreements" role="tab" aria-controls="v-pills-agreements"
                                    aria-selected="false">Agreements</a>
                                <a class="nav-link" id="v-pills-invoices-tab" data-bs-toggle="pill"
                                    href="#v-pills-invoices" role="tab" aria-controls="v-pills-invoices"
                                    aria-selected="false">Invoices</a>
                                <a class="nav-link" id="v-pills-customer-inputs-tab" data-bs-toggle="pill"
                                    href="#v-pills-customer-inputs" role="tab" aria-controls="v-pills-customer-inputs"
                                    aria-selected="false">Customer Inputs</a>
                                <a class="nav-link" id="v-pills-project-artifacts-tab" data-bs-toggle="pill"
                                    href="#v-pills-project-artifacts" role="tab"
                                    aria-controls="v-pills-project-artifacts" aria-selected="false">Project
                                    Artifacts</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-project-details" role="tabpanel"
                                    aria-labelledby="v-pills-project-details-tab">
                                    <!-- Content for Project Details tab goes here -->
                                    <div class="card-header">
                                        <h4 class="card-title">Project details</h4>
                                    </div>
                                    <hr>
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="text-bold-500">{{ __('Type') }}:</td>
                                                    <td>{{$order->detailed_service}}</td>
                                                </tr>

                                                <tr>
                                                    <td class="text-bold-500">{{ __('Project State') }}:</td>
                                                    <td>{{$order->state}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">{{ __('Short description') }}:</td>
                                                    <td>{{$order->business_description}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">{{ __('Date ordered') }}:</td>
                                                    <td>{{$order->created_at->format('m/d/Y')}}</td>

                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">{{ __('Delivery date') }}:</td>
                                                    <td>TBD</td>

                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">{{ __('Project Manager') }}:</td>
                                                    <td>Beniamin Andrei</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">{{ __('Total cost') }}:</td>
                                                    <td>TBD</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">{{ __('Contact manager') }}:</td>
                                                    <td>+40 7123456789 (WhatsApp / Telegram)
                                                        beniamin.andreo@lulitech.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>




                                </div>
                                <div class="tab-pane fade" id="v-pills-project-requirements" role="tabpanel"
                                    aria-labelledby="v-pills-project-requirements-tab">
                                    <!-- Content for Project Requirements tab goes here -->
                                    <div class="card-header">
                                        <h4 class="card-title">Project requirements</h4>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-agreements" role="tabpanel"
                                    aria-labelledby="v-pills-agreements-tab">
                                    <!-- Content for Agreements tab goes here -->
                                    <div class="card-header">
                                        <h4 class="card-title">Agreements</h4>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-invoices" role="tabpanel"
                                    aria-labelledby="v-pills-invoices-tab">
                                    <!-- Content for Invoices tab goes here -->
                                    <div class="card-header">
                                        <h4 class="card-title">Invoices</h4>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="v-pills-customer-inputs" role="tabpanel"
                                    aria-labelledby="v-pills-customer-inputs-tab">
                                    <!-- Content for Customer Inputs tab goes here -->
                                    <div class="card-header">
                                        <h4 class="card-title">Customer Inputs</h4>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-project-artifacts" role="tabpanel"
                                    aria-labelledby="v-pills-project-artifacts-tab">
                                    <!-- Content for Project Artifacts tab goes here -->
                                    <div class="card-header">
                                        <h4 class="card-title">Project Artifacts</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
