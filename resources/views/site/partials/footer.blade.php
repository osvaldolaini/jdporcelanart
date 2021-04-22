  <footer class="container-fluid ol-footer">
    <div class="container">
        <div class="row text-right">
            <div class="col">
              <span class="copyright">Copyright &copy; @php date('Y') @endphp - {{$config->title}}, todos os direitos reservados. Desenvolvido Por 
                    <picture>
                        <source data-srcset="{{url('storage/images/logos/logo.png')}}" class="lazyload"/>
                        <source data-srcset="{{url('storage/images/logos/logo.webp')}}" class="lazyload"/>
                        <img data-src="{{url('storage/images/logos/logo.png')}}" class="lazyload"/>
                    </picture>
              </span>
            </div>
        </div>
    </div>
  </footer> 