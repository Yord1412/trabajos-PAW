	<section> 
		<div class="row bg-light m-2">
			<div class="col">
				<label>
					/Productos
				</label>
			</div>
			<div class="col">
				<button data-bs-toggle="modal" data-bs-target="#addProductModal" class=" float-end btn btn-primary">
					Añadir producto
				</button>
			</div>
		</div> 
	</section>
					
	<section>
						
		<div class="row">
							
			<?php for ($i=0; $i < 12; $i++): ?>

				<div class="col-md-4 col-sm-12"> 

					<div class="card mb-2">
						<img src="../public/img/logo.png" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

							<div class="row">
								<a data-bs-toggle="modal" data-bs-target="#addProductModal" href="#" class="btn btn-warning mb-1 col-6">
									 Editar
								</a>
								<a onclick="eliminar(this)" href="#" class="btn btn-danger mb-1 col-6">
									Eliminar
								</a>
								<a href="details.php" class="btn btn-info col-12">
									Detalles
								</a>
							</div>

						</div>
					</div>  

				</div>

			<?php endfor; ?>

		</div>

	</section> 