@if ($bread->sef != 'bez-kategorii') 


<ul class="breadcrumb">
  <span class="active fa fa-map-marker" title="Вы здесь: " data-toggle="tooltip" data-placement="top">&nbsp;</span>
  
<?php 
$ancestors = $bread->getAncestors(); 
?>


@if (count($ancestors) === 4) 
  <li><a href="/">{{ $ancestors[0]->title }}</a></li>
  <li><a href="/{{$ancestors[1]->sef}}">{{ $ancestors[1]->title }}</a></li>
  <li><a href="/{{$ancestors[1]->sef}}/{{$ancestors[2]->sef}}">{{ $ancestors[2]->title }}</a></li>
  <li><a href="/{{$ancestors[1]->sef}}/{{$ancestors[2]->sef}}/{{$ancestors[3]->sef}}">{{ $ancestors[3]->title }}</a></li>

  @if ($bread->sef != $lastbread) 
  <li><a href="/{{$ancestors[1]->sef}}/{{$ancestors[2]->sef}}/{{$ancestors[3]->sef}}/{{$category->sef}}">{{ $category->title }}</a></li>
  @else 
  <li class="active">{{ $category->title }}</li>
  @endif

@elseif (count($ancestors) === 3) 
  <li><a href="/">{{ $ancestors[0]->title }}</a></li>
  <li><a href="/{{$ancestors[1]->sef}}">{{ $ancestors[1]->title }}</a></li>
  <li><a href="/{{$ancestors[1]->sef}}/{{$ancestors[2]->sef}}">{{ $ancestors[2]->title }}</a></li>

  @if ($bread->sef != $lastbread) 
  <li><a href="/{{$ancestors[1]->sef}}/{{$ancestors[2]->sef}}/{{$category->sef}}">{{ $category->title }}</a></li>
  @else 
  <li class="active">{{ $category->title }}</li>
  @endif

@elseif (count($ancestors) === 2) 
  <li><a href="/">{{ $ancestors[0]->title }}</a></li>
  <li><a href="/{{$ancestors[1]->sef}}">{{ $ancestors[1]->title }}</a></li>

  @if ($bread->sef != $lastbread) 
  <li><a href="/{{$ancestors[1]->sef}}/{{$category->sef}}">{{ $category->title }}</a></li>
  @else 
  <li class="active">{{ $category->title }}</li>
  @endif


@elseif (count($ancestors) === 1) 
  <li><a href="/">{{ $ancestors[0]->title }}</a></li>

  @if ($bread->sef != $lastbread) 
  <li><a href="/{{$category->sef}}">{{ $category->title }}</a></li>
  @else 
  <li class="active">{{ $category->title }}</li>
  @endif

@endif

</ul>


@endif


{{-- 

@if ($bread->sef != $lastbread) 
  <li><a href="/{{$category->parent->sef}}/{{$category->sef}}">{{ $category->title }}</a></li>
@else 
  <li class="active">{{ $category->title }}</li>
@endif

  @foreach ($bread->getAncestors()->toTree() as $ancestor)
  <li><a href="/{{$ancestor->sef}}">{{ $ancestor->title }}</a></li>
    @foreach ($ancestor->children as $level2)
    <li><a href="/{{$level2->sef}}">{{ $level2->title }}</a></li>
      @foreach ($level2->children as $level3)
      <li><a href="/{{$level2->sef}}/{{$level3->sef}}">{{ $level3->title }}</a></li>
        @foreach ($level3->children as $level4)
        <li><a href="/{{$level2->sef}}/{{$level3->sef}}/{{$level4->sef}}">{{ $level4->title }}</a></li>
          @foreach ($level4->children as $level5)
          <li><a href="/{{$level2->sef}}/{{$level3->sef}}/{{$level4->sef}}/{{$level5->sef}}">{{ $level5->title }}</a></li>
          @endforeach
        @endforeach
      @endforeach
    @endforeach
  @endforeach


   это если $lastbread является категорией 
  @foreach ($lastbread->getAncestors()->toTree() as $ancestor)
  <li><a href="/{{$ancestor->sef}}">{{ $ancestor->title }}</a></li>
    @foreach ($ancestor->children as $level2)
    <li><a href="/{{$level2->sef}}">{{ $level2->title }}</a></li>
      @foreach ($level2->children as $level3)
      <li><a href="/{{$level2->sef}}/{{$level3->sef}}">{{ $level3->title }}</a></li>
        @foreach ($level3->children as $level4)
        <li><a href="/{{$level2->sef}}/{{$level3->sef}}/{{$level4->sef}}">{{ $level4->title }}</a></li>
          @foreach ($level4->children as $level5)
          <li><a href="/{{$level2->sef}}/{{$level3->sef}}/{{$level4->sef}}/{{$level5->sef}}">{{ $level5->title }}</a></li>
          @endforeach
        @endforeach
      @endforeach
    @endforeach
  @endforeach
  <li class="active">{{ $category->title }}</li>
</ul>


@elseif ($prevbread != NULL) 
<ul class="breadcrumb">
  <span class="active fa fa-map-marker" title="Вы здесь: " data-toggle="tooltip" data-placement="top">&nbsp;</span>
  {{-- а это если $lastbread является страницей, тогда $prevbread является категорией 
  @foreach ($prevbread->getAncestors()->toTree() as $ancestor)
  <li><a href="/{{$ancestor->sef}}">{{ $ancestor->title }}</a></li>
    @foreach ($ancestor->children as $level2)
    <li><a href="/{{$level2->sef}}">{{ $level2->title }}</a></li>
      @foreach ($level2->children as $level3)
      <li><a href="/{{$level2->sef}}/{{$level3->sef}}">{{ $level3->title }}</a></li>
        @foreach ($level3->children as $level4)
        <li><a href="/{{$level2->sef}}/{{$level3->sef}}/{{$level4->sef}}">{{ $level4->title }}</a></li>
          @foreach ($level4->children as $level5)
          <li><a href="/{{$level2->sef}}/{{$level3->sef}}/{{$level4->sef}}/{{$level5->sef}}">{{ $level5->title }}</a></li>
          @endforeach
        @endforeach
      @endforeach
    @endforeach
  @endforeach
  <li><a href="{{ $catsef }}">{{ $prevbread->title }}</a></li>
</ul>
--}}


