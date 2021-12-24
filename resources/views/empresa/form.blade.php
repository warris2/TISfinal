
                        <div class="form-group row">
                            <label for="nombre_empresa" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de la empresa') }}</label>

                            <div class="col-md-6">
                                <input id="nombre_empresa" type="text" class="form-control @error('nombre_empresa') is-invalid @enderror" name="nombre_empresa" value="{{ old('nombre_empresa') }}" required autocomplete="nombre_empresa" autofocus>

                                @error('nombre_empresa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Nombre Corto --}}
                        <div class="form-group row">
                            <label for="nombre_corto" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Corto') }}</label>

                            <div class="col-md-6">
                                <input id="nombre_corto" type="text" class="form-control @error('nombre_corto') is-invalid @enderror" name="nombre_corto" value="{{ old('nombre_corto') }}" required autocomplete="nombre_corto" autofocus>

                                @error('nombre_corto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Tipo_Empresa --}}
                        <div class="form-group row">
                            <label for="tipo_empresa" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de sociedad') }}</label>

                            <div class="col-md-6">
                            <input id="tipo_empresa" type="text" class="form-control @error('tipo_empresa') is-invalid @enderror" name="tipo_empresa" value="{{ old('tipo_empresa') }}" required autocomplete="tipo_empresa" autofocus>

                                @error('tipo_empresa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Representante --}}
                        <div class="form-group row">
                            <label for="rep_empresa" class="col-md-4 col-form-label text-md-right">{{ __('Representante legal') }}</label>

                            <div class="col-md-6">
                                <input id="rep_empresa" type="text" class="form-control @error('rep_empresa') is-invalid @enderror" name="rep_empresa" value="{{ old('rep_empresa') }}" required autocomplete="rep_empresa" autofocus>

                                @error('rep_empresa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email_empresa" class="col-md-4 col-form-label text-md-right">{{ __('Email Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="email_empresa" type="email" class="form-control @error('email_empresa') is-invalid @enderror" name="email_empresa" value="{{ old('email_empresa') }}" required autocomplete="email_empresa">

                                @error('email_empresa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                            <div class="col-md-6">
                            <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion">

                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telf_empresa" class="col-md-4 col-form-label text-md-right">{{ __('Telefono Empresa') }}</label>

                            <div class="col-md-6">
                            <input id="telf_empresa" type="text" class="form-control @error('telf_empresa') is-invalid @enderror" name="telf_empresa" value="{{ old('telf_empresa') }}" required autocomplete="telf_empresa">

                                @error('telf_empresa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="socio" class="col-md-4 col-form-label text-md-right">{{ __('Socios') }}</label>

                            <div class="col-md-6">
                            <input id="socio" type="text" class="form-control @error('socio') is-invalid @enderror" name="socio" value="{{ old('socio') }}" required autocomplete="socio">

                                @error('socio')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear Empresa') }}
                                </button>
                                
                            </div>
                        </div>
                    