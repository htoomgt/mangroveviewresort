@extends('layout.master')

@section('page_content')
    <!--================Banner Area =================-->
    @include('resort.resort_banner_area')
    <!--================End Banner Area =================-->

    <!--================Explor Room Area =================-->
    @include('resort.room_type')
    <!--================End Explor Room Area =================-->

    <!--================Amennities Content Area =================-->
    @include('resort.amenities');
    <!--================End Amenities Content Area =================-->

    <!-- ============== SPA Area =========================-->  
    @include('resort.spa_area')
    <!-- ============== End SPA Area ===================== -->

    <!-- ============== Restaurant =========================-->  
    @include('resort.restaurant')
    <!-- ============== Restaurant Area ===================== -->    

    <!-- ============== Restaurant =========================-->  
    @include('resort.karaoke')
    <!-- ============== Restaurant Area ===================== -->    
    

    <!-- ============== gallery Area =========================-->  
    @include('resort.gallery')
    <!-- ============== end gallery Area ===================== -->



   
@endsection


@push('page_js')

    <script>
        $(document).ready(function(){
            // $("#body").addClass('resort-background');
        })
    </script>

@endpush
