@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/edit-style.css')}}">
@endsection

@section('js')
<script>
    function openConfirmModal() {
        document.getElementById('confirm-user-deletion').style.display = 'block';
    }

    function closeConfirmModal() {
        document.getElementById('confirm-user-deletion').style.display = 'none';
    }

    function deleteAccount() {
        const passwordInput = document.getElementById('password');
        const passwordError = document.getElementById('password-error');
        const deleteError = document.getElementById('delete-error');

        passwordError.textContent = '';
        deleteError.textContent = '';

        const password = passwordInput.value;

        if (!password) {
            passwordError.textContent = 'Please enter your password.';
            return;
        }

        const formData = new FormData();
        formData.append('password', password);

        fetch('{{ route('profile.destroy') }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Redirect to the home page or any other page
                window.location.href = '/';
            } else {
                if (data.errors && data.errors.password) {
                    passwordError.textContent = data.errors.password[0];
                } else if (data.delete_error) {
                    deleteError.textContent = data.delete_error;
                }
            }
        })
        .catch(error => {
            console.error('An error occurred:', error);
        });
    }
</script>
@endsection

@section('content')
    <div class="top">
        <div class="text">
            <div class="t-head">
                <h1 class="title">Edit <span style="color:#81D98F">Profile</span></h1>
            </div>
        </div>
        <div class="form">
            <div class="infoForm">
            
                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>
            
                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')
            
                    <div>
                        <x-input-label for="name" :value="__('Change Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $account->name)" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
            
                    <div>
                        <x-input-label for="email" :value="__('Change Email')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $account->email)" required autocomplete="username" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
            
                        @if ($account instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $account->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                    {{ __('Your email address is unverified.') }}
            
                                    <button form="send-verification">
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
            
                    <div>
                        <button type="submit">{{ __('Save Changes') }}</button>
            
                        @if (session('status') === 'profile-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
            <div class="passwordForm">
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')
            
                    <div>
                        <x-input-label for="current_password" :value="__('Current Password')" />
                        <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>
            
                    <div>
                        <x-input-label for="password" :value="__('New Password')" />
                        <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>
            
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>
            
                    <div class="flex items-center gap-4">
                        <button type="submit">{{ __('Save Changes') }}</button>
            
                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
            <div class="deleteForm">
                <button class="btn btn-delete" onclick="openConfirmModal()">{{ __('Delete Account') }}</button>

                <div id="confirm-user-deletion" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="delete-account-form" class="p-6" action="{{ route('profile.destroy') }}" method="POST">
                                @csrf
                                @method('delete')
                
                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ __('Are you sure you want to delete your account?') }}
                                </h2>
                
                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                                </p>
                
                                <div class="mt-6">
                                    <label for="password" class="sr-only">{{ __('Password') }}</label>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">
                
                                    <span id="password-error" class="text-danger"></span>
                                </div>
                
                                <div id="delete-error" class="mt-4">
                                    @if ($errors->has('delete_error'))
                                        <span class="text-danger">{{ $errors->first('delete_error') }}</span>
                                    @endif
                                </div>
                
                                <div class="mt-6 text-right">
                                    <button type="button" class="btn btn-secondary" onclick="closeConfirmModal()">
                                        {{ __('Cancel') }}
                                    </button>
                                    <button type="button" class="btn btn-danger ml-3" onclick="deleteAccount()">
                                        {{ __('Delete Account') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
