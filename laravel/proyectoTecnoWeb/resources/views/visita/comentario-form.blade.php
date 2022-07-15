<div class="post-coment text-white">
    <form action="{{route('comentario.guardar', $lugar)}}" role="form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="hidden" class="form-control" value="{{Auth::user()->username}}" readonly>
        </div>
        <div class="form-group">
            <label for="text">Deje su comentario:</label>
            <textarea type="text" class="form-control" name="text" rows="8" required></textarea>
            <input type="hidden" name="usuarioID" value="{{Auth::user()->id}}">
            <input type="hidden" value="{{$lugar->id}}" name="lugarID">
        </div>
        

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subir Imagen (Opcional):</strong>
                <input type="file" name="Imagen" id="Imagen" class="form-control-file btn btn-outline-primary" placeholder="Imagen">
                <br>
            </div>
        </div>
        <div class="grid grid-cols-1 mt-5 mx-7">
            <img id="ImagenSeleccionada" style="max-width: 300px;">
        </div>

        <div class="grid grid-cols-1 mt-5 mx-7">
            <img id="ImagenSeleccionada" style="max-width: 300px;">
        </div>
        <button type="submit" class="btn btn-primary">Comentar</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(function(e) {
            $('#Imagen').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#ImagenSeleccionada').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
</div>