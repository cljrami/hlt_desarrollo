<div>
    <form wire:click.prevent class="col-md-7 col-12">
        <h1>Publica tu historia</h1>
        <h3 class="hlt-section-subtitulo">Libérate y déjanos tu historia</h3>
        <label class="form-label">Seleccióna Categoría</label>
        <select wire:model="categoria" name="categoria" class="form-select form-select-lg mb-3" aria-label="Large select example">
            <option selected>--Seleccione una opción--</option>
            @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
        <label class="form-label">Descripción breve</label>
        <input wire:model="descripcion" name="descripcion" class="form-control form-control-lg" type="text" placeholder="Descricpion" aria-label=".form-control-lg example">
        <div class="pt-3">
            <textarea wire:model="confecion" name="confecion" class="form-control" placeholder="Escriba acá" style="height: 300px"></textarea>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
            <label class="form-check-label" for="flexCheckIndeterminate">
                Declaro ser mayor de edad y <a href="">acepto los términos y condiciónes</>
            </label>
        </div>
        <button wire:click="registrar" type="button" class="btn btn-danger btn-lg">Publicar Historia</button>
    </form>
</div>
