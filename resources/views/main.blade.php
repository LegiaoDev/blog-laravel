@include('partials._head')
<body>
  @include('partials._menu')
    <div class="container">
      @include('partials._mensagem')
      @yield('conteudo')
    </div>
  @include('partials._scripts')
  @yield('scripts')
</body>
</html>
