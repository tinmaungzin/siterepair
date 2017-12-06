@extends('layout') @section('content')
<div id="landing">

        @include('header')
        <h4>The Civil</h4>
        <div class="brief_history column is-8">
            <p>Civil Engineering Department offered M.E and Ph.D courses. The courses scheduled to be offered have been reviewed and revised by Board of Postgraduate Studies of the Engineering Departments. Each course carries a ‘credit’ rating relating to the work load for each semester. The candidates registered for Master Degree is required to obtain minimum (60) credit points from two semesters. Each semester takes (16) weeks. In case of Ph.D courses, the candidates are required to obtain minimum (18) credit points of core courses from one semester. Four skill English courses are compulsory for both courses. The courses are designed to provide the students with the necessary research training oriented program and special assignments. In addition to formal course work, students are also required to participate in group seminars and weekly departmental seminars.
            </p>
        </div>
        <div class="detail_button">
            <h5>Read More</h5>
        </div>

</div>
</div>
<div class="mission_vision">
    <div class="columns">
        <div class="column is-2"></div>
        <div class="column content">
            <span>M</span>
            <h4>ission</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="column is-2"></div>
    </div>
    <div class="columns">
        <div class="column is-2 bg_black"></div>
        <div class="column align_right content">
            <span class="float_right">V</span>
            <h4 class="align_right">ision</h4>
            <p class="align_right">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="column is-2 bg_black"></div>
    </div>
</div>
<div class="offered_degrees">
    <div class="column is-8">
        <div class="columns">
            <div class="column undergrad">
                <div>
                    <h5 style="text-align: center;">Undergraduate Offered Degrees</h5>
                    <ul>
                        <li>B.E. (Civil Engineering)</li>
                        <li>B.E. (Computer Engineering & Information Technology)</li>
                        <li>B.E. (Electrical Power Engineering)</li>
                        <li>B.E. (Mechanical Engineering)</li>
                        <li>B.E. (Mechatronic Engineering)</li>
                        <li>B.E. (Chemical Engineering)</li>
                        <li>B.E. (Mining Engineering)</li>
                        <li>B.E. (Nuclear Technology)</li>
                        <li>B.E. (Biotechnology)</li>
                        <li>B.Arch. (Architecture)</li>
                    </ul>
                </div>
            </div>
            <div class="column postgrad">
                <div>
                    <h5 style="text-align: center;">Postgraduate Offered Degrees</h5>
                    <ul>
                        <li>M.E. (Civil-Structural Engineering)</li>
                        <li>M.E. (Civil-Water Resources Engineering)</li>
                        <li>M.E. (Civil-Geotechnical Engineering)</li>
                        <li>M.E. (Civil-Transportation Engineering )</li>
                        <li>M.E. (Civil-Construction Management)</li>
                        <li>M.E. (Information Technology)</li>
                        <li>M.E. (Mechanical Engineering)</li>
                        <li>M.E. (Electronic Engineering)</li>
                        <li>M.E. (Electrical Power Engineering)</li>
                        <li>M.E. (Mechatronic Engineering)</li>
                        <li>M.E. (Chemical Engineering)</li>
                        <li>M.E. (Mining Engineering)</li>
                        <li>M.E. (Nuclear Technology)</li>
                        <li>M.S. (Food Biotechnology) </li>
                        <li>M.Arch. (Architecture)</li>
                        <li>M.A. (English for Specific Purposes)</li>
                        <li>Ph.D. (Structural Engineering)</li>
                        <li>Ph.D. (Water Resources Engineering)</li>
                        <li>Ph.D. (Information Technology)</li>
                        <li>Ph.D. (Electronic Engineering)</li>
                        <li>Ph.D. (Electrical Power Engineering)</li>
                        <li>Ph.D. (Mechanical Engineering)</li>
                        <li>Ph.D. (Mechatronic Engineering)</li>
                        <li>Ph.D. (Chemical Engineering)</li>
                        <li>Ph.D. (Mining Engineering)</li>
                        <li>Ph.D. (Nuclear Technology)</li>
                        <li>Ph.D. (Architecture)</li>
                        <li>Ph.D. (Industrial Biotechnology) </li>
                        <li>Ph.D. (Environmental Biotechnology)</li>
                        <li>Ph.D. (Plant & Agricultural Biotechnology) </li>
                        <li>Ph.D. (Food Biotechnology) </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- <div class="degrees">
            <div class="items">
                Undergraduate Degrees
            </div>
            <div class="items">
                B.E(Civil)
            </div>
        </div>
        <div class="degrees">
            <div class="items">
                Postgraduate Degrees
            </div>
            <div class="items">
                B.E(Civil)
            </div><div class="items">
                B.E(Civil)
            </div><div class="items">
                B.E(Civil)
            </div><div class="items">
                B.E(Civil)
            </div><div class="items">
                B.E(Civil)
            </div>
        </div> --}}
            
        
    </div>
</div>
<div class="research_facilities">
    <div class="column is-10">
        <h5>Research Facilities</h5>
        <div class="gallery">
            <div class="columns">
                <div class="column">
                    <a href="{{ asset('civil.png') }}">
                        <div class="image is-3by2">
                            <img src="{{ asset('civil.png') }}" />
                            <p class="overlay_text">Matrix vs deadpool</p>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a href="{{ asset('civil.png') }}">
                        <div class="image is-3by2">
                            <img src="{{ asset('civil.png') }}" />
                            <p class="overlay_text">Kung Fu Panda</p>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a href="{{ asset('civil.png') }}">
                        <div class="image is-3by2">
                            <img src="{{ asset('civil.png') }}" />
                            <p class="overlay_text">A Movie</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <a href="{{ asset('civil.png') }}">
                        <div class="image is-3by2">
                            <img src="{{ asset('civil.png') }}" />
                            <p class="overlay_text">Matrix vs deadpool</p>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a href="{{ asset('civil.png') }}">
                        <div class="image is-3by2">
                            <img src="{{ asset('civil.png') }}" />
                            <p class="overlay_text">Kung Fu Panda</p>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a href="{{ asset('civil.png') }}">
                        <div class="image is-3by2">
                            <img src="{{ asset('civil.png') }}" />
                            <p class="overlay_text">A Movie</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="courses">
    <div class="column is-8">
    	<h5>Courses</h5>
        <div class="columns">
            <div class="column">
                <div class="course_duration">
                    <h4>BE 1<sup>st</sup> year</br>36 weeks</h4>
                    <div class="course_detail">
                    	<h5>Semester I</h5>
						<ul>
							<li>M11001 Myanmar I</li>
							<li>E11001 English I</li>
							<li>EM11001 Applied Mathematics I</li>
							<li>E.Ch11001Engineering Chemistry I</li>
							<li>E.Ph11001 Engineering Physics I</li>
							<li>ME11011 Basic Engineering Drawing I</li>
						</ul>
						<h5>Semester II</h5>
						<ul>
							<li>M11001 Myanmar II</li>
							<li>E11001 English II</li>
							<li>EM11001 Applied Mathematics II</li>
							<li>E.Ch11001Engineering Chemistry II</li>
							<li>E.Ph11001 Engineering Physics II</li>
							<li>ME11011 Basic Engineering Drawing II</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="course_duration">
                    <h4>BE 1<sup>st</sup> year</br>36 weeks</h4>
                    <div class="course_detail">
                    	<h5>Semester I</h5>
						<ul>
							<li>M11001 Myanmar I</li>
							<li>E11001 English I</li>
							<li>EM11001 Applied Mathematics I</li>
							<li>E.Ch11001Engineering Chemistry I</li>
							<li>E.Ph11001 Engineering Physics I</li>
							<li>ME11011 Basic Engineering Drawing I</li>
						</ul>
						<h5>Semester II</h5>
						<ul>
							<li>M11001 Myanmar II</li>
							<li>E11001 English II</li>
							<li>EM11001 Applied Mathematics II</li>
							<li>E.Ch11001Engineering Chemistry II</li>
							<li>E.Ph11001 Engineering Physics II</li>
							<li>ME11011 Basic Engineering Drawing II</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="course_duration">
                    <h4>BE 1<sup>st</sup> year</br>36 weeks</h4>
                    <div class="course_detail">
                    	<h5>Semester I</h5>
						<ul>
							<li>M11001 Myanmar I</li>
							<li>E11001 English I</li>
							<li>EM11001 Applied Mathematics I</li>
							<li>E.Ch11001Engineering Chemistry I</li>
							<li>E.Ph11001 Engineering Physics I</li>
							<li>ME11011 Basic Engineering Drawing I</li>
						</ul>
						<h5>Semester II</h5>
						<ul>
							<li>M11001 Myanmar II</li>
							<li>E11001 English II</li>
							<li>EM11001 Applied Mathematics II</li>
							<li>E.Ch11001Engineering Chemistry II</li>
							<li>E.Ph11001 Engineering Physics II</li>
							<li>ME11011 Basic Engineering Drawing II</li>
						</ul>
                    </div>
                </div>
            </div>
        </div><div class="columns">
            <div class="column">
                <div class="course_duration">
                    <h4>BE 1<sup>st</sup> year</br>36 weeks</h4>
                    <div class="course_detail">
                    	<h5>Semester I</h5>
						<ul>
							<li>M11001 Myanmar I</li>
							<li>E11001 English I</li>
							<li>EM11001 Applied Mathematics I</li>
							<li>E.Ch11001Engineering Chemistry I</li>
							<li>E.Ph11001 Engineering Physics I</li>
							<li>ME11011 Basic Engineering Drawing I</li>
						</ul>
						<h5>Semester II</h5>
						<ul>
							<li>M11001 Myanmar II</li>
							<li>E11001 English II</li>
							<li>EM11001 Applied Mathematics II</li>
							<li>E.Ch11001Engineering Chemistry II</li>
							<li>E.Ph11001 Engineering Physics II</li>
							<li>ME11011 Basic Engineering Drawing II</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="course_duration">
                    <h4>BE 1<sup>st</sup> year</br>36 weeks</h4>
                    <div class="course_detail">
                    	<h5>Semester I</h5>
						<ul>
							<li>M11001 Myanmar I</li>
							<li>E11001 English I</li>
							<li>EM11001 Applied Mathematics I</li>
							<li>E.Ch11001Engineering Chemistry I</li>
							<li>E.Ph11001 Engineering Physics I</li>
							<li>ME11011 Basic Engineering Drawing I</li>
						</ul>
						<h5>Semester II</h5>
						<ul>
							<li>M11001 Myanmar II</li>
							<li>E11001 English II</li>
							<li>EM11001 Applied Mathematics II</li>
							<li>E.Ch11001Engineering Chemistry II</li>
							<li>E.Ph11001 Engineering Physics II</li>
							<li>ME11011 Basic Engineering Drawing II</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="course_duration">
                    <h4>BE 1<sup>st</sup> year</br>36 weeks</h4>
                    <div class="course_detail">
                    	<h5>Semester I</h5>
						<ul>
							<li>M11001 Myanmar I</li>
							<li>E11001 English I</li>
							<li>EM11001 Applied Mathematics I</li>
							<li>E.Ch11001Engineering Chemistry I</li>
							<li>E.Ph11001 Engineering Physics I</li>
							<li>ME11011 Basic Engineering Drawing I</li>
						</ul>
						<h5>Semester II</h5>
						<ul>
							<li>M11001 Myanmar II</li>
							<li>E11001 English II</li>
							<li>EM11001 Applied Mathematics II</li>
							<li>E.Ch11001Engineering Chemistry II</li>
							<li>E.Ph11001 Engineering Physics II</li>
							<li>ME11011 Basic Engineering Drawing II</li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	<div class="staff column is-6">
        <div class="column">
            <img src="{{ asset('civil.png') }}" class="image is-128x128 thumbnail">
            <div class="staff-info">
                <h5>Professor</h5>
                <h5>Dr. John Watson</h5>
                <p class="secondary">Current Research: Sherlock Homes</p>
                <p class="secondary">Research Area: Army Doctor</p>
            </div>
        </div>
        <div class="column">
            <img src="{{ asset('civil.png') }}" class="image is-128x128 thumbnail">
            <div class="staff-info">
                <h5>Professor</h5>
                <h5>Dr. John Watson</h5>
                <p class="secondary">Current Research: Sherlock Homes</p>
                <p class="secondary">Research Area: Army Doctor</p>
            </div>
        </div>
        <div class="column">
            <img src="{{ asset('civil.png') }}" class="image is-128x128 thumbnail">
            <div class="staff-info">
                <h5>Professor</h5>
                <h5>Dr. John Watson</h5>
                <p class="secondary">Current Research: Sherlock Homes</p>
                <p class="secondary">Research Area: Army Doctor</p>
            </div>
        </div>
</div>
@endsection('content') @section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/baugette.css') }}">
<style>
.toggle-button img{
   -webkit-filter: invert(1);
   filter: invert(1);
}
#landing {
	flex-direction: column;
	align-items: center;
	justify-content: flex-start;
    color: #eee;
    background-image: url('/../civil.png') !important;
}
.layer{
	min-height: 720px;
}
#landing .title {
    color: #eee;
    font-size: 4.5vh;
}

#landing .detail_button {
	margin: 20px;
	position: unset !important;
    border: 2px solid #eee;
}

#landing>.detail_button:hover {
    color: #eee !important;
}

.nav-list li a:hover {
    background-color: #dedede;
    color: #424242 !important;
}


.header li>a {
    text-decoration: none;
    color: #eee;
}

.brief_history {
    text-align: center;
}

.mission_vision .columns {
    margin: 0 auto !important;
}

.mission_vision span {
    float: left;
    font-size: 90px;
    line-height: 70px;
}

.mission_vision span.float_right {
    float: right;
}

.mission_vision h4 {
    margin: 0;
}

.mission_vision div.align_right {
    background: #424242;
    color: #F5F5F5;
}

.mission_vision h4.align_right {
    margin: 0;
    direction: rtl;
    unicode-bidi: bidi-override;
}

.mission_vision p {
    margin-top: 0;
}

.mission_vision div.bg_black {
    background: #424242;
}

.mission_vision .is-2 {
    padding: 0 !important;
}

.mission_vision .content {
    padding: 20px !important;
}

.mission_vision .align_right {
    text-align: right;
}

{{-- offered_degrees --}}

.offered_degrees {
    padding: 0.2em 0 !important;
    background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('/../degree_bg.jpg');
    /*background-image: url('/../degree_bg.jpg') !important;*/
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.offered_degrees>.column {
    padding: 0 !important;
    margin: 0.3em;
}

.undergrad>div,
.postgrad>div {
    /*border: 1px solid #757575;*/
    padding: 0.5em;
    color: #e0e0e0;
}

.undergrad ,.postgrad{
    padding: 0.2em;
}

.undergrad ul,
.postgrad ul {
    height: 450px;
    list-style: none;
    overflow-y: scroll;
}

{{-- offered_degrees --}}

{{-- research Facilities --}}

.research_facilities,
.offered_degrees,
.courses {
    display: flex;
    justify-content: center;
}

.gallery>.columns>.column {
    padding: 3px;
}

p.overlay_text {
    position: absolute;
    bottom: 10px;
    left: 10px;
    color: white;
    width: 80%;
    margin: 0;
    font: bold Helvetica, Sans-Serif;
    letter-spacing: -1px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.6);
    padding: 8px;
}

{{-- research Facilities --}}

{{-- courses --}}

.courses{
	background: #eee;
	margin-top: 20px;
}

.courses>.is-8 .column {
    display: flex;
    height: 200px;
}

.course_duration {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
    margin: 0 auto;
    height: 25vh;
    width: 25vh;
    border-radius: 50%;
    background: white;
    transition: linear 0.2s;
    overflow: visible;
}
.course_duration .course_detail{
	padding: 10px;
	padding-top: 0;
	display: none;
	width: 0;
	height: 0;
	font-size: 12px;
	overflow: hidden;
}

.course_duration:hover {
	color: white;
    z-index: 3;
    background: #333;
    border-radius: 3px;
    height: 80vh;
    width: 35vh;
}
.course_duration:hover .course_detail{
	height: auto;
	width: auto;
	display: block;
}

.course_detail ul{
    padding: 10px;
	margin-top: 0;
	list-style: none;
}
.course_detail h5{
	margin: 0;
}
.course_duration h4{
	font-weight: 100;
}

{{-- courses --}}

/*staffs*/

/*Staff info*/

.staff .column img {
    display: block;
    margin: 0 5vw;
    
}

.staff-info {
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.staff-info h5{
    margin: 0;
}
.staff-info p{
    margin: 0;
}

.staff .column {
    border-bottom: 1px solid #bdbdbd;
}

.staff .column {
    padding-left: 0;
    padding-right: 0;
    display: flex;
    flex-direction: row;
    justify-content: center;
}

.staff {
    display: block;
    /*width: 80vw;*/
    margin: 0 auto;
}

/*staffs*/
</style>
@endsection('style') @section("script") {{--
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/lightgallery.js') }}"></script> --}}
<script src="{{ asset('js/baugette.js') }}"></script>
<script>
baguetteBox.run('.gallery', {

});
</script>
@endsection("script")
