@extends('backend.layouts.app')
@section('history','active')
@section('content')
    <div class="container-fluid mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <h6 class="mb-3">Name - Gp1</h6>
                        </div>
                        <div class="col-5" >
                             <h6 style="font-size: 14px">8:00:00 Pm 17/2</h6>
                        </div>
                        <div class="col-2">
                            <h6 class="text-center text-muted" style="font-size: 13px">001</h6>
                        </div>
                    </div>


                    <table class="slip-table">
                        <tr>
                            <th>No</th>
                            <th>အသင်း</th>
                            <th>ကြေး</th>
                            <th>Amount</th>
                            <th>WL</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>ManU</td>
                            <td>-50</td>
                            <td>10000</td>
                        </tr>

                        <tr style="border-top :solid 1px gray">
                            <td></td>
                            <td></td>
                            <td>Total</td>
                            <td>10000</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection
