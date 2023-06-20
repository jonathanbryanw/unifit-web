@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/home-style.css')}}">
@endsection

@section('js')
<script src="{{asset('js/slider-script.js')}}"></script>
<script src="{{asset('js/home-script.js')}}"></script>
<script>
    document.documentElement.style.setProperty('--scrollbar-width', (window.innerWidth - document.documentElement.clientWidth) + "px");
</script>
@endsection

@section('content')
<div class="top">
    <div class="slider-out">
        <div class="slider-in">
            <img src="{{asset('images/slider-1.png')}}" alt="" class="active" id="1">
            <img src="{{asset('images/home-back.png')}}" alt="" id="2">
            <img src="{{asset('images/slider-02.png')}}" alt="" id="3">
        </div>
        <div class="slider-dot">
            <div class="dot active-dot" onclick="dotSwitch(1)"></div>
            <div class="dot" onclick="dotSwitch(2)"></div>
            <div class="dot" onclick="dotSwitch(3)"></div>
        </div>
        <div class="left"><i class="bi bi-arrow-left" style="font-size: 6rem; color:#81D98F;"></i></div>
        <div class="right"><i class="bi bi-arrow-right" style="font-size: 6rem; color:#81D98F;"></i></div>
        <div class="header">
            <p class="header-top">
                Get Your <span style="color:#81D98F">Perfect Workout</span><br>
                Connect With <span style="color:#81D98F">Perfect Trainers</span><br>
                Follow Best <span style="color:#81D98F">Diet Program</span>
            </p>
        </div>
    </div>
</div>
<div class="middle">
    <div class="section-1">
        <div class="text">
            <div class="t-head">
                <h1 class="title">What is <span style="color:#81D98F">UniFit?</span></h1>
                <h2 class="subtitle">For all of your fitness requirements, UniFit is the place to be.</h2>
                <p class="t-content">UniFit transforms the way you achieve your health goals with a unified strategy that integrates multiple exercise activities, workout regimens, food advice, and a trainer search platform. Experience the ease of custom training plans created for your specific profile, using your height and weight to suggest the ideal program. Visual progress charts help you stay motivated and keep tabs on your progress, and the thorough workout checklist routines make sure you never miss a step. You gain a chance to direct your exercise journey and realize your best potential thanks to UniFit.</p>
                <a class="b-card" href="/about/" role="button">Learn More</a>
            </div>
        </div>
        <div class="pict">
            <img src="{{asset('images/home-01.png')}}" alt="">
        </div>
    </div>
    <div class="section-2">
        <div class="pict">
            <img src="{{asset('images/home-02.png')}}" alt="">
        </div>
        <div class="text">
            <div class="t-head">
                <h1 class="title">Take <span style="color:#81D98F">Health Advice</span></h1>
                <ul class="li-content">
                    <li>The UniFit <b>workout</b> program offers personalized advice based on your height and weight, ensuring you adhere to a plan designed to meet your unique requirements and objectives.</li>
                    <li>The <b>diet</b> program at UniFit offers professional advice as well as individualized meal plans to enhance your fitness journey while assisting you in choosing healthier foods and obtaining a balanced diet.</li>
                    <li>You may quickly identify and connect with certified fitness trainers that match your interests via UniFit's <b>trainer connect</b> program, giving you access to their expert advice and support while you pursue your goals.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-3">
        <div class="c-text">
            <div class="t-head">
                <h1 class="c-title"><span style="color:#81D98F">Categories</span> We Provide</h1>
            </div>
        </div>
        <div class="ca-picts">
            <div class="ca-card">
                <div class="ca-pict">
                    <img src="{{asset('images/home-03.png')}}" alt="">
                    <p class="ca-text">Lose<br>Weight</p>
                </div>
            </div>
            <div class="ca-card">
                <div class="ca-pict zoom">
                    <img src="{{asset('images/home-04.png')}}" alt="">
                    <p class="ca-text">Gain<br>Muscle</p>
                </div>
            </div>
            <div class="ca-card">
                <div class="ca-pict">
                    <img src="{{asset('images/home-05.png')}}" alt="">
                    <p class="ca-text">Maintain<br>Weight</p>
                    <p class="ca-subtext">(Increase Overall<br>Fitness Health)</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section-4">
        <div class="c-text">
            <h1 class="c-title">What <span style="color:#81D98F">We Provide</span></h1>
        </div>
        <div class="info-cards">
            <div class="info-card">
                <img src="{{asset('images/home-06.jpg')}}" alt="">
                <h2 class="subtitle"><b>Recommended Unified Fitness Plan</b></h2>
                <p class="info-subtext">
                    With our BMI calculation you will be given a personalized 
                    fitness plan according to your goal that suits you. If you don’t have time to go to the gym,
                     no problem at all. Our program is designed in such a way that you can follow your workout plan even at your home.
                </p>
            </div>
            <div class="info-card">
                <img src="{{asset('images/home-07.png')}}" alt="">
                <h2 class="subtitle"><b>Connect with Trainer</b></h2>
                <p class="info-subtext">
                    You will be given personalized experts guidance. Our experts will consult you,
                     find out your problems and weeknesses and provide you a solution for it. They will
                     help you in changing your bad habits and make you adopt a healthy lifestyle.
                </p>
            </div>
        </div>
        <div class="info-cards">
            <div class="info-card">
                <img src="{{asset('images/home-08.png')}}" alt="">
                <h2 class="subtitle"><b>Personalized Nutrition Plan</b></h2>
                <p class="info-subtext">
                    No temporary diets can reduce your body fat. You will be given a personalized nutrition
                     plan that suits your needs and choices. We will guide you, what exactly you are supposed
                     to eat everyday. You need not to worry about the calories. Once you enrolled in this program,
                     it will be our responsibility to count your calories not yours
                </p>
            </div>
            <div class="info-card">
                <img src="{{asset('images/home-09.jpg')}}" alt="">
                <h2 class="subtitle"><b>Results</b></h2>
                <p class="info-subtext">
                    At last the only thing that matters is what you do, CONSISTENTLY!! Only action can create
                     change. The only thing that we want from your side is…. Consistency. That's it. Rest,
                     we will take care of. We will make you fitter and by the end of 90 days, you yourself
                     will see the good changes.
                </p>
            </div>
        </div>
    </div>
    <div class="section-5">
        <div class="c-text-5">
            <h1 class="c-title">Find Your <span style="color:#81D98F">Unified Fitness Program!</span></h1>
        </div>
        <div class="bmi">
            <div class="bmiWindow">
                <table id="input">
                    <tr>
                        <th colspan="2">&nbsp;</th>
                    </tr>
                    <form action="" id="bmiForm">
                        <tbody>
                            <tr>
                                <td class="weight-con">
                                    <label for="weight">Insert your weight</label>
                                    <input type="number" name="weight" id="weight" step="any" required>
                                </td>
                                <td rowspan="4"><h2 class="bmiText">Choose your personalized fitness program!</h2></td>                            
                            </tr>
                            <tr>
                                <td class="height-con">
                                    <label for="height">Insert your height</label>
                                    <input type="number" name="height" id="height" required>
                                </td>                      
                            </tr>
                            <tr>                            
                                <td class="btnSubmit"><button type="submit" id="calcButton" class="btn btn-secondary">Calculate</button></td>
                            </tr>
                            <tr>
                                <td class="pResult"><p id="result"></p></td>
                            </tr>
                        </tbody>
                    </form>
                </table>                 
            </div>
        </div>
    </div>
    <div class="section-6">
        <div class="c-text">
            <h1 class="c-title">Our <span style="color:#81D98F">Success Stories</span></h1>
            <h3 class="subtitle">Read our friend success stories from using UniFit to support their fitness journey.</h3>
        </div>
        <div class="s-card-6">
            <div class="texts-6">
                <h5 class="texts-6-title">Felix Fithub</h5>
                <p class="texts-6-content">
                    "I credit UniFit with helping me lose a remarkable amount of weight. I was able to stick to a customised routine with their personalized fitness program that was ideal for my height and weight. The diet program included professional advice and meal planning that assisted me in choosing healthier foods and obtaining a balanced diet. The training checklist routines and progress tracker helped me keep focused and on track. But the trainer connect program, where I met a fantastic fitness trainer who gave me great advice and support throughout my journey, was the real game-changer. I lost the extra weight and acquired renewed confidence as well as a better lifestyle thanks to UniFit. My life has been revolutionized by UniFit."
                </p>
            </div>
            <div class="images-6">
                <div class="image">
                    <img src="{{asset('images/about-06.png')}}" alt="">
                    <p class="image-text">Before</p>
                </div>
                <div class="image">
                    <img src="{{asset('images/about-07.png')}}" alt="">
                    <p class="image-text">After</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section-7">
        <div class="c-text">
            <h1 class="c-title"><span style="color:#81D98F">Our</span> Trainer</h1>
            <h3 class="subtitle">Your fitness journey will be transformed by UniFit's Trainer Connect program.</h3>
        </div>
        <div class="s-card-7">
            <div class="t-img">
                <img src="{{asset('images/about-02.png')}}" alt="">
            </div>
            <div class="t-text">
                <p class="subtext">
                    This service matches you with a skilled collection of fitness trainers that match your preferences and goals, whether you're just starting out or an experienced fitness fanatic. You have access to a variety of profiles with UniFit's Trainer Connect, including certifications, specialties, enabling you to make a smart choice. Find the ideal trainer who will provide you individualized coaching, design custom training routines, and provide continuing support to keep you motivated and get the results you want. Your key to realizing your maximum fitness potential and discovering the transformative power of expert instruction is UniFit's Trainer Connect program.
                </p>
                <a class="b-card" href="/trainer/" role="button">Trainer Connect</a>
            </div>
        </div>
    </div>
    <div class="section-8">
        <div class="c-text">
            <h2 class="c-title">Lose<span style="color:#81D98F"> Weight</span> Diet</h2>
        </div>
        <div class="cards">
            @foreach($diets as $diet)
                @php
                    $description = $diet->description;
                    $text = strtok($description, '.');
                @endphp
                <div class="card">
                    <img src="{{asset('images/'.$diet->image)}}" alt="">
                    <h2 class="subtitle">{{ $diet->category }}</h2>
                    <p class="card-subtext">
                        {{ $text }}.
                    </p>
                    <a class="b-card" href="/diet/{{ $diet->id }}" role="button">Read Recipe</a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="section-9">
        <div class="c-text">
            <h2 class="c-title">Lose<span style="color:#81D98F"> Weight</span> Workout</h2>        </div>
        <div class="cards">
            @foreach($workouts as $workout)
                @php
                    $description = $workout->description;
                    $text = strtok($description, '.');
                @endphp
                <div class="card">
                    <img src="{{asset('images/'.$workout->image)}}" alt="">
                    <h2 class="subtitle">{{ $workout->name }}</h2>
                    <p class="card-subtext">
                        {{ $text }}.
                    </p>
                    <a class="b-card" href="/workout/{{ $workout->id }}" role="button">See Workout</a>
                </div>
            @endforeach
        </div>
    </div>
</div>   
