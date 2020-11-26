<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $detalleDePedido->id }}</p>
</div>

<!-- Producto Id Field -->
<div class="form-group">
    {!! Form::label('producto_id', 'Producto Id:') !!}
    <p>{{ $detalleDePedido->producto_id }}</p>
</div>

<!-- Pedido Id Field -->
<div class="form-group">
    {!! Form::label('pedido_id', 'Pedido Id:') !!}
    <p>{{ $detalleDePedido->pedido_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $detalleDePedido->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $detalleDePedido->updated_at }}</p>
</div>

