<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VSystem_01</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>

</head>

<body>
    <div>
        <div class="header-dark" style="color:white;">
            <div class="container hero">
     
 
                        <div>
                        <div class="ui grid stackable"> 
                              <div class="eight wide column " style="margin-top:100px;width:100%;background-color: rgb(61, 61, 61);color: #FFFFFF;">

                              <br><br>                     
                                  <div class="ui inverted big left icon input stackable fluid">
                                          <input id="password" type="password" placeholder="Password">
                                          <i class="lock icon"></i>
                                  </div>  

                              <br><br>

                                  <progress class="ui progress" max="100" value="0" id="strength"style="width:100%;;"></progress>

                              <br><br>
                                  <div class="ui inverted big left icon input stackable fluid">
                                          <input type="password" placeholder="Cofirm password">
                                          <i class="lock icon"></i>
                                  </div>
                              <br><br>
                             
                                                       
                             </div>
                             
   
                          </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    $('.ui.accordion').accordion();
    $('.ui.dropdown').dropdown();
    </script>
    <script type="text/javascript">
    var pass = document.getElementById("password")
    pass.addEventListener('keyup',function(){
        checkPassword(pass.value)
    })
    function checkPassword(password){
      var strengthBar = document.getElementById("strength")
      var strength = 0;
      if(password.match(/[a-zA-Z][a-zA-Z]+/)){
        strength += 1
      }
      if(password.match(/[~<>?!@#$%^&*()-_=+]/)){
        strength += 1
      }
      if(password.match(/[0-9]/)){
        strength += 1
      }
      if(password.length > 5){
        strength += 1
      }
      switch(strength){
        case 0: strengthBar.value = 0;
        break

        case 1: strengthBar.value = 40;
        break

        case 2: strengthBar.value = 50;
        break

        case 3: strengthBar.value = 80;
        break

        case 4: strengthBar.value = 100;
        break
      
      }
    }

    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>


</body>

</html>