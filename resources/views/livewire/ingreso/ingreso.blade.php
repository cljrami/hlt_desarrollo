<div>
    <div class="vh-100 d-flex align-items-center justify-content-center ">
        <form action="#" class="sign__form">


            <div class="sign-group">
                <input type="text" class="sign-input" placeholder="Email">
            </div>

            <div class="sign-group">
                <input type="password" class="sign-input" placeholder="Password">
            </div>


            <div class="sign-group sign-group--checkbox">
                <input id="remember" name="remember" type="checkbox" checked="checked">
                <label for="remember">Recordar</label>
            </div>

            <button class="sign-btn" type="button">Ingreso</button>



            <span class="sign-text">No Tienes Cuenta? <a href="{{ route('registro') }}">Regísrate!</a></span>

            <span class="sign-text"><a href=">Olvidó Su Contraeña?</a></span>
        </form>
    </div>
</div>
