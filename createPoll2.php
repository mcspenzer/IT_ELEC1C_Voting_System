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

<?php require 'includes/html/sidebar.inc.php'; ?>

<div class="container" style="margin-top:100px;">
    <h2 class="ui center aligned icon header">
        <i class="circular inverted globe icon"></i>
        Manage the elections
    </h2>
    <div class="sub ui center aligned header">As the administrator, you are going to create and manage the upcoming elections</div>
</div>
<div class="ui grid container stackable" style="margin-top:70px;margin-bottom:300px;">
    <div class="four wide column stackable">   
        <div class="ui fluid vertical tiny steps">
            <div class="completed step">
                <i class="clock icon"></i> 
                <div class="content">
                    <div class="title">Step 1</div>
                    <div class="description">Set your elections</div>
                </div>
            </div>
            
            <div class="active step">
                <i class="user icon"></i> 
                <div class="content">
                    <div class="title">Step 2</div>
                    <div class="description">Upload the candidates</div>
                </div>
            </div>
            
            <div class="disabled step">
                <i class="users icon"></i> 
                <div class="content">
                    <div class="title">Step 3</div>
                    <div class="description">Choose participants</div>
                </div>
            </div>
            
            <div class="disabled step">
                <i class="flag checkered icon"></i> 
                <div class="content">
                    <div class="title">Step 4</div>
                    <div class="description">Summary</div>
                </div>
            </div>
        </div>
    </div>
    <div class="six wide column stackable fluid"><!--start of second column -->
        <div class="ui form">
            <h2 class="ui huge inverted black segment header">
                <i class="edit icon"></i>
                <div class="content">
                    Basic Information
                    <div class="sub header">Fill out the following fields given</div>
                </div>
            </h2>

            <div class="three fields">
                <div class="field">
                    <label>First name</label>
                    <input type="text" placeholder="First Name">
                </div>
                <div class="field">
                    <label>Middle name</label>
                    <input type="text" placeholder="Middle Name">
                </div>
                <div class="field">
                    <label>Last name</label>
                    <input type="text" placeholder="Last Name">
                </div>
            </div>
        </div>

        <div class="ui small fluid labeled icon buttons">
            <button class="ui button">
                <i class="upload icon"></i>Upload image
            </button>
            <button class="ui button">
                <i class="trash icon"></i>Remove image
            </button>
        </div>
        <br><br>
        <div class="ui floating dropdown fluid search button">
            <span class="text">Select a position</span>
            <div class="menu">
                <div class="item">
                    <i class="balance scale icon"></i>President
                </div>
                <div class="item"><i class="gavel icon"></i>Internal Vice President</div>
                <div class="item"><i class="open envelope icon"></i>External Vice President</div>
                <div class="item"><i class="pencil icon"></i>Secretary</div>
                <div class="item"><i class="money bill alternate icon"></i>Treasurer</div>
                <div class="item"><i class="file alternate icon"></i>Auditor</div>
                <div class="item"><i class="bullhorn icon"></i>Public Relations Officer</div>
            </div>
        </div>
        <br><br>
        <h3 class="ui right floated header">
            <a href="#">
                <div class="ui positive button" tabindex="0">
                    <div class="visible content">Add candidate</div>
                </div>
            </a>
        </h3>
        <br><br>
        <h2 class="ui small inverted segment header">
            <i class="thumbs down icon"></i>
            <div class="content"><input type="checkbox"> Include abstain as an option</div>
        </h2>
    </div><!--end of second column -->

    <div class="six wide column stackable fluid"><!--start of third column -->
        <h2 class="ui huge inverted grey segment header">
            <i class="folder icon"></i>
            <div class="content">Candidates
                <div class="sub header">Check out who's running in each position</div>
            </div>
        </h2> 
        <div class="ui accordion">
            <div class="title">
                <i class="balance scale big icon"></i>
                <i class="dropdown icon"></i>
                President
            </div>
            <div class="content">
                <p class="transition hidden">
                    <ul class="ui list">
                        <input type="radio" name="president" id="president" class="ui radio checkbox"> <span>Candidate Number One</span>
                        <br><br>
                        <input type="radio" name="president" id="president" class="ui radio checkbox"> <span>Candidate Number Two</span>
                        <br><br>
                        <input type="radio" name="president" id="president" class="ui radio checkbox"> <span>Candidate Number Three</span>
                        <br><br>
                        <input type="radio" name="president" id="president" class="ui radio checkbox"> <span>Candidate Number Four</span>
                        <br><br>
                        <input type="radio" name="president" id="president" class="ui radio checkbox"> <span>Candidate Number Five</span>
                        <br><br>
                        <h3 class="ui left floated header">
                            <a href="#">
                                <div class="ui negative disabled button" tabindex="0">
                                    <div class="content">Remove</div>
                                </div>
                            </a>
                        </h3>
                        <br><br>
                    </ul>
                </p>
            </div>
            <div class="title">
                    <i class="gavel big icon"></i>
                    <i class="dropdown icon"></i>
                    Internal Vice President
            </div>
            <div class="content">
                <p class="transition hidden">
                    <ul class="ui list">
                        <input type="radio" name="ivp" id="ivp" class="ui radio checkbox"> 
                        <span>Candidate Number One</span>
                        <br><br>
                        <input type="radio" name="ivp" id="ivp" class="ui radio checkbox"> 
                        <span>Candidate Number Two</span>
                        <br><br>
                        <input type="radio" name="ivp" id="ivp" class="ui radio checkbox"> 
                        <span>Candidate Number Three</span>
                        <br><br>
                        <input type="radio" name="ivp" id="ivp" class="ui radio checkbox"> 
                        <span>Candidate Number Four</span>
                        <br><br>
                        <input type="radio" name="ivp" id="ivp" class="ui radio checkbox"> 
                        <span>Candidate Number Five</span>
                        <br><br>
                        <h3 class="ui left floated header">
                            <a href="#">
                                <div class="ui negative disabled button" tabindex="0">
                                    <div class="content">Remove</div>
                                </div>
                            </a>
                        </h3>
                        <br><br>
                    
                    </ul>
                </p>
            </div>
            <div class="title">
                    <i class="open envelope big icon"></i>
                    <i class="dropdown icon"></i>
                    External Vice President
            </div>
            <div class="content">
                    <p class="transition hidden">
                        <ul class="ui list">
                            <input type="radio" name="evp" id="evp" class="ui radio checkbox"> 
                            <span>Candidate Number One</span>
                            <br><br>
                            <input type="radio" name="evp" id="evp" class="ui radio checkbox"> 
                            <span>Candidate Number Two</span>
                            <br><br>
                            <input type="radio" name="evp" id="evp" class="ui radio checkbox"> 
                            <span>Candidate Number Three</span>
                            <br><br>
                            <input type="radio" name="evp" id="evp" class="ui radio checkbox"> 
                            <span>Candidate Number Four</span>
                            <br><br>
                            <input type="radio" name="evp" id="evp" class="ui radio checkbox"> 
                            <span>Candidate Number Five</span>
                            <br><br>
                            <h3 class="ui left floated header">
                                <a href="#">
                                    <div class="ui negative disabled button" tabindex="0">
                                        <div class="content">Remove</div>
                                    </div>
                                </a>
                            </h3>
                            <br><br>
                        
                        </ul>
                    </p>
                </div>

            <div class="title">
                    <i class="pencil big icon"></i>
                    <i class="dropdown icon"></i>
                    Secretary
            </div>
            <div class="content">
                    <p class="transition hidden">
                        <ul class="ui list">
                            <input type="radio" name="sec" id="sec" class="ui radio checkbox"> 
                            <span>Candidate Number One</span>
                            <br><br>
                            <input type="radio" name="sec" id="sec" class="ui radio checkbox"> 
                            <span>Candidate Number Two</span>
                            <br><br>
                            <input type="radio" name="sec" id="sec" class="ui radio checkbox"> 
                            <span>Candidate Number Three</span>
                            <br><br>
                            <input type="radio" name="sec" id="sec" class="ui radio checkbox"> 
                            <span>Candidate Number Four</span>
                            <br><br>
                            <input type="radio" name="sec" id="sec" class="ui radio checkbox"> 
                            <span>Candidate Number Five</span>
                            <br><br>
                            <h3 class="ui left floated header">
                                <a href="#">
                                    <div class="ui negative disabled button" tabindex="0">
                                        <div class="content">Remove</div>
                                    </div>
                                </a>
                            </h3>
                            <br><br>
                        
                        </ul>
                    </p>
                </div>

            <div class="title">
                    <i class="money bill alternate big icon"></i> 
                    <i class="dropdown icon"></i>
                    Treasurer
            </div>
            <div class="content">
                    <p class="transition hidden">
                        <ul class="ui list">
                            <input type="radio" name="tre" id="tre" class="ui radio checkbox"> 
                            <span>Candidate Number One</span>
                            <br><br>
                            <input type="radio" name="tre" id="tre" class="ui radio checkbox"> 
                            <span>Candidate Number Two</span>
                            <br><br>
                            <input type="radio" name="tre" id="tre" class="ui radio checkbox"> 
                            <span>Candidate Number Three</span>
                            <br><br>
                            <input type="radio" name="tre" id="tre" class="ui radio checkbox"> 
                            <span>Candidate Number Four</span>
                            <br><br>
                            <input type="radio" name="tre" id="tre" class="ui radio checkbox"> 
                            <span>Candidate Number Five</span>
                            <br><br>
                            <h3 class="ui left floated header">
                                <a href="#">
                                    <div class="ui negative disabled button" tabindex="0">
                                        <div class="content">Remove</div>
                                    </div>
                                </a>
                            </h3>
                            <br><br>
                        
                        </ul>
                    </p>
                </div>

            <div class="title">
                <i class="file alternate big icon"></i> 
                <i class="dropdown icon"></i>
                Auditor
            </div>
            <div class="content">
                <p class="transition hidden">
                    <ul class="ui list">
                        <input type="radio" name="aud" id="aud" class="ui radio checkbox"> 
                        <span>Candidate Number One</span>
                        <br><br>
                        <input type="radio" name="aud" id="aud" class="ui radio checkbox"> 
                        <span>Candidate Number Two</span>
                        <br><br>
                        <input type="radio" name="aud" id="aud" class="ui radio checkbox"> 
                        <span>Candidate Number Three</span>
                        <br><br>
                        <input type="radio" name="aud" id="aud" class="ui radio checkbox"> 
                        <span>Candidate Number Four</span>
                        <br><br>
                        <input type="radio" name="aud" id="aud" class="ui radio checkbox"> 
                        <span>Candidate Number Five</span>
                        <br><br>
                        <h3 class="ui left floated header">
                            <a href="#">
                                <div class="ui negative disabled button" tabindex="0">
                                    <div class="content">Remove</div>
                                </div>
                            </a>
                        </h3>
                        <br><br>
                    
                    </ul>
                </p>
            </div>
            
            <div class="title">
                    <i class="bullhorn big icon"></i> 
                    <i class="dropdown icon"></i>
                    Public Relations Officer
            </div>

            <div class="content">
                <p class="transition hidden">
                    <ul class="ui list">
                        <input type="radio" name="pro" id="pro" class="ui radio checkbox"> 
                        <span>Candidate Number One</span>
                        <br><br>
                        <input type="radio" name="pro" id="pro" class="ui radio checkbox"> 
                        <span>Candidate Number Two</span>
                        <br><br>
                        <input type="radio" name="pro" id="pro" class="ui radio checkbox"> 
                        <span>Candidate Number Three</span>
                        <br><br>
                        <input type="radio" name="pro" id="pro" class="ui radio checkbox"> 
                        <span>Candidate Number Four</span>
                        <br><br>
                        <input type="radio" name="pro" id="pro" class="ui radio checkbox"> 
                        <span>Candidate Number Five</span>
                        <br><br>
                        <h3 class="ui left floated header">
                            <a href="" >
                                <div class="ui negative button" tabindex="0" type="button" id="test">
                                    <div class="content">Remove</div>
                                </div>
                            </a>
                        </h3>
                        <br><br>
                    
                    </ul>
                </p>
            </div>
        </div>
        <br><br><br>
        <h3 class="ui right floated header">
            <a href="createPoll3.html">
                <div class="ui animated positive button" tabindex="0">
                    <div class="visible content">Next</div>
                    <div class="hidden content">
                    <i class="right arrow icon"></i>
                    </div>
                </div>
            </a>
        </h3>

        <h3 class="ui right floated header">
            <a href="createPoll.html">
                <div class="ui animated negative button" tabindex="0">
                    <div class="visible content">Previous</div>
                    <div class="hidden content">
                    <i class="left arrow icon"></i>
                    </div>
                </div>
            </a>
        </h3>
    </div><!--end of third column -->
</div><!--end of three column grid stackable container -->


    <div class="ui basic modal" id="#modal">
        <i class="close icon"></i>
        <div class="header">
            Hi there!
        </div>  
        <div class="content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>  
        <div class="actions">
            <div class="ui cancel negative button">Cancel</div>
            <div class="ui approve positive button">Approve</div>
            <div class="ui button">Approve</div>
        </div>
    </div>

    <div class="ui basic top fixed huge icon menu inverted">
        <a id="toggle" class="item">
            <i class="sidebar icon"></i>
            Menu
        </a>
    </div>

    <script>
        $('.ui.accordion').accordion();
        $('.ui.dropdown').dropdown();
    </script>

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

    <!-- <script>
    $('.ui.basic.modal')
    .modal('is active');
    </script> -->

    <script>
        $(function(){
            $("#test").click(function(){
                $(".test").modal('show');
            });
            $(".test").modal({
                closable: true
            });
        });
    </script>
    
    </body>

</html>
