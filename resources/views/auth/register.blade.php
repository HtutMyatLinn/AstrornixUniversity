<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Username -->
                        <div class="form-group row">
                            <label for="Username"
                                class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                            <div class="col-md-6">
                                <input id="Username" type="text"
                                    class="form-control @error('Username') is-invalid @enderror" name="Username"
                                    value="{{ old('Username') }}" autocomplete="Username" autofocus>
                                @error('Username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- First Name -->
                        <div class="form-group row">
                            <label for="FirstName"
                                class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                            <div class="col-md-6">
                                <input id="FirstName" type="text"
                                    class="form-control @error('FirstName') is-invalid @enderror" name="FirstName"
                                    value="{{ old('FirstName') }}" autocomplete="FirstName">
                                @error('FirstName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="form-group row">
                            <label for="LastName"
                                class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                            <div class="col-md-6">
                                <input id="LastName" type="text"
                                    class="form-control @error('LastName') is-invalid @enderror" name="LastName"
                                    value="{{ old('LastName') }}" autocomplete="LastName">
                                @error('LastName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group row">
                            <label for="Email"
                                class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="Email" type="email"
                                    class="form-control @error('Email') is-invalid @enderror" name="Email"
                                    value="{{ old('Email') }}" autocomplete="Email">
                                @error('Email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group row">
                            <label for="Password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="Password" type="password"
                                    class="form-control @error('Password') is-invalid @enderror" name="Password"
                                    autocomplete="new-password">
                                @error('Password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group row">
                            <label for="Password_confirmation"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="Password_confirmation" type="password" class="form-control"
                                    name="Password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <!-- FacultyID -->
                        <div class="form-group row">
                            <label for="FacultyID"
                                class="col-md-4 col-form-label text-md-right">{{ __('Faculty') }}</label>
                            <div class="col-md-6">
                                <select id="FacultyID" class="form-control @error('FacultyID') is-invalid @enderror"
                                    name="FacultyID">
                                    <option value="">Select Faculty</option>
                                    <option value="1">Math</option>
                                </select>
                                @error('FacultyID')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- RoleID -->
                        <div class="form-group row">
                            <label for="RoleID"
                                class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                            <div class="col-md-6">
                                <select id="RoleID" class="form-control @error('RoleID') is-invalid @enderror"
                                    name="RoleID">
                                    <option value="">Select</option>
                                    <!-- need to change 4 -->
                                    <option value="1">Student</option>
                                </select>
                                @error('RoleID')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>