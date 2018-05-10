<!DOCTYPE html>
<html>

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>VSystem_01</title>
            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
            <link rel="stylesheet" href="assets/css/styles.css">
            <link rel="stylesheet" href="assets/css/navigations.css">
            <link rel="stylesheet" href="assets/css/alwaysInclude.css">
            <link rel="stylesheet" href="assets/css/hoverableImages.css">
           
        
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
        </head>

    <body>
        <div class="ui sidebar vertical left icon inverted menu ">
            <a href="home.html" class="item"> <i class="home icon"></i>Home</a>
            <a href="#" class="item"> <i class="sticky note icon"></i>Instructions</a>
            <a href="vote.html" class="active red item"> <i class="thumbs up icon"></i>Vote</a>
            <a href="createPoll.html" class="item"> <i class="globe icon"></i>Manage</a>
            <a href="#" class="item"> <i class="info icon"></i>About</a>
            <a href="index.html" class="item"> <i class="power off icon"></i>Logout</a>
        </div>

    <div class="container" style="margin-top:100px;">
        <h2 class="ui center aligned icon header">
            <i class="circular inverted thumbs up icon"></i>
            Vote
        </h2>
        <div class="sub ui center aligned header">It is time to vote, please make sure to follow each instructions</div>
    </div>
   <div class="ui grid container" style="margin-top:70px;"><!--start of three column grid stackable container -->

        <div class="five wide column stackable"><!--start of first column -->
                
            <div class="ui fluid vertical tiny steps">
                    
                <div class="step" style="background-color:green; color:white;">
                    <i class="balance scale icon"></i> 
                      <div class="content">
                        <div class="title">President</div>
                      </div>
                </div>

                <div class="step" style="background-color:green; color:white;">
                        <i class="gavel icon"></i> 
                        <div class="content">
                        <div class="title">Internal Vice President</div>
                
                        </div>
                </div>

                <div class="active step">
                        <i class="open envelope icon"></i> 
                        <div class="content">
                        <div class="title">External Vice President</div>
                
                        </div>
                </div>

                <div class="step">
                        <i class="pencil icon"></i> 
                        <div class="content">
                        <div class="title">Secretary</div>
                
                        </div>
                </div>
        
                <div class="step">
                        <i class="money bill alternate icon"></i> 
                        <div class="content">
                        <div class="title">Treasurer</div>
                
                        </div>
                </div>

                <div class="step">
                        <i class="file alternate icon"></i> 
                        <div class="content">
                        <div class="title">Auditor</div>
                
                        </div>
                </div>

                <div class="step">
                        <i class="bullhorn icon"></i> 
                        <div class="content">
                        <div class="title">Public Relations Officer</div>
                
                        </div>
                </div>

            </div>
        </div><!--end of first column -->

        <div class="eleven wide column stackable fluid"><!--start of second column -->
            
            <div class="ui form">
                <div class="grouped fields">
                    <div class="ui grid">
                        <div class="eight wide column">
                            <div class="field">
                                    <!-- <a href="http://google.com" class="ui middle aligned image">
                                        <img src="assets/img/elon.jpg">
                                    </a> -->
                                    <div class="elon">
                                            <h1 class="blockh1">Jeff Bezos</h1>
                                    </div>
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="example2" >
                                        <label>Jeff Bezos</label>
                                    </div>
                            </div>
             
                            <div class="field">
                                    <!-- <a href="http://google.com" class="ui middle aligned image">
                                        <img src="assets/img/elon.jpg">
                                    </a> -->
                                    <div class="elon">
                                            <h1 class="blockh1">Elon Musk</h1>
                                    </div>
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="example2" >
                                        <label>Elon Musk</label>
                                    </div>
                            </div>
                        </div>

                        <div class="eight wide column">

                            <div class="field">
                                    <!-- <a href="http://google.com" class="ui middle aligned image">
                                        <img src="assets/img/elon.jpg">
                                    </a> -->
                                    <div class="elon">
                                            <h1 class="blockh1">Mark Zuckerberg</h1>
                                    </div>
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="example2" >
                                        <label>Mark Zuckerberg</label>
                                    </div>
                            </div>

                            <div class="field">
                                    <!-- <a href="http://google.com" class="ui middle aligned image">
                                        <img src="assets/img/elon.jpg">
                                    </a> -->
                                    <div class="elon">
                                            <h1 class="blockh1">Steve Jobs</h1>
                                    </div>
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="example2" >
                                        <label>Steve Jobs</label>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                 <a href="voteIVP.html">
                    <div class="ui animated negative button" tabindex="0">
                            <div class="visible content">Previous</div>
                            <div class="hidden content">
                            <i class="left arrow icon"></i>
                            </div>
                    </div>
                </a>

                <a href="#">
                    <div class="ui animated positive button" tabindex="0">
                            <div class="visible content">Next</div>
                            <div class="hidden content">
                            <i class="right arrow icon"></i>
                            </div>
                    </div>
                </a>
        </div><!--end of second column -->

        <div class="four wide column"><!--start of third column -->

        </div><!--end of third column -->

   </div><!--end of three column grid stackable container -->


    <div class="ui basic top fixed huge icon menu inverted">
            <a id="toggle" class="item">
            <i class="sidebar icon"></i>
            Menu
        </a>
    </div>
    <script>
    $('#toggle').click(function(){
    $('.ui.sidebar').sidebar('toggle');
    });
    </script>

                  
    </body>

</html>
