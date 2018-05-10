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
            <a href="vote.html" class="item"> <i class="thumbs up icon"></i>Vote</a>
            <a href="createPoll.html" class="active red item"> <i class="globe icon"></i>Manage</a>
            <a href="#" class="item"> <i class="info icon"></i>About</a>
            <a href="index.html" class="item"> <i class="power off icon"></i>Logout</a>
        </div>

    <div class="container" style="margin-top:100px;">
        <h2 class="ui center aligned icon header">
            <i class="circular inverted globe icon"></i>
            Manage the elections
        </h2>
        <div class="sub ui center aligned header">As the administrator, you are going to create and manage the upcoming elections</div>
    </div>

    <div class="ui grid container stackable" style="margin-top:70px;margin-bottom:300px;"><!--start of three column grid stackable container -->

        <div class="four wide column stackable"><!--start of first column -->
                
            <div class="ui fluid vertical tiny steps">
                    
                <div class="completed step">
                        <i class="clock icon"></i> 
                            <div class="content">
                            <div class="title">Step 1</div>
                            <div class="description">Set your elections</div>
                            </div>
                </div>
                
                <div class="completed step">
                        <i class="user icon"></i> 
                            <div class="content">
                            <div class="title">Step 2</div>
                            <div class="description">Upload the candidates</div>
                            </div>
                </div>
                
                <div class="completed step">
                        <i class="users icon"></i> 
                            <div class="content">
                            <div class="title">Step 3</div>
                            <div class="description">Choose participants</div>
                            </div>
                </div>

                <div class="active step">
                        <i class="flag checkered icon"></i> 
                            <div class="content">
                            <div class="title">Step 4</div>
                            <div class="description">Summary</div>
                            </div>
                </div>

            </div>
        </div><!--end of first column -->

        <div class="twelve wide column stackable fluid"><!--start of second column -->
            <div class="ui form">
                <h2 class="ui huge inverted black segment header">
                    <i class="flag checkered icon"></i>
                    <div class="content">
                        Summary
                    <div class="sub header">Here is an overall representation of what your elections would look like</div>
                    </div>
                </h2>
            </div>
            <br>
        </div><!--end of second column -->

        <div class="six wide column stackable fluid"><!--start of third column -->
           
        </div><!--end of third column -->
   </div><!--end of three column grid stackable container -->

                    
    <h3 class="ui right floated header">
            <a href="#">
                <div class="ui animated positive button" tabindex="0">
                    <div class="visible content">Next</div>
                    <div class="hidden content">
                    <i class="right arrow icon"></i>
                    </div>
                </div>
            </a>
        </h3>
        <h3 class="ui right floated header">
            <a href="createPoll3.html">
                <div class="ui animated negative button" tabindex="0">
                    <div class="visible content">Previous</div>
                    <div class="hidden content">
                    <i class="left arrow icon"></i>
                    </div>
                </div>
            </a>
        </h3>

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

    <script>
        $('#example1').calendar();
    </script>

    <script>
        $('#example2').calendar();
    </script>


    </body>

</html>
