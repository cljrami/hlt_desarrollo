<div>
    <div>
        <div class="vh-100 d-flex align-items-center justify-content-center ">
            <form wire:click.prevent class="sign__form">
                @csrf
                <div class="sign-group">
                    <input wire:model="pseudonimo" type="text" class="sign-input @error('pseudonimo') border border-danger @enderror" placeholder="Pseudonimo">
                    @error('pseudonimo')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="sign-group">
                    <input wire:model="fecha_nacimiento" type="date" class="sign-input @error('fecha_nacimiento') border border-danger @enderror" placeholder="Fecha de Nacimiento">
                    @error('fecha_nacimiento')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="sign-group">
                    <input wire:model="email" type="text" class="sign-input @error('email') border border-danger @enderror" placeholder="Email">
                    @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="sign-group">
                    <input wire:model="password" name="password" type="password" class="sign-input @error('password') border border-danger @enderror" placeholder="Password">
                    @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="sign-group">
                    <input wire:model="password_confirmation" name="password_confirmation" type="password" class="sign-input @error('password_confirmation') border border-danger @enderror" placeholder="Ingrese nuevamente su password">
                    @error('password_confirmation')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="sign-group sign-group--checkbox">
                    <input id="remember" name="remember" type="checkbox" checked="checked">
                    <label for="remember">Soy Mayor De Edad</label>
                </div>

                <button wire:click="registrar" class="sign-btn" type="submit">Regístrate</button>
                <span class="sign-text">Ya Tienes Cuenta? <a href="{{ route('ingreso') }}">Ingresa!</a></span>
            </form>
        </div>
    </div>
