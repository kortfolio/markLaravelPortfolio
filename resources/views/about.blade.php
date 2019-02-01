@extends('layouts.master')

@section('title')
    About Mark - Kortfolio.com
    @endsection
@include('includes.header')
@section('content')
    @include('includes.message-block')
    <!--[if IE]-->
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <!--[endif]-->
    
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>  
        <div class="panel panel-default" name="aboutMark">  <!-- Welcome Message -->
        <div class="panel-body">
                    <div class="col-sm-4">
                        <img class="img-responsive" src="{{ URL::to('public/images/markkang.jpg') }}">   
                    </div>
                    <div class="col-sm-8">	
                  <p class="kortfolio-Headline">Mark Kang</p>
                        <p class=kortfolio-aboutMark>
                        Hi, I'm Mark. I am currently working at TKBK Marketing as a general manager. I design and provide business improvement solutions and developing E-commerce for retail/wholesale businesses.
                        </p>

              <p class=kortfolio-aboutMark>
                      
                        This year I began preparing for a professional web developer career and I am super excited!
                        
                        Last year I developed few E-Commerces and designed various types of retail marketing prints.
            </p>        
            <p class=kortfolio-aboutMark>
                        Prior to moving to Washington, I finished my bachelors in Computer Science and started off my career as software engineer at Marriott HQ (Via TCS).
                        
                        Aside from all this, I love beautiful designs and I care deeply about improving my life quality.
                         <p class=kortfolio-aboutMark>
                        I’m based in Puyallup, WA but originally from Seoul, South Korea.
                        </p>
                        <p class=kortfolio-aboutMark>
                        Thanks for stopping by!
                        </p>
                </p>
                </div>
        <!-- Stack To Horizontal-->
        </div>
        </div> <!-- End Welcome Message-->
   
   
      <div class="panel panel-default" name="professionalExperiences">
        <div class="panel-body">
            <p class="kortfolio-Headline">Employment</p>
            <!-- Start Personal Pojrect Content-->
        <!-- Start Project Thumbnail -->
        <div class="row">
            
            <div class="col-md-1">
            </div>
            
           
           
        <!-- End Project Thumbnail -->
    
        <!-- Start Project Title, Stack, and Description-->
           <div class="col-md-10">
               <div class="kortfolio-UnitWrapper">
                   <h4 class="kortfolio-ProjectTitle"> <b>TKBK Marketing LLC </b></h4>
                   <h5 class="kortfolio-Stack">General Manager</h5>
                     <h5 class="kortfolio-Stack">Jan 2018 - Present</h5>
                </div>
                    <ul class="kortfolio-EmploymentDetail">
                         <li>Designing and providing business improvement solutions for small retail businesses.</li>
                         <li>Building and managing Magento (Ver 1.9.x) based E-Commerce for retail / wholesale businesses.</li>
                         <li>Designing product catalog contents, marketing prints, and customized product name plates.</li>
                    </ul>
            </div>
           <div class="col-md-1">
            </div>
        </div> 
         <hr class="kortfolio-hr"></hr>

        <!-- Start TCS Experience -->
        <div class="row">
            <div class="col-md-1">
            </div>
            
            <div class="col-md-10">
               <div class="kortfolio-UnitWrapper">
                   <h4 class="kortfolio-ProjectTitle"> <b>Tata Consultancy Services</b></h4>
                   <h5 class="kortfolio-Stack">Software Enginner</h5>
                   <h5 class="kortfolio-Stack">Aug 2014 - Jun 2016</h5>
                </div>
                    <ul class="kortfolio-EmploymentDetail">
                       <li>Worked at Marriott International HQ to maintain mission critical web application.</li>
                       <li>Served as an onsite POC to cooperatively resolve SLA incidents with offshore team.</li> 
                       <li>Resolved SLA incidents via log analysis, code fix, deployment of new version of the application.</li> 
                       <li>Stack : Spring MVC Framework, RESTful APIs, HermesJMS, BMC Remedy, Dynatrace.</li> 
                    </ul>
            </div>
        <!-- End Project Title, Stack, and Description-->
        <!-- Location and Date -->
        
            
            <div class="col-md-1">
            </div>
            
        <!-- End Location and Date -->
        
        </div> 
    <!-- End Personal Project Content-->
            
      
        </div>
    </div>

    <div class="panel panel-default" name="Personal Projects">
        <div class="panel-body">
        <p class="kortfolio-Headline">Personal Projects</b>
    <!-- Start Personal Pojrect Content-->
        <!-- Start Project Thumbnail -->
        <div class="row">
            
            <div class="col-md-1">
            </div>
            
            <div class="col-md-2">
               <img src="https://placehold.it/140x140" class="img-responsive center-block" style="width: 140px; height: 140px">
           </div>
           
        <!-- End Project Thumbnail -->
    
        <!-- Start Project Title, Stack, and Description-->
           <div class="col-md-6">
               <div class="kortfolio-UnitWrapper">
                   <h4 class="kortfolio-ProjectTitle"> <b>Livedaze - </b>Full Stack Web Application Development</h4>
                   <h5 class="kortfolio-Stack">Stack :  React, redux, react-router, sass, SockJS, Node.js, Express, MongoDB, mongoose</h5>
                </div>
                   <ul class="kortfolio-ProjectDetail">
                       <li>Building a time management web application using React and Redux.</li>
                       <li>Developing all RESTful and MVC-based API server and its relational models.</li>
                       <li>Developed data visualization functionalities using Chart.js</li>
                    </ul>
            </div>
        <!-- End Project Title, Stack, and Description-->
          
        <!-- Start Github & Demo Link -->
            <div class="col-md-2">
                  <!-- Needs an update --><img class="img-responsive" width="120px" src="{{ URL::to('public/images/viewOnGithubBtn.png') }}">               
                <br>
            </div>
            
            <div class="col-md-1">
            </div>
            
        <!-- End Github & Demo Link -->
        
        </div> 
    <!-- End Personal Project Content-->
  <hr class="kortfolio-hr"></hr>
    <!-- Start Personal Pojrect Content-->
        <!-- Start Project Thumbnail -->
        <div class="row">
            
            <div class="col-md-1">
            </div>
            
            <div class="col-md-2">
               <img src="https://placehold.it/140x140" class="img-responsive center-block" style="width: 140px; height: 140px">
           </div>
           
        <!-- End Project Thumbnail -->
    
        <!-- Start Project Title, Stack, and Description-->
           <div class="col-md-6">
               <div class="kortfolio-UnitWrapper">
                   <h4 class="kortfolio-ProjectTitle"><b>A to Z Vape - </b>E-Commerce Development</h4>
                   <h5 class="kortfolio-Stack">Stack : Magento, PHP, MySQL, Javascript, HTML, CSS.</h5>
                </div>
                   <ul class="kortfolio-ProjectDetail">
                        <li style="list-style-type: none;"><!-- Project Title and Description -->
                        <li>Designed and developed a Magento based E-commerce from scratch.</li>
                        <li>Designed all web contents including weekly newsletters, product mockup images, and web banners.</li>
                        <li>Systematically  handled over 100 shipments per day to provide optimized shipping service.</li>
                    </ul>
            </div>
        <!-- End Project Title, Stack, and Description-->
          
        <!-- Start Github & Demo Link -->
            <div class="col-md-2">
                  <!-- Needs an update --><img class="img-responsive" width="120px" src="{{ URL::to('public/images/viewOnGithubBtn.png') }}">               
                <br>
            </div>
            
            <div class="col-md-1">
            </div>
            
        <!-- End Github & Demo Link -->
        
        </div> 
    <!-- End Personal Project Content-->
  <hr class="kortfolio-hr"></hr>

    <!-- Start Personal Pojrect Content-->
        <!-- Start Project Thumbnail -->
        <div class="row">
            
            <div class="col-md-1">
            </div>
            
            <div class="col-md-2">
               <img src="https://placehold.it/140x140" class="img-responsive center-block" style="width: 140px; height: 140px">
           </div>
           
        <!-- End Project Thumbnail -->
    
        <!-- Start Project Title, Stack, and Description-->
           <div class="col-md-6">
               <div class="kortfolio-UnitWrapper">
                   <h4 class="kortfolio-ProjectTitle"> <b>Pine Tree Test Prep Language Centre - </b>Front End Web Development / Graphic Design</h4>
                   <h5 class="kortfolio-Stack">Stack : HTML, CSS, Javascript</h5>
                </div>
                   <ul class="kortfolio-ProjectDetail">
                       <li>Built a responsive website from scratch using HTML5, Javascript and Bootstrap.</li>
                       <li>Designed newspaper advertisement, brochure, window posters, and web marketing solutions.</li>
                    </ul>
            </div>
        <!-- End Project Title, Stack, and Description-->
          
        <!-- Start Github & Demo Link -->
            <div class="col-md-2">
                  <!-- Needs an update --><img class="img-responsive" width="120px" src="{{ URL::to('public/images/viewOnGithubBtn.png') }}">               
                <br>
            </div>
            
            <div class="col-md-1">
            </div>
            
        <!-- End Github & Demo Link -->
        
        </div> 
    <!-- End Personal Project Content-->
  <hr class="kortfolio-hr"></hr>

    <!-- Start Personal Pojrect Content-->
        <!-- Start Project Thumbnail -->
        <div class="row">
            
            <div class="col-md-1">
            </div>
            
            <div class="col-md-2">
               <img src="https://placehold.it/140x140" class="img-responsive center-block" style="width: 140px; height: 140px">
           </div>
           
        <!-- End Project Thumbnail -->
    
        <!-- Start Project Title, Stack, and Description-->
           <div class="col-md-6">
               <div class="kortfolio-UnitWrapper">
                   <h4 class="kortfolio-ProjectTitle"> <b>EjuiceNW Inc</b> E-Commerce Development</h4>
                   <h5 class="kortfolio-Stack">Stack :  Magento, PHP, MySQL, Javascript, HTML, CSS</h5>
                </div>
                   <ul class="kortfolio-ProjectDetail">
                       <li> Designed and developed Magento based wholesale and retail E-commerce for E-liquid manufacturer in WA.</li>
                       <li>Editing and upload over 200 products images, SEO optimization, designing banner, develop customized Magento theme.</li>
                    </ul>
            </div>
        <!-- End Project Title, Stack, and Description-->
          
        <!-- Start Github & Demo Link -->
            <div class="col-md-2">
                  <!-- Needs an update --><img class="img-responsive" width="120px" src="{{ URL::to('public/images/viewOnGithubBtn.png') }}">               
                <br>
            </div>
            
            <div class="col-md-1">
            </div>
            
        <!-- End Github & Demo Link -->
        
        </div> 
    <!-- End Personal Project Content-->
    
     <hr class="kortfolio-hr"></hr>

        <!-- Start Personal Pojrect Content-->
        <!-- Start Project Thumbnail -->
        <div class="row">
            
            <div class="col-md-1">
            </div>
            
            <div class="col-md-2">
               <img src="https://placehold.it/140x140" class="img-responsive center-block" style="width: 140px; height: 140px">
           </div>
           
        <!-- End Project Thumbnail -->
    
        <!-- Start Project Title, Stack, and Description-->
           <div class="col-md-6">
               <div class="kortfolio-UnitWrapper">
                   <h4 class="kortfolio-ProjectTitle"> <b> ManyMentors - </b>Front End Web Development</h4>
                   <h5 class="kortfolio-Stack">  <li> Stack : </b> HTML, CSS, JavaScript, Jquery</li></h5>
                </div>
                    <ul class="kortfolio-ProjectDetail">
               <li>Communicated directly with Co-founder (Keshia Ashe) to redesign their website.</li>
               <li>Implemented an image mock-up provided by the organization onto its webpage, using CSS, JavaScript, and HTML.</li>
            </div>
        <!-- End Project Title, Stack, and Description-->
          
        <!-- Start Github & Demo Link -->
            <div class="col-md-2">
                <!-- Needs an update --><img class="img-responsive" width="120px" src="{{ URL::to('public/images/viewOnGithubBtn.png') }}">
                <br>
            </div>
            
            <div class="col-md-1">
            </div>
            
        <!-- End Github & Demo Link -->
        
        </div> 
    <!-- End Personal Project Content-->

  <hr class="kortfolio-hr"></hr>

  <hr class="kortfolio-hr"></hr>

        <!-- Start Personal Pojrect Content-->
        <!-- Start Project Thumbnail -->
        <div class="row">
            
            <div class="col-md-1">
            </div>
            
            <div class="col-md-2">
               <img src="https://placehold.it/140x140" class="img-responsive center-block" style="width: 140px; height: 140px">
           </div>
           
        <!-- End Project Thumbnail -->
    
        <!-- Start Project Title, Stack, and Description-->
           <div class="col-md-6">
               <div class="kortfolio-UnitWrapper">
                   <h4 class="kortfolio-ProjectTitle"> <b> Klicker - </b>Java Application Development</h4>
                   <h5 class="kortfolio-Stack">  <li> Stack : </b> Java (Email Authentication, Regular Expression, String Process, GUI), Eclipse, JSmooth.</li></h5>
                </div>
                    <ul class="kortfolio-ProjectDetail">
                        <li>A java application designed and developed for a friend of mine, who requested an automatic email link opener.</li>
                        <li>Accesses multiple inboxes, and checks newly arrived emails.</li>
                        <li>Automatically recognizes and opens a link specified by the user in an email, and creates a log.</li>
            </div>
        <!-- End Project Title, Stack, and Description-->
          
        <!-- Start Github & Demo Link -->
            <div class="col-md-2">
                  <!-- Needs an update --><img class="img-responsive" width="120px" src="{{ URL::to('public/images/viewOnGithubBtn.png') }}">               
                <br>
            </div>
            
            <div class="col-md-1">
            </div>
            
        <!-- End Github & Demo Link -->
        
        </div> 
    <!-- End Personal Project Content-->

  <hr class="kortfolio-hr"></hr>

    <!-- Start Personal Pojrect Content-->
        <!-- Start Project Thumbnail -->
        <div class="row">
            
            <div class="col-md-1">
            </div>
            
            <div class="col-md-2">
               <img src="https://placehold.it/140x140" class="img-responsive center-block" style="width: 140px; height: 140px">
           </div>
           
        <!-- End Project Thumbnail -->
    
        <!-- Start Project Title, Stack, and Description-->
           <div class="col-md-6">
               <div class="kortfolio-UnitWrapper">
                   <h4 class="kortfolio-ProjectTitle"> <b> Kortfolio - </b>Laravel based personal portfolio</h4>
                   <h5 class="kortfolio-Stack">Stack :  Laravel, Boostrap, HTML, CSS, Javascript, Jquery, SQL, Version Control.</li></h5>
                </div>
                    <ul class="kortfolio-ProjectDetail">
                           <li>A resposive website developed by myself, on which I upload and update my personal projects.</li>
                    </ul>
            </div>
        <!-- End Project Title, Stack, and Description-->
          
        <!-- Start Github & Demo Link -->
            <div class="col-md-2">
                  <!-- Needs an update --><img class="img-responsive" width="120px" src="{{ URL::to('public/images/viewOnGithubBtn.png') }}">               
                <br>
            </div>
            
            <div class="col-md-1">
            </div>
            
        <!-- End Github & Demo Link -->
        
        </div> 
    <!-- End Personal Project Content-->
  <hr class="kortfolio-hr"></hr>


            </div> <!-- End Row -->
        </div> <!-- End Personal Project -->

    <!-- Education Panel -->
    <div class="panel panel-default" name="education">
        <div class="panel-body">
            <p class="kortfolio-Headline">Education</p>
        
    <!-- Start Education Content -->
        <div class="row">
          
              <div class="col-md-2">
              </div>
        <!-- School Name and Degree -->
           <div class="col-md-8">
               <div class="kortfolio-UnitWrapper">
                   <h4 class="kortfolio-ProjectTitle"> <b>Virginia Commonwealth University</b></h4>
                   <h5 class="kortfolio-Stack">B.S in Computer Science with minor in mathematics</h5>
                   <h5 class="kortfolio-Stack">Aug 2009 - May 2014</h5>
                </div>
                    <ul class="kortfolio-ProjectDetail">
                       <li>Undergraduate Coursework : Java Development, Data Structures, Algorithm Analysis with Advanced Data Structures, Object Oriented Programming, Software Engineering Project Management.</li>
                    </ul>
            </div>
                <div class="col-md-2">
                </div>
        </div> 
    <!-- End Eductation Content -->

           
        </div>
    </div>

    <div class="panel panel-default" name="professionalExperiences">
        <div class="panel-body">
                <div class="panel-body">
                    <b class="headingFont">skill summary</b>
                    <ul>
                        <li><b>Programming Languages :</b> Java, JavaScript (ES6), Python, PHP, Jquery, AJAX, HTML, CSS, SQL, C/C++/C#.
                        </li>
                        <li><b>Web Technologies :</b> React, Redux, ASP.NET, Spring, Laravel, Magento.
                        </li>
                    </ul>
            
                </div>
            </div>
        </div>
    <p class="text-right"><a class="gogooma" href="files/markResumeAugust.pdf">Download Resume</a></p>
    </div>

@endsection
<body>

</body>
</html>