<div class="table-responsive">
    <table class="table" id="detalleDePedidos-table">
        <thead>
            <tr>
                <th>Producto Id</th>
        <th>Pedido Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detalleDePedidos as $detalleDePedido)
            <tr>
                <td>{{ $detalleDePedido->producto_id }}</td>
            <td>{{ $detalleDePedido->pedido_id }}</td>
                <td>
                    {!! Form::open(['route' => ['detalleDePedidos.destroy', $detalleDePedido->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detalleDePedidos.show', [$detalleDePedido->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('detalleDePedidos.edit', [$detalleDePedido->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
