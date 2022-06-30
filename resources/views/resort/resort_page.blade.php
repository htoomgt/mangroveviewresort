@extends('layout.master')

@section('page_content')
    <!--================Banner Area =================-->
    <section class="banner_area">
     <div class="container">
         <div class="banner_inner_content">
             <h3>Resort</h3>
             <ul>
                 <li class="active"><a href="index.html">Home</a></li>
                 <li><a href="about-us.html">Resort</a></li>
             </ul>
         </div>
     </div>
 </section>
 <!--================End Banner Area =================-->

     <!--================Introduction Area =================-->
     @include('landing.introduction')
@endsection