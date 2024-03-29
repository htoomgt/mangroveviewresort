@extends('layout.master')

@section('page_content')
    <!--================Banner Area =================-->
    @include('resort.resort_banner_area')
    <!--================End Banner Area =================-->

    <!--================Resort Breif Area  Start =================-->
    @include('resort.resort_brief_area')
    <!--================Resort Brief Area End =================-->

    <!--================Explor Room Area =================-->
    @include('resort.villa_type')
    <!--================End Explor Room Area =================-->

    <!--================Amennities Content Area =================-->
    {{-- @include('resort.amenities'); --}}
    <!--================End Amenities Content Area =================-->

    <!-- ============== SPA Area =========================-->
    @include('resort.spa_area')
    <!-- ============== End SPA Area ===================== -->

    <!-- ============== Pool and Private Beach Area Start=========================-->
    @include('resort.pool_and_private_beach_area')
    <!-- ============== Pool Area End =========================-->

    <!-- ============== Restaurant Area Start =========================-->
    {{-- @include('resort.restaurant') --}}
    <!-- ============== Restaurant Area End ===================== -->

    <!-- ============== Pool Area Start=========================-->
    @include('resort.fitness_area')
    <!-- ============== Pool Area End =========================-->

    <!-- ============== Karaoke Area Start =========================-->
    {{-- @include('resort.karaoke') --}}
    <!-- ============== Karaoke Area End===================== -->


    <!-- ============== gallery Area =========================-->
    {{-- @include('resort.gallery') --}}
    <!-- ============== end gallery Area ===================== -->




@endsection


@push('page_js')

    <script>
        $(document).ready(function(){
            // $("#body").addClass('resort-background');
        })
    </script>

@endpush
