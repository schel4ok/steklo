@extends('layout.main')

@section('content')
 
<h1>{{ $category->title }}</h1>

    <ul>
    
    @foreach ($tree as $node1)
        @if ($node1->menutype != 'none')
        <li><a href="/{{$node1->sef}}">{!! $node1->title !!}</a></li>
            
            @if ($node1->children)
            <ul class="levevl2">
                @foreach ($node1->children as $node2)
                <li><a href="/{{$node2->parent->sef}}/{{$node2->sef}}">{{ $node2->title }}</a></li>

                    @if ($node2->children)
                    <ul class="levevl3">
                        @foreach ($node2->children as $node3)
                        <li><a href="/{{$node2->parent->sef}}/{{$node3->parent->sef}}/{{$node3->sef}}">{{ $node3->title }}</a></li>

                            @if ($node3->children)
                            <ul class="levevl4">
                                @foreach ($node3->children as $node4)
                                <li><a href="/{{$node2->parent->sef}}/{{$node3->parent->sef}}/{{$node4->parent->sef}}/{{$node4->sef}}">{{ $node4->title }}</a></li>
                                @endforeach
                            </ul>
                            @endif

                        @endforeach
                    </ul>
                    @endif

                @endforeach

            </ul>
            @endif

    @endif
    @endforeach
    </ul>

@endsection
