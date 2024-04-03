
<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('Profile Information') }}</h4>
            {{ __("Update your account's profile information and email address.") }}
        </div>
        <div class="card-content">
            <div class="card-body">
                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>

                <form method="post" action="{{ route('profile.update') }}" class="form form-vertical">
                    @csrf
                    @method('patch')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                        <div>
                                            <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                                {{ __('Your email address is unverified.') }}

                                                <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                    {{ __('Click here to re-send the verification email.') }}
                                                </button>
                                            </p>

                                            @if (session('status') === 'verification-link-sent')
                                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                                    {{ __('A new verification link has been sent to your email address.') }}
                                                </p>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="phone_number">Phone</label>
                                    <x-input-label for="phone_number" :value="__('Phone')" />
                                    <x-text-input id="phone_number" name="phone_number" type="text" class="form-control" :value="old('phone_number', $user->phone_number)" required autofocus autocomplete="phone_number" />
                                    <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
