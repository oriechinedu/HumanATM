@extends('layouts.app')

@section('title')
<title> Wallet | HumanATM</title>
@endsection

@section('content')
  <!-- header -->
  @include('header')
    <body>
        <div class="container-fluid blue-fall outerBox-margin">
            
            <div class="row box-margin">
                    <div class="col-md-8 col-md-offset-2 box-border">
                        <div class="row">
                            <div class="col-md-12 text-center wallet-boxColour">
                                <h3>Make a Request</h3><hr>
                            </div>
                        <div>

                            <div class="row">
                                <div class="col-md-4 col-md-offset-3  wallet-text text-center">
                                    <h4> HUMAN ATM</h4>
                                </div>
                            </div>
                               @foreach ($human_atms as $human_atm)
                                  
                               
                            <div class="row align-items-center profile-margin">
                                <div class="col-md-7 col-md-offset-1 text-center profile-box2">
                                    <h4>{{$human_atm->user->name. "  ,". $human_atm->location}} </h4>
                                </div>

                                <div class="col-md-2 col-md-offset-1 text-center ">
                                    <a href="/human-atm/{{$human_atm->id}}" class="btn btn-primary btn-block profile-box3"> REQUEST </a>
                            </div>
                            </div>
                            @endforeach

                                <div class="row ">
                                    <div class="col-md-4 col-md-offset-3 profile-boxColour profile-static text-center">
                                        <h4> STATIC ATM</h4>
                                    </div>
                                </div>
                                @foreach ($bank_atms as $bank_atm)
                                    
                               
                                <div class="row align-items-center profile-margin">
                                    <div class="col-md-7 col-md-offset-1 text-center profile-box2">
                                        <h4>{{$bank_atm->bank->name . '  ,'. $bank_atm->location}}</h4>
                                    </div>
    
                                   
                                </div>
                                 @endforeach
                              
                            </div>
                            
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
         <!-- Footer -->
 @include('footer')
<!-- End footer-->
    </body>
    @endsection