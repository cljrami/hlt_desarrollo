<div>
    <div>
        <div class="vh-100 d-flex align-items-center justify-content-center ">
            <form wire:click.prevent action="#" class="sign__form">
                @csrf
                <div class="sign-group">
                    <input wire:model="pseudonimo" type="text" class="sign-input" placeholder="Pseudonimo">
                </div>
                <div class="sign-group">
                    <input wire:model="fecha_nacimiento" type="date" class="sign-input" placeholder="Fecha de Nacimiento">
                </div>

                <div class="sign-group">
                    <input wire:model="email" type="text" class="sign-input" placeholder="Email">
                </div>

                <div class="sign-group">
                    <input wire:model="password" type="password" class="sign-input" placeholder="Password">
                </div>
                <div class="sign-group">
                    <input wire:model="password" type="password" class="sign-input" placeholder="Ingrese nuevamente su password">
                </div>
                <div class="sign-group sign-group--checkbox">
                    <input id="remember" name="remember" type="checkbox" checked="checked">
                    <label for="remember">Soy Mayor De Edad</label>
                </div>

                <button wire:click="login" class="sign-btn" type="submit">Regístrate</button>
                <span class="sign-text">Ya Tienss Cuenta? <a href="{{ route('ingreso') }}">Ingresa!</a></span>
            </form>
        </div>
    </div>
