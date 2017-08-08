@extends('layouts.main')
@section('title', 'Home')

@section('content')


<div class="container">
    <h1>Kyle Eisenbarger</h1>
    <h4>Full Stack Developer</h4>
    <div class="social">
       <a href="https://twitter.com/hackkstate" target="_blank"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>
       <a href="https://twitter.com/hackkstate" target="_blank"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
       <a href="https://twitter.com/hackkstate" target="_blank"><i class="fa fa-snapchat fa-lg" aria-hidden="true"></i></a>
       <a href="https://www.facebook.com/hackkstate/" target="_blank"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
       <a href="https://www.instagram.com/hackkstate/" target="_blank"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
       <a href="https://twitter.com/hackkstate" target="_blank"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
       <a href="https://twitter.com/hackkstate" target="_blank"><i class="fa fa-twitch fa-lg" aria-hidden="true"></i></a>
       <a href="https://twitter.com/hackkstate" target="_blank"><i class="fa fa-steam fa-lg" aria-hidden="true"></i></a>


   </div>
 </div>

 <div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/a4OikKyIT_A',containment:'body',autoPlay:true, loop:true, mute:true, showControls:false, opacity:0.5 , quality:'hd1080'}"></div>


@endsection

@section('footer')
@endsection
