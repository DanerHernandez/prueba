@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Detalle De Pedido
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($detalleDePedido, ['route' => ['detalleDePedidos.update', $detalleDePedido->id], 'method' => 'patch']) !!}

                        @include('detalle_de_pedidos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection