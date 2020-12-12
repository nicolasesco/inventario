<div id="addProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="add_product" id="add_product">
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Producto</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Código</label>
							<input type="text" name="code"  id="code" class="form-control" required>
							
						</div>
						<div class="form-group">
							<label>Producto</label>
							<input type="text" name="name" id="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Categoría</label>
							
							<select type="text" name="category" id="category"  class="form-control">
  								<option>Otros</option>					
 							    <option>Archivo y Clasificacion</option>
								 <option>Materiales para manualidades</option>
								 <option>Arte</option>
								 <option>Articulos Escritorio</option>
								 <option>Articulos Para pintar</option>
								 <option>Blocks</option>
								 <option>Cartulinas y Cartones</option>
								 <option>Cintas Adhesivas  Portacinta  Pegamentos</option>
								 <option>Cuadernos cuadernolas y Libretas</option>
								 <option>Encuadernacion y plastificacion</option>
								 <option>Escritura y correcion</option>
								 <option>Etiquetas y etiquetadoras</option>
								 <option>Formularios y fichas</option>
								 <option>Geometria y Dibujo</option>
								 <option>Hojas</option>
								 <option>Agendas</option>
								 <option>Sobres</option>
								 <option>Informatica</option>
								 <option>Masas</option>
								 <option>Recibos - Notas de Pedido</option>
								 <option>Calculadora</option>
								<option>Libros de cuentos</option>
							</select>
						</div>
						<div class="form-group">
							<label>Proveedor</label>
							<input type="text" name="proveedor" id="proveedor" class="form-control">
						</div>
						<div class="form-group">
						   <label>Precio (sin Iva)</label>
						   <input type="text" name="siniva" id="siniva" class="form-control" placeholder="Solo sirve para calcular IVA" onkeyUp="calculariva();">
						</div>	
						<div class="form-group">		
							<label>Precio Costo (Iva Incl)</label>
							<input type="text" name="stock" id="stock" class="form-control"  onkeyUp="calculartotal();">
						</div>
						<div class="form-group">
							<label>Precio (Iva Incl)</label>
							<input type="number" name="price" id="price" class="form-control" required  >
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>