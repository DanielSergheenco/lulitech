@extends('layouts.app')


@section('page-title')
{{ __('Edit Profile') }}
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">{{ __('Edit Profile') }}</li>
@endsection



@section('content')
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        @include('profile.partials.update-profile-information-form')

        @include('profile.partials.update-password-form')
    </div>
</section>

@include('profile.partials.delete-user-form')



@endsection
