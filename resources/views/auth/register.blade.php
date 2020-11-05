<x-app>
    <div class="container top py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="header-login font-italic">{{ __('Registrati su presto.it') }}</div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Conferma password') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="bg-yellow border-0 text-white p-2 rounded">
                                        {{ __('Registrati') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>


{{--  <x-app>
    
    <div class="container py-5 top">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registrati su presto.it') }}</div>
                    
                    <div class="card-body">

                        <form class="text-center border border-light p-5" method="POST" action="{{ route('register') }}">
                            @csrf   
                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="text"  class="form-control" placeholder="Nome">
                                </div>
                                <div class="col">
                                    <input type="text"  class="form-control" placeholder="Cognome">
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col">
                                <input type="email"  class="form-control" placeholder="E-mail">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Cellulare" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <input type="password"  class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            </div>
                            <div class="form-row mb-4">
                                    <input type="password"  class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            </div>

                           <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <label class="custom-control-label">Privacy Policy</label>
                            </div> 
                             <button class="btn btn-info my-4 btn-block" type="submit">Registrati</button> 

                            <p>oppure accedi con:</p>
                            
                            <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                            <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                            <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                            <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
    </x-app>  --}}