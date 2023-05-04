@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/home-style.css')}}">
@endsection

@section('js')
<script src="{{asset('js/slider-script.js')}}"></script>
@endsection

@section('content')
<div class="top">
    <div class="slider-out">
        <div class="slider-in">
            <img src="{{asset('images/slider-1.png')}}" alt="" class="active" id="1">
            <img src="{{asset('images/pancing.png')}}" alt="" id="2">
            <img src="{{asset('images/ajak.jpg')}}" alt="" id="3">
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
                <h2 class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla id officia veritatis.<br> Nostrum ratione tempore rem, soluta voluptate odio quo nisi delectus recusandae doloribus</h2>
                <p class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur quos incidunt error officia magni blanditiis earum deserunt cupiditate quibusdam magnam dolorem fugit, obcaecati nostrum veritatis eveniet perspiciatis provident accusamus alias?</p>
                <button class="learn">Learn More</button>
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
                <h2 class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla id officia veritatis.<br> Nostrum ratione tempore rem, soluta voluptate odio quo nisi delectus recusandae doloribus</h2>
                <ul class="content">
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Consequatur quos incidunt error officia magni blanditiis earum deserunt cupiditate</li>
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Consequatur quos incidunt error officia magni blanditiis earum deserunt cupiditate</li>
                </ul>
                <button class="learn">Learn More</button>
            </div>
        </div>
    </div>
    <div class="section-3">
        <div class="c-text">
            <div class="t-head">
                <h1 class="c-title"><span style="color:#81D98F">Categories</span> We Provide</h1>
                <h3 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam<br> sagittis aliquam, tortor sollicitudin egestas convallis.</h3>
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
                <h2 class="subtitle">Recommended Unified Fitness Plan</h2>
                <p class="info-subtext">
                    With our BMI calculation you will be given a personalized 
                    fitness plan according to your goal that suits you. If you don’t have time to go to the gym,
                     no problem at all. Our program is designed in such a way that you can follow your workout plan even at your home.
                </p>
            </div>
            <div class="info-card">
                <img src="{{asset('images/home-07.png')}}" alt="">
                <h2 class="subtitle">Connect with Trainer</h2>
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
                <h2 class="subtitle">Personalized Nutrition Plan</h2>
                <p class="info-subtext">
                    No temporary diets can reduce your body fat. You will be given a personalized nutrition
                     plan that suits your needs and choices. We will guide you, what exactly you are supposed
                     to eat everyday. You need not to worry about the calories. Once you enrolled in this program,
                     it will be our responsibility to count your calories not yours
                </p>
            </div>
            <div class="info-card">
                <img src="{{asset('images/home-09.jpg')}}" alt="">
                <h2 class="subtitle">Results</h2>
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
        <div class="c-text">
            <h1 class="c-title">Find Your <span style="color:#81D98F">Unified Fitness Program!</span></h1>
            <h3 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam<br> sagittis aliquam, tortor sollicitudin egestas convallis.</h3>
        </div>
        <div class="bmi">
            <table style="width:80vw;" id="input">
                <tr>
                    <th colspan="2">&nbsp;</th>
                </tr>
                <form action="" id="bmiForm">
                    <tbody>
                        <tr>
                            <td>
                                <label for="weight">Insert your weight</label>
                                <input type="number" name="weight" id="weight" required>
                            </td>
                            <td rowspan="4"><h2>Choose your personalized fitness program!</h2></td>                            
                        </tr>
                        <tr>
                            <td>
                                <label for="height">Insert your height</label>
                                <input type="number" name="height" id="height" required>
                            </td>                      
                        </tr>
                        <tr>                            
                            <td><button type="submit" class="btn btn-secondary">Submit</button></td>
                        </tr>
                        <tr>
                            <td><p id="result"></p></td>
                        </tr>
                    </tbody>
                </form>
            </table> 
        </div>
    </div>
    <div class="section-6">
        <div class="c-text">
            <h1 class="c-title">Our <span style="color:#81D98F">Success Stories</span></h1>
            <h3 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam<br> sagittis aliquam, tortor sollicitudin egestas convallis.</h3>
        </div>
        <div class="story">
            <div class="story-text">
                <h3 class="s-title">Felix Fithub</h3>
                <p class="s-content">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem omnis, odit tempora aspernatur maiores, nostrum voluptates facere magnam suscipit necessitatibus, dignissimos at rerum enim ab dolores amet id quisquam culpa?
                </p>
            </div>
            <div class="story-image">
                <div class="s-images">
                    <div class="s-image">
                        <img src="{{asset('images/home-08.png')}}" alt="">
                        <h3 class="s-image-title">Before</h3>
                    </div>
                    <div class="s-image">
                        <img src="{{asset('images/home-08.png')}}" alt="">
                        <h3 class="s-image-title">After</h3>
                    </div>
                </div>
                <div class="s-pages">
                    <div class="s-left"><i class="bi bi-arrow-left" style="color: black"></i></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="s-right"><i class="bi bi-arrow-right" style="color: black"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-7">
        <div class="c-text">
            <h1 class="c-title"><span style="color:#81D98F">Our</span> Trainer</h1>
            <h3 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam<br> sagittis aliquam, tortor sollicitudin egestas convallis.</h3>
        </div>
        <div class="t-section">
            <div class="t-image">
                <img src="{{asset('images/home-08.png')}}" alt="">
            </div>
            <div class="t-texts">
                <p class="t-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam sagittis aliquam, tortor sollicitudin egestas convallis.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam sagittis aliquam, tortor sollicitudin egestas convallis.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam sagittis aliquam, tortor sollicitudin egestas convallis.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam sagittis aliquam, tortor sollicitudin egestas convallis.
                </p>
                <button class="t-button">Trainer Connect</button>
            </div>  
        </div>
    </div>
    <div class="section-8">
        <div class="c-text">
            <h1 class="c-title">Checkout Our <span style="color:#81D98F">Healthy Recipes</span></h1>
        </div>
        <div class="cards">
            <div class="card">
                <img src="{{asset('images/home-08.png')}}" alt="">
                <h2 class="subtitle">Lose Weight</h2>
                <p class="card-subtext">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis atque cumque
                     delectus doloribus eius veritatis culpa non iste ducimus consequatur? Ut officiis
                     eligendi deserunt ea facere saepe alias, rem id?
                </p>
                <button class="b-card">Read Recipe</button>
            </div>
            <div class="card">
                <img src="{{asset('images/home-08.png')}}" alt="">
                <h2 class="subtitle">Gain Muscle</h2>
                <p class="card-subtext">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis atque cumque
                     delectus doloribus eius veritatis culpa non iste ducimus consequatur? Ut officiis
                     eligendi deserunt ea facere saepe alias, rem id?
                </p>
                <button class="b-card">Read Recipe</button>
            </div>
            <div class="card">
                <img src="{{asset('images/home-08.png')}}" alt="">
                <h2 class="subtitle">Increase Health</h2>
                <p class="card-subtext">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis atque cumque
                     delectus doloribus eius veritatis culpa non iste ducimus consequatur? Ut officiis
                     eligendi deserunt ea facere saepe alias, rem id?
                </p>
                <button class="b-card">Read Recipe</button>
            </div>
        </div>
    </div>
    <div class="section-9">
        <div class="c-text">
            <h1 class="c-title">Read <span style="color:#81D98F">Workout</span></h1>
        </div>
        <div class="cards">
            <div class="card">
                <img src="{{asset('images/home-08.png')}}" alt="">
                <h2 class="subtitle">Lose Weight</h2>
                <p class="card-subtext">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis atque cumque
                     delectus doloribus eius veritatis culpa non iste ducimus consequatur? Ut officiis
                     eligendi deserunt ea facere saepe alias, rem id?
                </p>
                <button class="b-card">Read Article</button>
            </div>
            <div class="card">
                <img src="{{asset('images/home-08.png')}}" alt="">
                <h2 class="subtitle">Gain Muscle</h2>
                <p class="card-subtext">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis atque cumque
                     delectus doloribus eius veritatis culpa non iste ducimus consequatur? Ut officiis
                     eligendi deserunt ea facere saepe alias, rem id?
                </p>
                <button class="b-card">Read Article</button>
            </div>
            <div class="card">
                <img src="{{asset('images/home-08.png')}}" alt="">
                <h2 class="subtitle">Increase Health</h2>
                <p class="card-subtext">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis atque cumque
                     delectus doloribus eius veritatis culpa non iste ducimus consequatur? Ut officiis
                     eligendi deserunt ea facere saepe alias, rem id?
                </p>
                <button class="b-card">Read Article</button>
            </div>
        </div>
    </div>
</div>   
@endsection