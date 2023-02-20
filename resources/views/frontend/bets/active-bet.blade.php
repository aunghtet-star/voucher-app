@extends('frontend.layouts.app')
@include('frontend.layouts.nav')

@section('display','d-none d-md-block')


@section('content')
    @if(request()->page === null)
    <a href="{{url('/print-prev/'.$bet_id )}}" class="btn btn-dark btn printBtn float-right mb-3 btn-block"><i class="fas fa-print"></i> Print</a>
    @else
        <a href="{{url('/print-prev/'.request()->page )}}" class="btn btn-dark btn printBtn float-right mb-3 btn-block"><i class="fas fa-print"></i> Print</a>
    @endif
    <div class="card">
    @include('frontend.bets.bet-card')
</div>
    {{$bets->links()}}
@endsection
@section('scripts')
<script>
$( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd',
        onSelect: function(date) {
            $("#filter-form").submit();
            //OR $("#yourButton").click();
        }
    });

} );

$(document).ready(function (){
    $('.printBtn').printPage();
})
</script>
@endsection
