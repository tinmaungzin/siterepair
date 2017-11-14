@extends('layout') @section('content')
<div id="landing_about">
    <div class="layer">
        @include('header')
    </div>
</div>
<div class="container">
    <div class="history-background">
        <h3>Historical Background</h3>
        <p>Mandalay Technological University (MTU) was established on <span>1st October 1991</span> as an Institute of Technology under the Ministry of Education from No.2. Industrial Training Center under the Ministry of Industry (1). On <span>1st January, 1997</span>, Ministry of Education (MOE) handed Mandalay Institute of Technology over to Ministry of Science and Technology (MOST) after it was established. On <span>1st July, 1998</span>, Mandalay Institute of Technology was renamed Mandalay Technological University (MTU). The university has proceeded to increase and develop to meet the requirement of Science and Technology. Mandalay Technological University (MTU) is situated on a <span>704.70 acre</span> campus <span>in the east of Yankin hill and Mandalay canal, Patheingyi Township, Mandalay</span>. The followings were the rectors of the Mandalay Technological University (MTU), who were serving one after another. Currently, his highness, <span>Dr. Myint Thein</span> is the rector of the Mandalay Technological University (MTU).</p>
    </div>
</div>
<div class="mission_vission is-hidden-mobile">
    <div class="logo">
    </div>
    <div class="rect" id="mission">
        <h4 style="text-align: center;">Mission</h4>
        <p style="text-align: center;">To educate and train students systematically to become engineers, specialists and researchers who</p>
        <ul style="list-style-type: none;">
            <li>
                <p>
                    Commit to the innovative and ethical application of science and technology in addressing the most pressing societal needs.
                </p>
            </li>
            <li>
                <p>
                    Have received twenty-first century leadership qualities, perspectives, and skills.
                </p>
            </li>
            <li>
                <p>
                    Can develop and disseminate transformational new knowledge and technologies that further the well-being and sustainability of society.
                </p>
            </li>
            <li>
                <p>
                    Have the will and the ability to work for the good of the society, mankind and the environment.
                </p>
            </li>
            <li>
                <p>
                    Are conscious of civic duties and professional ethics.
                </p>
            </li>
        </ul>
    </div>
    <div class="rect" id="vision">
        <h4 style="text-align: center;">Vision</h4>
        <p style="text-align: center;">It is envisaged that MTU will become a highly-prestigious technological centre of excellence in engineering education, research and the application of knowledge to benefit society globally and train students of high caliber to become highly-qualified engineers, specialists with the ability to create knowledge and solve complex real-world problems and researchers who can discover and innovate new things, all for the good of society, mankind and environment.</p>
    </div>
</div>
<div class="m_v is-hidden-desktop">
    <div class="rect_mobile" style="background-color: #000000">
        <h4 style="text-align: center;">Mission</h4>
        <p style="text-align: center;">To educate and train students systematically to become engineers, specialists and researchers who</p>
        <ul style="list-style-type: none;">
            <li>
                <p>
                    Commit to the innovative and ethical application of science and technology in addressing the most pressing societal needs.
                </p>
            </li>
            <li>
                <p>
                    Have received twenty-first century leadership qualities, perspectives, and skills.
                </p>
            </li>
            <li>
                <p>
                    Can develop and disseminate transformational new knowledge and technologies that further the well-being and sustainability of society.
                </p>
            </li>
            <li>
                <p>
                    Have the will and the ability to work for the good of the society, mankind and the environment.
                </p>
            </li>
            <li>
                <p>
                    Are conscious of civic duties and professional ethics.
                </p>
            </li>
        </ul>
    </div>
    <div class="rect_mobile" style="background-color: #424242">
        <h4 style="text-align: center;">Vision</h4>
        <p style="text-align: center;">It is envisaged that MTU will become a highly-prestigious technological centre of excellence in engineering education, research and the application of knowledge to benefit society globally and train students of high caliber to become highly-qualified engineers, specialists with the ability to create knowledge and solve complex real-world problems and researchers who can discover and innovate new things, all for the good of society, mankind and environment.</p>
    </div>
</div>
<div class="container">
    <div class="current_principle">
        <h3>Current Head of University</h3>
        <img src="{{asset('mgfreeman.jpg')}}" width="200" height="200" />
        <h4 style="font-style: italic;">Morgan Freeman</h4>
        <p>(5.12.1996 - now )</p>
    </div>
    <div class="columns rectors">
        <div class="column">
            <h4 class="head_class">Temporary Heads</h4>
            <div class="rector_card">
                <p class="name">U Khin Maung</p>
                <p class="period">6.1991 - 10.1998</p>
            </div>
        </div>
        <div class="column">
            <h4 class="head_class">Rectors</h4>
            <div class="rector_card">
                <p class="name">U Khin Maung</p>
                <p class="period">6.1991 - 10.1998</p>
            </div>
            <div class="rector_card">
                <p class="name">U Khin Maung</p>
                <p class="period">6.1991 - 10.1998</p>
            </div>
        </div>
        <div class="column">
            <h4 class="head_class">Pro Rectors</h4>
            <div class="rector_card">
                <p class="name">U Khin Maung</p>
                <p class="period">6.1991 - 10.1998</p>
            </div>
            <div class="rector_card">
                <p class="name">U Khin Maung</p>
                <p class="period">6.1991 - 10.1998</p>
            </div>
            <div class="rector_card">
                <p class="name">U Khin Maung</p>
                <p class="period">6.1991 - 10.1998</p>
            </div>
            <div class="rector_card">
                <p class="name">U Khin Maung</p>
                <p class="period">6.1991 - 10.1998</p>
            </div>
        </div>
    </div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.042116898256!2d96.18896391437578!3d21.971346585495446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6e538bf6418b%3A0x9c9718b6ec4e04f8!2sMandalay+Technological+University!5e0!3m2!1sen!2smm!4v1500798656199" class="column is-12" height="450" frameborder="0" style="border:0; padding: 0; width: 100%" allowfullscreen></iframe>
@endsection('content')
 @section('style')
<style type="text/css">
.container {
    margin-top: 3rem;
    padding: 3rem 2rem;
}

@media screen and (min-width: 1000px) {
    .container {
        padding: 3rem 3rem;
    }
}

@media screen and (max-width: 780px) {
    .container {
        padding: 1rem 1rem;
    }
}

h3 {
    text-align: center;
    color: #757575;
}

span {
    background-color: #212121;
    color: #ffffff;
}

.rect {
    width: 50%;
    height: 500px;
    color: white;
    margin-top: 1rem;
    overflow: scroll;
}

#mission {
    float: right;
    background-color: #000000;
}




/*#mission:hover,#vision:hover{
		background-color: #757575;
		color: white;
	}*/

#vision {
    float: left;
    background-color: #424242;
}

.logo {
    width: 50px;
    height: 50px;
    border-radius: 25px;
    z-index: 99;
    background-color: #757575;
    position: absolute;
    left: 48%;
    margin-top: -0.8rem;
}

.mission_vission {
    height: 500px;
}

#mission li {
    padding-right: 5px;
}




/*table{
		margin: auto;
		margin-bottom: 50px;
		width: 80%;
	}
	td{
		padding: 1rem 3rem;
		border-bottom: 1px solid #757575;
	}*/

.current_principle img {
    border-radius: 50%;
    padding: 20px;
    display: block;
    margin: auto;
}

.current_principle {
    border-radius: 10px;
    background-color: #BDBDBD;
    text-align: center;
    padding: 1rem;
    width: 80%;
    margin: auto;
    margin-bottom: 3rem;
}

.rect_mobile {
    width: 100%;
    height: 500px;
    color: white;
    overflow: scroll;
}


.rectors h4.head_class {
    text-align: center;
    font-weight: bold;
}


.rectors div.rector_card p {
	display: inline-block;
	text-align: center;
    background-color: #424242;
    color: #eee;
    margin: 0 !important;
    /*width: 35%;*/
}
.rectors div.rector_card p.name {
	padding: 6px 10px;
}
.rectors div.rector_card p.period{
	margin-left: 5px;
	padding: 6px 10px;
	background-color: white;
	color: #424242;
	 border: 1px solid black;
}

.rectors .rector_card{
	margin: 5px 0;
	justify-content: center;
	padding: 0;
	display: flex;
	flex-direction: row;
}
</style>
@endsection