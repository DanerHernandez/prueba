<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetalle_de_pedidoRequest;
use App\Http\Requests\UpdateDetalle_de_pedidoRequest;
use App\Repositories\Detalle_de_pedidoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Detalle_de_pedidoController extends AppBaseController
{
    /** @var  Detalle_de_pedidoRepository */
    private $detalleDePedidoRepository;

    public function __construct(Detalle_de_pedidoRepository $detalleDePedidoRepo)
    {
        $this->detalleDePedidoRepository = $detalleDePedidoRepo;
    }

    /**
     * Display a listing of the Detalle_de_pedido.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detalleDePedidos = $this->detalleDePedidoRepository->paginate(10);

        return view('detalle_de_pedidos.index')
            ->with('detalleDePedidos', $detalleDePedidos);
    }

    /**
     * Show the form for creating a new Detalle_de_pedido.
     *
     * @return Response
     */
    public function create()
    {
        return view('detalle_de_pedidos.create');
    }

    /**
     * Store a newly created Detalle_de_pedido in storage.
     *
     * @param CreateDetalle_de_pedidoRequest $request
     *
     * @return Response
     */
    public function store(CreateDetalle_de_pedidoRequest $request)
    {
        $input = $request->all();

        $detalleDePedido = $this->detalleDePedidoRepository->create($input);

        Flash::success('Detalle De Pedido saved successfully.');

        return redirect(route('detalleDePedidos.index'));
    }

    /**
     * Display the specified Detalle_de_pedido.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detalleDePedido = $this->detalleDePedidoRepository->find($id);

        if (empty($detalleDePedido)) {
            Flash::error('Detalle De Pedido not found');

            return redirect(route('detalleDePedidos.index'));
        }

        return view('detalle_de_pedidos.show')->with('detalleDePedido', $detalleDePedido);
    }

    /**
     * Show the form for editing the specified Detalle_de_pedido.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detalleDePedido = $this->detalleDePedidoRepository->find($id);

        if (empty($detalleDePedido)) {
            Flash::error('Detalle De Pedido not found');

            return redirect(route('detalleDePedidos.index'));
        }

        return view('detalle_de_pedidos.edit')->with('detalleDePedido', $detalleDePedido);
    }

    /**
     * Update the specified Detalle_de_pedido in storage.
     *
     * @param int $id
     * @param UpdateDetalle_de_pedidoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDetalle_de_pedidoRequest $request)
    {
        $detalleDePedido = $this->detalleDePedidoRepository->find($id);

        if (empty($detalleDePedido)) {
            Flash::error('Detalle De Pedido not found');

            return redirect(route('detalleDePedidos.index'));
        }

        $detalleDePedido = $this->detalleDePedidoRepository->update($request->all(), $id);

        Flash::success('Detalle De Pedido updated successfully.');

        return redirect(route('detalleDePedidos.index'));
    }

    /**
     * Remove the specified Detalle_de_pedido from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detalleDePedido = $this->detalleDePedidoRepository->find($id);

        if (empty($detalleDePedido)) {
            Flash::error('Detalle De Pedido not found');

            return redirect(route('detalleDePedidos.index'));
        }

        $this->detalleDePedidoRepository->delete($id);

        Flash::success('Detalle De Pedido deleted successfully.');

        return redirect(route('detalleDePedidos.index'));
    }
}
