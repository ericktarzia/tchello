<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Clientes</h1>

<table class="table">
	<thead>
		<tr>
			<td>Nome</td>
			<td>CPF</td>
			<td>Nascimento</td>
			<td>Moeda</td>
			<td>Saldo</td>
		</tr>
	</thead>
	<tbody>
		<?php $counter1=-1;  if( isset($clientes) && ( is_array($clientes) || $clientes instanceof Traversable ) && sizeof($clientes) ) foreach( $clientes as $key1 => $value1 ){ $counter1++; ?>

		<tr>
			<td>
				<?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

			</td>
			<td>
				<?php echo htmlspecialchars( $value1["cpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

			</td>
			<td>
				<?php echo htmlspecialchars( $value1["nascimento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

			</td>
			<td>
				<?php echo htmlspecialchars( $value1["moeda"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

			</td>
			<td>
				<?php echo number_format($value1["saldo"],2); ?>

			</td>
		</tr>
		<?php } ?>

	</tbody>

</table>
<div>
	<a href="clientes_json">JSON</a>
</div>
