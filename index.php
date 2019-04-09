 <?php
require("header.php");
 ?>
 
    <div class="row">
			<div class="col-md-6">
				<table class="table table-hover table-sm table-info text-center">
					<thead >
						<tr>
							<th>
								#
							</th>
							<th>
								Barcos
							</th>
							<th>
								Coordenadas
							</th>
							<th>
								Alineacion
							</th>
						</tr>
					</thead>
					<tbody>
						<tr >
							<td>
								1
							</td>
							<td>
								Barco 1
							</td>
							<td>

								<input class="form-control" type="text">
								-
								<input class="form-control" type="text">

							</td>
							<td>
								<select class="form-control">
									<option value="horizontal">Horizontal</option>
									<option value="vertical">Vertical</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								2
							</td>
							<td>
								Barco 2
							</td>
							<td>

								<input class="form-control" type="text">-<input class="form-control"
									type="text">

							</td>
							<td>
								<select class="form-control">
									<option value="horizontal">Horizontal</option>
									<option value="vertical">Vertical</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								3
							</td>
							<td>
								Barco 3
							</td>
							<td >

								<input class="form-control " type="text">-<input class="form-control"
									type="text">

							</td>
							<td>
								<select class="form-control">
									<option value="horizontal">Horizontal</option>
									<option value="vertical">Vertical</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								4
							</td>
							<td>
								Barco 4
							</td>
							<td >

								<input class="form-control" type="text">-<input class="form-control"
									type="text">

							</td>
							<td>
								<select class="form-control">
									<option value="horizontal">Horizontal</option>
									<option value="vertical">Vertical</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								5
							</td>
							<td>
								Barco 5
							</td>
							<td >

								<input class="form-control" type="text">-<input class=" form-control"
									type="text">

							</td>
							<td>
								<select class="form-control">
									<option value="horizontal">Horizontal</option>
									<option value="vertical">Vertical</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<form role="form">
					<div class="form-group">

						<label for="inputUsuario">
							Usuario
						</label>
						<input type="text" class="form-control" id="inputUsuario">
					</div>
					
					<button type="submit" class="btn btn-primary">
						Submit
					</button>
				</form>
			</div>
			<div class="col-md-6">
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>

</html>