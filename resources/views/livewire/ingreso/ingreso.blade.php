<div>
    <div class="vh-100 d-flex align-items-center justify-content-center ">
        
        <form wire:click.prevent class="sign__form">
            @csrf
            <div class="sign-group">
                <input wire:model="email" type="text" class="sign-input @error('email') border border-danger @enderror" placeholder="Email">
                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="sign-group">
                <input wire:model="password" type="password" class="sign-input @error('password') border border-danger @enderror" placeholder="Password">
                @error('password')<span class="text-danger">{{ $message }}</span>@enderror
            </div>


            <div class="sign-group sign-group--checkbox">
                <input id="remember" name="remember" type="checkbox" checked="checked">
                <label for="remember">Recordar</label>
            </div>

            <button wire:click="login" class="sign-btn" type="button">Ingreso</button>



            <span class="sign-text">No Tienes Cuenta? <a href="{{ route('registro') }}">Regísrate!</a></span>

            <span class="sign-text"><a href="#">Olvidó Su Contraeña?</a></span>
        </form>
    </div>
</div>
