@extends('backend.layouts.app')
@section('group','active')
@section('content')
    <div class="container pt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('group.store')}}" id="form" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">User</label>
                            <select name="user_id" class="form-control select-role" id="">
                                <option value="">Select User</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->username}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Team A</label>
                                    <select name="team_one_id" class="form-control select-role" id="">
                                        <option value="">Select Team</option>
                                        @foreach($teams as $team)
                                            <option value="{{$team->id}}">{{$team->name_mm}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Team B</label>
                                    <select name="team_two_id" class="form-control select-role" id="">
                                        <option value="">Select Team</option>
                                        @foreach($teams as $team)
                                            <option value="{{$team->id}}">{{$team->name_mm}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="text-bold">ဘော်ဒီ</label>
                            <input type="text" name="open_body" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-bold">Total Goal</label>
                            <input type="text" name="total_goal" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Bet</label>
                            <input type="text" name="bet" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Amount</label>
                            <input type="number" name="amount" class="form-control">
                        </div>

                        <button type="button" class="btn-primary btn-sm float-right" onclick="confirmBtn()">Confirm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        // function addFunction(id, event) {
        //     event.preventDefault();
        //     $('#loaderIcon_'+id).show();
        //     var win_amount = $('#win-amount-'+id).val();
        //     var input_id = '.bet_result_'+id;
        //     var bet_result = $(input_id+":checked").val();
        //     // var url = form.attr('action'); //get submit url
        //     const swalWithBootstrapButtons = Swal.mixin({
        //         customClass: {
        //             confirmButton: 'btn btn-success',
        //             cancelButton: 'btn btn-danger'
        //         },
        //         buttonsStyling: false
        //     })
        //     swalWithBootstrapButtons.fire({
        //         title: 'သေချာပါသလား?',
        //         text: 'အလျော်အစား',
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonText: 'သေချာသည်',
        //         cancelButtonText: 'မသေချာပါ',
        //         reverseButtons: true
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             $.ajax({
        //                 type: "POST",
        //                 url: "/admin/bets/bet-details/compensation",
        //                 data:{
        //                     win_amount: win_amount,
        //                     bet_id: id,
        //                     bet_result: bet_result
        //                 },
        //                 success: function(data){
        //                     $('#loaderIcon_'+id).hide();
        //                     $('.bet-result-'+id).show();
        //                     console.log(data);
        //                     $('.bet-result-text-'+id).text("Result : "+bet_result);
        //                     $('.bet-result-amount-'+id).text("Amount : "+win_amount);
        //                     $('#form_'+id).hide();
        //                 }
        //             });
        //         }else{
        //             $('#loaderIcon_'+id).hide();
        //         }
        //     })
        //     // document.getElementById('formq'+id).submit();
        // }


        function confirmBtn(){
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Confirm',
                cancelButtonText: 'Cancel',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#form').submit()
                }
            })
        }



    </script>

@endsection
