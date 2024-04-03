<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('Update Password') }}</h4>
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </div>
        <div class="card-content">
            <div class="card-body">
                <form method="post" action="{{ route('password.update') }}" class="form form-vertical">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="col-12">
                            <div class="form-group">
                            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
                            <x-text-input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                        </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <x-input-label for="update_password_password" :value="__('New Password')" />
                            <x-text-input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
