
<style>
        .slip-table th{
                width: 10rem;
            }

        .slip-table td{
                height: 7rem;
            }

        .row{
            display: flex;
            justify-content: space-around;
        }

</style>

<script>
    $(document).ready(function (){
        $('.printBtn').printPage();
    })

    window.print();
</script>

        @foreach($bets as $bet)
            <div class="container-fluid mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <h6 class="mb-3">Name - {{ Auth()->user()->username }}</h6>
                                </div>
                                <div class="col-5" >
                                    <h6 style="font-size: 14px">{{now()->format('H:i:s d/m')}}</h6>
                                </div>
                                <div class="col-2">
                                    <h6 class="text-center text-muted" style="font-size: 10px">{{$bet->id}}</h6>
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
                                @foreach($bet->moungs as $key=>$moung)
                                <tr>
                                    <td>{{ $key+1 }}</td>

                                    <td>
                                        @foreach($teams as $team)
                                            {{ $team->id == $moung->bet_team_id ? $team->name_mm : ''  }}
                                       @endforeach
                                            {{ $moung->bet_total_goal == 'over' ? 'goalပေါ်' : '' }}
                                            {{ $moung->bet_total_goal == 'under' ? 'goalအောက်' : '' }}
                                    </td>
                                    <td style="font-size: 13px">{{$moung->odd_moungs->body_value}} | {{ $moung->odd_moungs->goal_total_value }}</td>
                                    <td>{{$bet->bet_amount}}</td>
                                </tr>
                                @endforeach
                                <tr style="border-top :solid 1px gray">
                                    <td></td>
                                    <td></td>
                                    <td>Total</td>
                                    <td>{{$bet->moungs->count() * $bet->bet_amount}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>




    @endforeach





{{--<div class="card-body ">--}}
{{--    <h2 class="text-center bg-dark text-white p-1 mb-2 rounded">ဘော်ဒီ</h2>--}}
{{--    @foreach($bets as $bet)--}}
{{--    @if($bet->type == 'body')--}}
{{--    <div class="bet-card">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-3 bet-card-inner bet-card-mv1">--}}
{{--                <div class="{{ $bet->over_team_id == $bet->bet_team_id ? 'bet-bg' : 'non-bet-bg' }}">{{$bet->over_team_name}}</div>--}}
{{--                <div class="{{ $bet->bet_total_goal == "over" ? 'bet-bg' : 'non-bet-bg' }}">Over</div>--}}
{{--            </div>--}}
{{--            <div class="col-md-1 bet-card-inner bet-card-mv2">--}}
{{--                <div>{{$bet->over_team_goal}}</div>--}}
{{--            </div>--}}
{{--            <div class="col-md-2 bet-card-inner bet-card-mv3">--}}
{{--                <div>{{ $bet->live_odd->body_value }}</div>--}}
{{--                <div>{{ $bet->live_odd->goal_total_value }}</div>--}}
{{--            </div>--}}
{{--            <div class="col-md-1 bet-card-inner bet-card-mv2">--}}
{{--                <div>{{$bet->under_team_goal}}</div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 bet-card-inner bet-card-mv1">--}}
{{--                <div class="{{ $bet->under_team_id == $bet->bet_team_id ? 'bet-bg' : 'non-bet-bg' }}">{{$bet->under_team_name}}</div>--}}
{{--                <div class="{{ $bet->bet_total_goal == "under" ? 'bet-bg' : 'non-bet-bg' }}">Under</div>--}}
{{--            </div>--}}
{{--            <div class="col-md-2 bet-card-inner bet-card-mvdate">--}}
{{--                <div>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $bet->date)->format('d-m-Y g:i A')}}</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row text-white">--}}
{{--            <div class="col-md-4 offset-md-3 bet-card-mv4">--}}
{{--                <div class="compensation-card">--}}
{{--                    <div class="row justify-content-between"><span>BetID </span><span>{{ $bet->bet_id }}</span></div>--}}
{{--                    <div class="row justify-content-between"><span>လောင်းငွေ </span><span>{{ $bet->bet_amount }}</span></div>--}}
{{--                    <div class="row justify-content-between"><span>ပြန်ရငွေ </span><span>{{ $bet->bet_result == 'win' ? $bet->win_amount:0 }}</span></div>--}}
{{--                    <div class="row justify-content-between"><span>အနိုင်/အရှုံး </span><span>{{ $bet->bet_result == null ? 'pending' : $bet->bet_result }}</span></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endif--}}
{{--    @endforeach--}}
{{--</div>--}}

{{--    <div class="outer-bet-card">--}}
{{--        @foreach($bet->moungs as $moung)--}}
{{--        <div class="bet-card">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3 bet-card-inner bet-card-mv1">--}}
{{--                    <div class="{{ $moung->over_team_id == $moung->bet_team_id ? 'bet-bg' : 'non-bet-bg' }}">{{$moung->over_team_name}}</div>--}}
{{--                    <div class="{{ $moung->bet_total_goal == "over" ? 'bet-bg' : 'non-bet-bg' }}">Over</div>--}}
{{--                </div>--}}
{{--                <div class="col-md-1 bet-card-inner bet-card-mv2">--}}
{{--                    <div>{{$moung->over_team_goal}}</div>--}}
{{--                </div>--}}
{{--                <div class="col-md-2 bet-card-inner bet-card-mv3">--}}
{{--                    <div>{{ $moung->odd_moungs->body_value }}</div>--}}
{{--                    <div>{{ $moung->odd_moungs->goal_total_value }}</div>--}}
{{--                </div>--}}
{{--                <div class="col-md-1 bet-card-inner bet-card-mv2">--}}
{{--                    <div>{{$moung->under_team_goal}}</div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 bet-card-inner bet-card-mv1">--}}
{{--                    <div class="{{ $moung->under_team_id == $moung->bet_team_id ? 'bet-bg' : 'non-bet-bg' }}">{{$moung->under_team_name}}</div>--}}
{{--                    <div class="{{ $moung->bet_total_goal == "under" ? 'bet-bg' : 'non-bet-bg' }}">Under</div>--}}
{{--                </div>--}}
{{--                <div class="col-md-2 bet-card-inne bet-card-mvdate">--}}
{{--                    <div>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $moung->date)->format('d-m-Y g:i A')}}</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @endforeach--}}
{{--        <div class="row text-center text-white">--}}
{{--            <div class="col-md-4 offset-md-3 bet-card-mv4">--}}
{{--                <div class="compensation-card">--}}
{{--                    <div class="row justify-content-between"><span>BetID </span><span>{{ $bet->bet_id }}</span></div>--}}
{{--                    <div class="row justify-content-between"><span>မောင်း </span><span>{{ $bet->moungs->count() }}</span></div>--}}
{{--                    <div class="row justify-content-between"><span>လောင်းငွေ </span><span>{{ $bet->bet_amount }}</span></div>--}}
{{--                    <div class="row justify-content-between"><span>ပြန်ရငွေ </span><span>{{ $bet->bet_result == 'win' ? $bet->win_amount:0 }}</span></div>--}}
{{--                    <div class="row justify-content-between"><span>အနိုင်/အရှုံး </span><span>{{ $bet->bet_result == null ? 'pending' : $bet->bet_result }}</span></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

