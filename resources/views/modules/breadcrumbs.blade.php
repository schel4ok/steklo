{{-- вывод breadcrumb только если родитель не ROOT, то есть не выводить breadcrumb для страниц первого уровня, потому что у нас и так есть заголовок этой страницы--}}
@if (!$bread->parent->isRoot())

  <ul class="breadcrumb">

    {{-- вывод всех родителей со ссылками --}}
    @foreach ($bread->getAncestors() as $ancestor)
       <li><a href="/{{ $ancestor->sef }}">{{ $ancestor->title }}</a></li>
    @endforeach

    {{-- если sef текущей страницы не равен /sef то есть страница не первого уровня, то вывести название этой страницы без ссылки на неё --}}
    @if ( $_SERVER['REQUEST_URI'] != '/'.$bread->sef )  
      <li class="active">{{ $bread->title }}</li>
    @endif

  </ul>

{{-- breadcrumb для раздела news --}}
@elseif ( $bread->sef == 'news' and $_SERVER['REQUEST_URI'] != '/'.$bread->sef )  

  <ul class="breadcrumb">
       <li><a href="/news">Новости</a></li>
  </ul>

@endif