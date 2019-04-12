  <!DOCTYPE html> 

<title>Woodland Ag.</title>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="Seed,Food Plot, Agriculture, Services, crepa, whipa, herbicide spray, hydro seeding">
    <meta name="author" content="Doug Carnahan">
    
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link rel="stylesheet" href="main.css">  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

  
    </head>
    
    
<nav>
    
      
     <div class="nav-wrapper light-blue accent-4">
         
<!--Mobile Navigation-->         
      <a href="#" data-activates="mobile-demo" class="waves-effect right button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
        <ul id="mobile-demo" class="side-nav">
          <li><a href="about.html">About</a></li>
          <li><a href="foodplot.html">Food Plot Seed</a></li>
          <li><a href="nativeseed.html">Native Grass Seed</a></li>
          <li><a href="fertilizer.html">Fertilizer</a></li>
          <li><a href="spraying.html">Custom Spraying</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      
                  <a href="index.html"><div class="brand-logo" id="logo"></div></a>

         
<!--Web Navigation-->
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      
    
        <li class="waves-effect flow-text" id="about"><a href="about.html">About</a></li>
        <li class="waves-effect flow-text" id="seed"><a href="foodplot.html">Food Plot Seed</a></li>
        <li class="waves-effect flow-text" id="nativeseed"><a href="nativeseed.html">Native Grass Seed</a></li>
        <li class="waves-effect flow-text" id="fertilizer"><a href="fertilizer.html">Fertilizer</a></li>
        <li class="waves-effect flow-text" id="spray"><a href="spraying.html">Custom Spraying</a></li>
        <li class="waves-effect flow-text" id="services"><a href="services.html">Services</a></li>
        <li class="waves-effect flow-text" id="contact"><a href="contact.html">Contact</a></li>
      </ul>
    </div>
    
    
    
    
    </nav>
    
    
    <body>
        
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script> 
   <script type="text/javascript" src="woodag.js"></script>    
        
         <!-- Email Form -->
       
  
      <p>Were happy to help!</p>
         <div class="row">
    <form name="contactform" method="post" action="send_form_email.php" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input name="name" type="text" class="validate">
          <label for="name">Full Name</label>
        </div>
        <div class="input-field col s6">
          <input name="phone" type="text" class="validate">
          <label for="phone">Phone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="visitor_email" type="text" class="validate">
          <label for="visitor_email">Email</label>
        </div>
      </div>
    
  </div>
        <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea" name="content"></textarea>
          <label for="icon_prefix2">Message</label>
        </div>
      </div>
        <div name="error"></div>
    </form>
  </div>
    
      
    
        <button class="btn-floating btn-medium right" name="submit" onclick="document.forms.contactform.submit()"><i class="small material-icons">send</i></button>
   
  </div>
      </form>

   
    
    
    <footer id="footer">
     <div class="footer-copyright">
            <div class="container">
                <div class="white-text">
                    
                    <div id="footertext">
            © 2016 Woodland Agricultural Services LLC.
                    </div>
                    <div id="footertext">(814)-594-2966</div>
                    <div id="footertext">405 Monroe Ave.</div>
                    <div id="footertext"> Ridgway, PA 15853</div>
                    <div class="container">
                    <div id="social-icons">
                <img src="img/twitter42.png">
                <a href="https://www.facebook.com/Woodland-Agricultural-Food-Plot-Services-llc-785497934832449/?fref=ts">
                <img src="img/facebook42.png">
                            </a>
                
                   </div>
                    </div>
                </div>
            </div>
     </div>
    </footer>
     </body>
    
</html>