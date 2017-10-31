 @extends('layouts.app')

 @section('title')
 <title> Password Reset | HumanATM</title>


 @section('content')
 <body class="signup-body">
    <section>
     @include('header')
 </section>
 <section id='' class='forgotpassword-container'>
    <div class = "container signup-content">
        <div class="signup-header">
            <div class="">
                <svg width="100" height="100" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>Group 2</title>
                    <desc>Created using Figma</desc>
                    <g id="Canvas" transform="translate(-18512 18081)">
                        <g id="Group 2">
                            <g id="Ellipse">
                                <use xlink:href="#path0_fill" transform="translate(18512 -18081)" fill="#FFFFFF"/>
                            </g>
                            <g id="Vector">
                                <g id="Vector">
                                    <use xlink:href="#path1_fill" transform="matrix(-0.735886 -0.676771 0.675685 -0.737441 18548.8 -17998.4)" fill="#9258BE"/>
                                </g>
                            </g>
                            <g id="Vector">
                                <g id="Vector">
                                    <use xlink:href="#path2_fill" transform="matrix(0.998459 0.0555062 -0.0561722 0.998421 18568.1 -18062.8)" fill="#9258BE"/>
                                </g>
                            </g>
                            <g id="Vector">
                                <g id="Vector">
                                    <use xlink:href="#path3_fill" transform="matrix(0.998459 0.0555062 -0.0561722 0.998421 18569.6 -18061.3)" fill="#233733" fill-opacity="0.76"/>
                                </g>
                            </g>
                            <g id="Group">
                                <g id="Vector">
                                    <g id="Vector">
                                        <use xlink:href="#path4_fill" transform="matrix(0.998459 0.0555062 -0.0561722 0.998421 18578.5 -18058.5)" fill="#9258BE"/>
                                    </g>
                                </g>
                                <g id="Vector">
                                    <g id="Vector">
                                        <use xlink:href="#path5_fill" transform="matrix(0.998459 0.0555062 -0.0561722 0.998421 18576.5 -18021.4)" fill="#9258BE"/>
                                    </g>
                                </g>
                            </g>
                            <g id="Ellipse 2">
                                <use xlink:href="#path6_fill" transform="matrix(0.999769 0.0214882 -0.0214882 0.999769 18572 -18047.1)" fill="#9258BE"/>
                            </g>
                            <g id="naira">
                                <g id="Group">
                                    <g id="Vector">
                                        <use xlink:href="#path7_fill" transform="matrix(0.999769 0.0214882 -0.0214882 0.999769 18574.2 -18043.2)" fill="#FFFFFF"/>
                                    </g>
                                </g>
                            </g>
                            <g id="Vector">
                                <g id="Vector">
                                    <use xlink:href="#path8_fill" transform="matrix(0.986506 0.163729 -0.163941 0.98647 18546.6 -18045)" fill="#9258BE"/>
                                </g>
                            </g>
                            <g id="Rectangle 9">
                                <use xlink:href="#path9_fill" transform="matrix(0.690589 -0.723248 0.722924 0.690928 18538.5 -18020.2)" fill="#FFFFFF"/>
                            </g>
                            <g id="Vector">
                                <g id="Vector">
                                    <use xlink:href="#path10_fill" transform="matrix(-0.735886 -0.676771 0.675685 -0.737441 18552.8 -18004.9)" fill="#9258BE"/>
                                </g>
                            </g>
                        </g>
                    </g>
                    <defs>
                        <path id="path0_fill" d="M 100 50C 100 77.6142 77.6142 100 50 100C 22.3858 100 0 77.6142 0 50C 0 22.3858 22.3858 0 50 0C 77.6142 0 100 22.3858 100 50Z"/>
                        <path id="path1_fill" d="M 22.224 1.0875e-14L 0 1.0875e-14L 0 9.20958L 22.224 9.20958L 22.224 1.0875e-14Z"/>
                        <path id="path2_fill" d="M 24.2769 0L 6.43546e-15 0L 6.43546e-15 47.7928L 24.2769 47.7928L 24.2769 0Z"/>
                        <path id="path3_fill" d="M 18.9829 44.3175L 1.82487 44.3175C 1.82487 43.3077 1.00784 42.4889 3.53866e-14 42.4889L 3.53866e-14 1.82857C 1.00784 1.82857 1.82487 1.00988 1.82487 3.96382e-16L 18.9829 3.96382e-16C 18.9829 1.00988 19.7999 1.82857 20.8077 1.82857L 20.8077 42.4889C 19.7999 42.4889 18.9829 43.3077 18.9829 44.3175Z"/>
                        <path id="path4_fill" d="M 1.47998 2.96595C 2.29735 2.96595 2.95996 2.302 2.95996 1.48297C 2.95996 0.663948 2.29735 0 1.47998 0C 0.662609 0 -1.84406e-14 0.663948 -1.84406e-14 1.48297C -1.84406e-14 2.302 0.662609 2.96595 1.47998 2.96595Z"/>
                        <path id="path5_fill" d="M 1.47998 2.96595C 2.29735 2.96595 2.95996 2.30199 2.95996 1.48297C 2.95996 0.663948 2.29735 0 1.47998 0C 0.662609 0 -1.84406e-14 0.663948 -1.84406e-14 1.48297C -1.84406e-14 2.30199 0.662609 2.96595 1.47998 2.96595Z"/>
                        <path id="path6_fill" d="M 13.6364 6.81818C 13.6364 10.5838 10.5838 13.6364 6.81818 13.6364C 3.0526 13.6364 0 10.5838 0 6.81818C 0 3.0526 3.0526 0 6.81818 0C 10.5838 0 13.6364 3.0526 13.6364 6.81818Z"/>
                        <path id="path7_fill" d="M 8.02385 3.84794L 6.8863 3.84794L 6.8863 2.75528L 8.02385 2.75528C 8.19478 2.75528 8.33333 2.61694 8.33333 2.44608C 8.33333 2.27519 8.19478 2.13677 8.02385 2.13677L 6.8863 2.13677L 6.8863 0.620645C 6.8863 0.39933 6.84254 0.236889 6.75628 0.137938C 6.6743 0.0438031 6.56651 -9.21907e-09 6.41724 -9.21907e-09C 6.27481 -9.21907e-09 6.17108 0.043501 6.09068 0.137048C 6.00543 0.2361 5.96216 0.398843 5.96216 0.620745L 5.96216 2.13695L 3.82236 2.13695L 2.91254 0.760966C 2.83468 0.638166 2.76146 0.523137 2.69036 0.412723C 2.62635 0.313285 2.56392 0.232324 2.50494 0.171873C 2.45274 0.118352 2.39324 0.0769324 2.32365 0.0450954C 2.258 0.0151381 2.17452 0.000100696 2.07577 0.000100696C 1.94981 0.000100696 1.83547 0.0345894 1.72599 0.105446C 1.61764 0.175531 1.54275 0.262181 1.49701 0.370363C 1.45686 0.473174 1.43562 0.630714 1.43562 0.834072L 1.43562 2.13685L 0.309363 2.13685C 0.138469 2.13687 0 2.27529 0 2.44616C 0 2.61703 0.138469 2.75537 0.30938 2.75537L 1.43563 2.75537L 1.43563 3.84815L 0.30938 3.84815C 0.138469 3.84815 0 3.98654 0 4.15745C 0 4.32827 0.138469 4.46656 0.30938 4.46656L 1.43563 4.46656L 1.43563 6.19759C 1.43563 6.41236 1.48079 6.57315 1.57022 6.67533C 1.65527 6.77275 1.76311 6.81798 1.90956 6.81798C 2.05085 6.81798 2.15785 6.77255 2.24658 6.67494C 2.33744 6.57495 2.3834 6.41425 2.3834 6.1976L 2.3834 4.46656L 4.31968 4.46656L 5.36749 6.07239C 5.44036 6.17854 5.51558 6.28568 5.59061 6.39074C 5.6583 6.48508 5.73215 6.5682 5.81007 6.63763C 5.88024 6.70043 5.95547 6.74645 6.03367 6.77453C 6.11418 6.8035 6.20826 6.81818 6.31268 6.81818C 6.59604 6.81818 6.88626 6.73148 6.88626 6.08848L 6.88626 4.46656L 8.02382 4.46656C 8.19475 4.46656 8.3333 4.32807 8.3333 4.15725C 8.33333 3.98644 8.19478 3.84794 8.02385 3.84794ZM 5.96214 2.75527L 5.96214 3.84793L 4.95392 3.84793L 4.2315 2.75527L 5.96214 2.75527ZM 2.38342 1.49976L 2.79919 2.13677L 2.38342 2.13677L 2.38342 1.49976ZM 2.38342 3.84794L 2.38342 2.75528L 3.20291 2.75528L 3.91601 3.84794L 2.38342 3.84794ZM 5.96214 5.37305L 5.36294 4.46656L 5.96214 4.46656L 5.96214 5.37305Z"/>
                        <path id="path8_fill" d="M 32.6432 8.40998C 31.9834 7.58972 30.8656 7.29803 29.8907 7.69175L 21.1287 11.23C 19.983 11.6926 18.7054 10.857 18.712 9.62017C 18.714 9.25764 18.7538 8.90979 18.8094 8.59739C 18.9507 7.80569 19.6335 7.22507 20.4358 7.181L 21.3485 7.13076L 21.3485 0.594871L 17.2028 0.0475857C 14.8655 -0.260881 12.592 0.951677 11.5455 3.06511L 0 26.3822L 10.7128 33.2189C 18.8042 28.9838 21.3642 25.1285 22.3317 21.6772C 22.883 19.7105 24.0966 17.997 25.7206 16.7611L 32.2298 11.8085C 33.2989 10.995 33.4859 9.45801 32.6432 8.40998Z"/>
                        <path id="path9_fill" d="M 0 0L 4.20235 0L 4.20235 22.1391L 0 22.1391L 0 0Z"/>
                        <path id="path10_fill" d="M 1.67515 3.34887C 2.60031 3.34887 3.3503 2.5992 3.3503 1.67444C 3.3503 0.749673 2.60031 7.52625e-14 1.67515 7.52625e-14C 0.749988 7.52625e-14 0 0.749673 0 1.67444C 0 2.5992 0.749988 3.34887 1.67515 3.34887Z"/>
                    </defs>
                </svg>

            </div>
            <div class="signup-h1">
                <p id='signup-head'>HumanATM</p>
                <p id='signup-p'>FOR THE NEXT BILLION USERS</p>
            </div>                
        </div>
        <div class='forgotpassword-form'>
            <form class="forgotpassword-innerform" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <input type="email" name="email" class="signup-data"id="" placeholder="email" value="{{ $email or old('email') }}">

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                <input type="password" name="password" id="" class="newpassword-data signup-password" placeholder="Enter a new password">

                <p class='signup-eye' id="newpassword-eye"><i class="glyphicon glyphicon-eye-close"></i></p>
                <input type="password" name="password_confirmation" id="" class= "newpassword-data signup-password" placeholder="Confirm password">
                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
                <input type="submit" class="newpassword-data" id="newpassword-submit" value="SAVE">
            </form>
        </div>               
        
    </div>
</section>

<script src="{{asset('(js/togglepassword.js')}}"></script>

</body>
@endsection

