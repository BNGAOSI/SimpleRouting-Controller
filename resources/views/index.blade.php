@extends('layout.layout')

@section('content')
<div class="row">
    <div class="col-3">
        <div class="card overflow-hidden">
            <div class="card-body pt-3">
                <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{url ('/about-me')}}">
                            <span>About Me</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url ('/skills')}}">
                            <span>Skills</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url ('/hobbies')}}">
                            <span>Hobbies</span></a>
                    </li>

                </ul>
            </div>

        </div>
    </div>

</div>
@endsection
