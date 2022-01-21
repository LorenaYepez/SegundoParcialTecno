

<nav id="sidebar">
    <div class="sidebar-header">
        <h3>!Bienvenida!</h3>
        <h5> {{Auth::user()->personas->nombre}} {{Auth::user()->personas->apellidos}}</h5>
    </div>
    <ul class="lisst-unstyled components">
        <p>MENU</p>
        @if (Auth::user()->personas->tipo == 'A')
        <li>
            <a href="{{ route('personal.index') }}"><span><i class="fa fa-lock" style="margin-left:-5px;"></i></span> Personal</a>
        </li>
        @endif
    <li>
        <a href="#repuesto" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <span><i class="fa fa-home" style="margin-left:-5px;"></i></span> Repuestos</a>
        <ul class="collapse list-unstyled" id="repuesto">
        @if (Auth::user()->personas->tipo == 'A')
        <li>
          <a href="{{ route('categoria.create') }}">Categorías</a>
        </li>
        <li>
          <a href="{{ route('marca.create') }}">Marcas</a>
        </li>
        @endif
        <li>
          <a href="{{ route('repuesto.index') }}">Repuestos</a>
        </li>
        </ul>
    </li>

    <li>
      <a href="#venta" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <span><i class="fa fa-home" style="margin-left:-5px;"></i></span> Ventas</a>
      <ul class="collapse list-unstyled" id="venta">
      @if (Auth::user()->personas->tipo == 'A')
      <li>
          <a href="{{ route('descuento.create') }}">Descuento</a>
        </li>
      <li>
          <a href="{{ route('pago.create') }}">Tipo de Pagos</a>
      </li>
      @endif
      <li>
          <a href="{{ route('cliente.index') }}">Clientes</a>
      </li>
      <li>
         <a href="{{ route('venta.index') }}">Ventas</a>
      </li>
      <li>
         <a href="{{ route('reserva.index') }}">Reservas</a>
      </li>
        </ul>
    </li>
    <li>
      <a href="#pedidos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <span><i class="fa fa-file-alt" style="margin-left:-5px;"></i></span> Pedidos</a>
      <ul class="collapse list-unstyled" id="pedidos">
        <!-- PROVEEDOR -->
        <li>
          <a href="{{ route('proveedor.index') }}">Proveedor</a>
        </li>
         <!-- PEDIDO -->
         <li>
          <a href="{{ route('pedido.index') }}">Pedido</a>
        </li>

      </ul>
    </li>
  </ul>
</nav>
