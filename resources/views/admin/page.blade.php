@extends('admin.template')

@section('title', 'Link Tree -'.$page->op_title.'- Links')

@section('content')

    <div class="preheader">
        Página: {{$page->op_title}}
    </div>

    <div class="area">
        <div class="leftside">

            <header>
                <ul>
                    <li><a @if($menu=='links') class="active" @endif href="{{url('/admin/'.$page->slug.'/links')}}">Links</a></li>
                    <li><a @if($menu=='design') class="active" @endif href="{{url('/admin/'.$page->slug.'/design')}}">Aparencia</a></li>
                    <li><a @if($menu=='stats') class="active" @endif href="{{url('/admin/'.$page->slug.'/stats')}}">Estatísticas</a></li>
                </ul>
            </header>

            @yield('body')

        </div>
        <div class="rightside">
            <iframe src="{{url('/'.$page->slug)}}" frameborder="0"></iframe>
        </div>
    </div>

@endsection