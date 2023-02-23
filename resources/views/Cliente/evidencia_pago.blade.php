@include('header')

<div class="form-neon">
<h3 class="text-center"><br>Comprobante de pago</h3>
<hr>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            <figure>
                <img class="img-fluid img-product-info" src="/img/product01.png" alt="">
            </figure>
        </div>
        <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">Realme C11 2021</h2>							
                    <div>
                        <h3 class="product-price">$2394.00</h3>
                    </div>
                    <p>Realme C11 2021 32GB 2GB</p>
                    <br>
                    <form">
                        <input type="hidden" name="" value="">								
                        <input type="hidden" name="" value="">								
                        <div class="add-to-cart">
                            <div class="qty-label">
                                Cant.
                                <div class="input-number">
                                    <input type="number" name="cantidad">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        <div class="col-12 col-md-6">
            <form>
                <input type="hidden" name="producto_img_id_up" value="VWFpb2w2V3lkbW45Szk5dWJ1SlBrdz09">
                <input type="hidden" name="modulo_producto" value="img_actualizar">
                <fieldset>
                    <H4><i class="fa fa-image"></i> &nbsp; SUBIR COMPROBANTE DE PAGO</H4>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="producto_foto" id="producto_foto" accept=".jpg, .png, .jpeg">
                                    <p><br>Tipos de archivos permitidos: JPG, JPEG, PNG. Tamaño máximo 3MB. Resolución recomendada 300px X 300px o superior manteniendo el aspecto cuadrado (1:1)</p>
                                </div>
                                <p class="text-center" style="margin-top: 40px;">
                                    <button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync"></i> &nbsp; ENVIAR</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>

@include('footer')