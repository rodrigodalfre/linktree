@extends('admin.page')

@section('body')

    <a class="bigbutton" href="{{url('/admin/'.$page->slug.'/newlink')}}">Novo Link</a>

    <ul id="links">
        @foreach ($links as $link)
            <li class="link-item">    
                <div class="link-item-order">
                    <img src="{{url('/assets/images/sort.png')}}" alt="sort" width="18px">
                </div>
                <div class="link-item-info">
                    <div class="link-item-title">{{$link->title}}</div>
                    <div class="link-item-href">{{$link->href}}</div>
                </div>
                <div class="link-item-buttons">
                    <a href="{{url('/admin/'.$page->slug.'/editlink/'.$link->id)}}">Editar</a>
                    <a href="{{url('/admin/'.$page->slug.'/dellink/'.$link->id)}}">Excluir</a>
                </div>
            </li>
        @endforeach
    </ul>


@endsection