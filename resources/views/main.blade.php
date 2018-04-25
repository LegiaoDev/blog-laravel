@include('partials._head')
<body>
  @include('partials._menu')
    <div class="container">
      @yield('conteudo')
    </div>
  @include('partials._scripts')
</body>
</html>
