<!DOCTYPE html>
<html>

<<<<<<< HEAD
    <!-- Mirrored from wp1.themexlab.com/html/volunteer/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:40:27 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Volunteer Multipurpose HTML5 Donation Template | Blog Page</title>
        <!-- Stylesheets -->
        <link href="<?php echo base_url()?>template/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url()?>template/css/revolution-slider.css" rel="stylesheet">
        <link href="<?php echo base_url()?>template/css/style.css" rel="stylesheet">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="<?php echo base_url()?>template/css/responsive.css" rel="stylesheet">


        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->


        <style type="text/css">
            
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place front is invalid - may break your css so removed */  
                padding-top: 100px; /* Location of the box - don't know what this does?  If it is to move your modal down by 100px, then just change top below to 100px and remove this*/
                left: 0;
                right:0; /* Full width (left and right 0) */
                top: 0;
                bottom: 0; /* Full height top and bottom 0 */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                z-index: 9999; /* Sit on top - higher than any other z-index in your site*/
                }
        </style>
    </head>

    <body>
        

            <!-- Preloader -->
            <div class="preloader"></div>

            <!-- Main Header -->
            <?php require 'includes/header.php'; ?>
            <!--End Main Header -->


            <!--Sidebar Navigation-->
            <?php require 'includes/navigation.php'; ?>
            <!--Sidebar Nav End-->

             <div class="page-wrapper" style="min-height: 150px;">
            <!--Sidebar Nav End-->
            </div>


            <!--Bread Crumb-->
            <div class="bread-crumb">
                <div class="auto-container">
                    Pages  &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Blog</a>
                </div>
            </div>

            <!--Sidebar Page-->
            <div class="sidebar-page">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Content Side-->	
                        <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                            <section class="blog-section">
                                <div class="sec-title">
                                    <h2>Our <strong>Blog</strong></h2>
                                </div>

                                <!--Blog Post-->
                               
                               <?php
                                foreach($query as $row){

                                    $number = 1;
                                
                                ?>

                                <!--Blog Post-->
                                <div class="blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                                    <input type="hidden" id="article"  value="<?php echo $row->article_id;?>">
                                    <article class="column-inner">
                                        <figure class="image-box">
                                            <a href="#"><img src="<?php echo base_url()?>template/images/resource/blog-image-6.jpg" alt="" title="Blog"></a>
                                            <div class="post-options">
                                                <a href="#" class="plus-icon img-circle"><span class="flaticon-add30"></span></a>
                                                <a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a>
                                            </div>
                                        </figure>
                                        <div class="lower-part">
                                            <div class="post-date"><span class="day"><?php echo $row->article_id;?></span> <span class="month"></span></div>
                                            <h3><a href="#"><?php echo $row->title;?></a></h3>
                                            <div class="post-info"><a href="#"><span class="icon flaticon-user197"></span> &ensp;<?php echo $row->firstname." ".$row->lastname;?></a> &ensp; <a href="#"><span class="icon flaticon-speechbubble65"></span> &ensp;<?php echo $row->article_date;?></a></div>
                                            <div class="post-text"><?php echo $row->article_body;?></div>
                                            

                                            <input type="button" id="shcm" value="show comment"  onclick="showcomment(this);"   class="pull-right
                                                theme-btn light-btn">
                                            <div class="text-right link"><a href="#" class="read-more"><span class="fa fa-angle-right"></span> &ensp; Read More</a></div>
                                        </div>
                                        
                                    </article>
                                </div>

                                

                           

            <div id="<?php echo $row->article_id;?>" ></div>
            <div class="container-fluid" id="com"> 
            <h3>Leave a Comment</h3>
                    
                            <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" rows="4" id="comment" name="comment"> </textarea>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                            <input  onclick="submitcomment(this);"  type="submit" value="Leave comment" class="pull-right theme-btn light-btn">
                            </div>
                            </div>
                     
                </div>


                <?php

                                $number++;

                                } 

                                ?>

 </section>


<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" ></script>

 <script src="<?php echo base_url()?>template/js/bootstrap.min.js"></script>



                <script type="text/javascript">

                    var $ = jQuery.noConflict();


        function showcomment(object){

        var article_id = object.parentElement.firstElementChild.firstElementChild.firstChild.data;

       

       if (object.value == "show comment"){


            object.value = "hide";


       $.post('<?php echo base_url();?>index.php/Blog/displaycomments/',
                                                  {
                                                   article_id:article_id
                                                  
                                                  },
                                                  function(data)
                          {
                              
                            $('#'+article_id).show();                       
                            $('#'+article_id).html(data);
                          });

         
        
         
    }else if(object.value == "hide") {
        
        
       object.value ="show comment";

        $('#'+article_id).hide();

        

       

       
    }





        

        }

  // $(function () {

  //                   $("#showcomment").click(function() 
  //       {

  //        var article_id = $("#article").val();
  //        $.post('<?php echo base_url();?>index.php/Blog/displaycomments/',
  //                                                 {
  //                                                  article_id:article_id
                                                  
  //                                                 },
  //                                                 function(data)
  //                         {
                                                     
  //                           $("#display_comment").html(data);
  //                         });


  //    }

  //        }); 


function submitcomment(object) {
       
        var name = object.parentElement.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.lastElementChild.children.name.value;
        var email = object.parentElement.parentElement.previousElementSibling.previousElementSibling.lastElementChild.children.email.value;
        var comment = object.parentElement.parentElement.previousElementSibling.lastElementChild.children.comment.value;
        var article_id = object.parentElement.parentElement.parentElement.previousElementSibling.id; 
        var dataString = 'name='+ name + '&email=' + email + '&comment=' + comment+ '&article_id=' + article_id;
        if(name=='' || email=='' || comment=='')
        {
        alert('Please Give Valid Details');
        }
        else
        {
        //$("#display_comment").show();
        $('#'+article_id).fadeIn(100).html('<img src="<?php echo base_url();?>uploads/ajaxloader.gif" />Loading Comment...');
        $.ajax({

        
        type: "POST",
        url: "<?php echo base_url();?>index.php/Blog/insert_comments",
        data: dataString,
        cache: false,
        success: function(data){
        $('#'+article_id).html(data);
        $('#'+article_id).fadeIn("slow");
        }
        });
        }return false;
         }
</script>



                            <br>
                            <!-- Theme Pagination -->
                            <div class="theme-pagination text-left">
                                <ul>
                                    <li><a href="#"><span class="flaticon-left222"></span>&ensp;Prev</a></li>
                                    <li><a href="#" class="active">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">....</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a href="#">11</a></li>
                                    <li><a href="#">Next&ensp;<span class="flaticon-right11"></span></a></li>
                                </ul>
                            </div>


                        </div>
                        <!--Content Side-->

                        <!--Sidebar-->	
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <aside class="sidebar">

                                <!-- Search Form -->
                                <div class="widget search-form">

                                    <form method="post" action="http://wp1.themexlab.com/html/volunteer/blog.html">
                                        <div class="form-group">
                                            <input type="search" name="search" value="" placeholder="search for something">
                                            <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                                        </div>
                                    </form>

                                </div>

                                <!-- Popular Categories -->
                                <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="sec-title"><h3>Popular <strong>categories</strong></h3></div>

                                    <ul class="list">
                                        <li><span class="icon flaticon-blank36"></span> <a href="#">Online spending dahsboard</a></li>
                                        <li><span class="icon flaticon-blank36"></span> <a href="#">Worldwide charity programs</a></li>
                                        <li><span class="icon flaticon-blank36"></span> <a href="#">Awesome volunteers</a></li>
                                        <li><span class="icon flaticon-blank36"></span> <a href="#">Leading volunteer groups</a></li>
                                        <li><span class="icon flaticon-blank36"></span> <a href="#">Charity programs for children</a></li>
                                    </ul>

                                </div>

                                <!-- Recent Posts -->
                                <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="sec-title"><h3>Recent <strong>posts</strong></h3></div>

                                    <div class="post">
                                        <div class="post-thumb"><a href="#"><img src="<?php echo base_url()?>template/images/resource/post-thumb-1.jpg" alt=""></a></div>
                                        <h4><a href="#">Awesome Blogpost</a></h4>
                                        <div class="post-info">Dec 12, 2015 in <a href="#"><em>general</em></a></div>
                                    </div>

                                    <div class="post">
                                        <div class="post-thumb"><a href="#"><img src="<?php echo base_url()?>template/images/resource/post-thumb-2.jpg" alt=""></a></div>
                                        <h4><a href="#">Creating a new layout</a></h4>
                                        <div class="post-info">Dec 8, 2015 in <a href="#"><em>charity</em></a></div>
                                    </div>

                                    <div class="post">
                                        <div class="post-thumb"><a href="#"><img src="<?php echo base_url()?>template/images/resource/post-thumb-3.jpg" alt=""></a></div>
                                        <h4><a href="#">We work for your life</a></h4>
                                        <div class="post-info">Dec 1, 2015 in <a href="#"><em>donations</em></a></div>
                                    </div>

                                </div>

                                <!-- Popular Tags -->
                                <div class="widget popular-tags">
                                    <div class="sec-title"><h3>Popular <strong>tags</strong></h3></div>

                                    <a href="#">awesome</a> <a href="#">strategy</a> <a href="#">development</a> <a href="#">css</a> <a href="#">photoshop</a> <a href="#">photography</a> <a href="#">html</a> <a href="#">charity</a> <a href="#">charity</a> <a href="#">organisations</a> <a href="#">php</a> <a href="#">foundation</a> <a href="#">donations</a> <a href="#">money</a> <a href="#">children</a> <a href="#">spendings</a> <a href="#">help</a> <a href="#">housing</a>

                                </div>

                                <!--Twitter Feeds-->
                                <div class="widget twitter-feeds wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="sec-title"><h3>Recent <strong>Tweets</strong></h3>	</div>
                                    <div class="feed">
                                        <div class="icon"><span class="fa fa-twitter"></span></div>
                                        <div class="feed-content">Help our children in south  africa  <a href="#">@http://t.co/8dfkjht</a></div>
                                        <div class="time text-right"><em>15 mins ago</em></div>
                                    </div>

                                    <div class="feed">
                                        <div class="icon"><span class="fa fa-twitter"></span></div>
                                        <div class="feed-content">We reach a number of 1000 volunteers  <a href="#">@http://t.co/7gfkjht</a></div>
                                        <div class="time text-right"><em>15 mins ago</em></div>
                                    </div>

                                </div>

                            </aside>


                        </div>
                        <!--Sidebar-->


                    </div>
                </div>
            </div>


            <!--Main Footer-->
           <?php require 'includes/footer.php'; ?>

        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>



        <?php require 'includes/login.php'; ?>


        <script src="<?php echo base_url()?>template/js/jquery.js"></script> 
       
        <script src="<?php echo base_url()?>template/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url()?>template/js/scrollbar.js"></script>
        <script src="<?php echo base_url()?>template/js/wow.js"></script>
        <script src="<?php echo base_url()?>template/js/script.js"></script>


        <!--Start of Tawk.to Script-->
        <script type="text/javascript">

            var $_Tawk_API = {}, $_Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/569cfc09aeafd72017dd6ea9/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->



        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-15521914-3', 'auto');
            ga('send', 'pageview');

        </script>



                



    </body>
=======
<!-- Mirrored from wp1.themexlab.com/html/volunteer/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:40:27 GMT -->
<head>
    <meta charset="utf-8">
    <title>Volunteer Multipurpose HTML5 Donation Template | Blog Page</title>
    <!-- Stylesheets -->
    <link href="<?php echo base_url() ?>template/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>template/css/revolution-slider.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>template/css/style.css" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="js/respond.js"></script><![endif]-->
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            -o-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        body {
            font-family: "Roboto", Helvetica, Arial, sans-serif;
            font-weight: 100;
            font-size: 12px;
            line-height: 30px;
            color: #777;
            background: #801a00;
        }

        .container {
            max-width: 100%;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact textarea,
        #contact button[type="submit"] {
            font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
        }

        #contact {
            background: #F9F9F9;
            padding: 25px;
            margin:  0;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        #contact h3 {
            display: block;
            font-size: 30px;
            font-weight: 300;
            margin-bottom: 10px;
        }

        #contact h4 {
            margin: 5px 0 15px;
            display: block;
            font-size: 13px;
            font-weight: 400;
        }

        fieldset {
            border: medium none !important;
            margin: 0 0 10px;
            min-width: 100%;
            padding: 0;
            width: 100%;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact textarea {
            width: 100%;
            border: 1px solid #ccc;
            background: #FFF;
            margin: 0 0 5px;
            padding: 10px;
        }

        #contact input[type="text"]:hover,
        #contact input[type="email"]:hover,
        #contact input[type="tel"]:hover,
        #contact input[type="url"]:hover,
        #contact textarea:hover {
            -webkit-transition: border-color 0.3s ease-in-out;
            -moz-transition: border-color 0.3s ease-in-out;
            transition: border-color 0.3s ease-in-out;
            border: 1px solid #aaa;
        }

        #contact textarea {
            height: 100px;
            max-width: 100%;
            resize: none;
        }

        #contact button[type="submit"] {
            cursor: pointer;
            width: 100%;
            border: none;
            background: #4CAF50;
            color: #FFF;
            margin: 0 0 5px;
            padding: 10px;
            font-size: 15px;
        }

        #contact button[type="submit"]:hover {
            background: #43A047;
            -webkit-transition: background 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out;
            transition: background-color 0.3s ease-in-out;
        }
>>>>>>> a805fb8f572a8ad3e2974aad305e9bf0284f837f

        #contact button[type="submit"]:active {
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .copyright {
            text-align: center;
        }

        #contact input:focus,
        #contact textarea:focus {
            outline: 0;
            border: 1px solid #aaa;
        }

        ::-webkit-input-placeholder {
            color: #888;
        }

        :-moz-placeholder {
            color: #888;
        }

        ::-moz-placeholder {
            color: #888;
        }

        :-ms-input-placeholder {
            color: #888;
        }

        li.active a {

            background-color: #ACF619 !important;
            color: black !important;

        }

    </style>
</head>

<body>


<!-- Preloader -->
<div class="preloader"></div>

<!-- Main Header -->
<?php require 'includes/header.php';?>
<!--End of Main Header -->


<!--Sidebar Navigation-->
<?php require 'includes/navigation.php';?>
<!--Sidebar Nav End-->

<div class="page-wrapper" style="min-height: 150px;">
    <!--Sidebar Nav End-->
</div>



<!--Sidebar Page-->
<div class="sidebar-page">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <!-- <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12"> -->

<div class="col-lg-9" style="background-color: #ffffff;height:100%; margin-left:150px;width: 918px">




<ul class="nav nav-tabs" style="padding:5px">


    <li class="active"><a data-toggle="tab" href="#received" style="margin-left: 30px;margin-right:20px;background-color: #F62305;color: white;width: 150px">Water Facilities</a></li>
    <li><a data-toggle="tab" href="#pending" style="margin-right:20px;background-color: #F62305;color: white;width: 150px">Infrastructure</a></li>
    <li><a data-toggle="tab" href="#notasigned" style="margin-right:20px;background-color: #F62305;color: white;width: 150px">Stationary Facilities</a></li>
    <li><a data-toggle="tab" href="#tab4" style="margin-right:20px;background-color: #F62305;color: white;width: 150px">Sanitory Facilities</a></li>

</ul>







<div class="tab-content">

    <div id="received" class="tab-pane fade in active">
<!-- $$$$$$$$$$$$$ Content under the Drinking water Tab $$$$$$$$$$$$$4 -->
        <div class="container">
        <form id="contact" action="" method="post">

   
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your School" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Please Describe your request" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>

  </form>
</div>
<!-- $$$$$$$$$$$$$$$$$$$$$$$ content ends $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->



    </div>






    <div id="pending" class="tab-pane fade">

               <div class="container">
        <form id="contact" action="" method="post">

   
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your School" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Please Describe your request" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>

  </form>
</div>



    </div>




    <div id="notasigned" class="tab-pane fade">
             <div class="container">
        <form id="contact" action="" method="post">

    
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your School" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Please Describe your request" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>

  </form>
</div>
    </div>



    <div id="tab4" class="tab-pane fade in active">

               <div class="container">
        <form id="contact" action="" method="post">

    
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your School" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Please Describe your request" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>

  </form>
</div>

    </div>
</div>



</div





        </div>
    </div>
</div>


<!--Main Footer-->
<?php require 'includes/footer.php';?>

<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


<script src="<?php echo base_url() ?>template/js/jquery.js"></script>
<script src="<?php echo base_url() ?>template/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>template/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>template/js/scrollbar.js"></script>
<script src="<?php echo base_url() ?>template/js/wow.js"></script>
<script src="<?php echo base_url() ?>template/js/script.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var $_Tawk_API = {}, $_Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/569cfc09aeafd72017dd6ea9/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-15521914-3', 'auto');
    ga('send', 'pageview');

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from wp1.themexlab.com/html/volunteer/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:41:29 GMT -->
</html>