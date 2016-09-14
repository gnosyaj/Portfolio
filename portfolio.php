<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
  #me {
    border-radius: 50%;
  }
  #facebook {
    border-radius: 50%;
    width: 50px;
    height: 50px;
  }  
  #linkedin {
    border-radius: 50%;
    width: 50px;
    height: 50px;
  }
  .jumbotron {
    padding:100px 0px;
    margin: 0px 185px 0px 185px;
  }
  #github-button {
    border-radius: 50%;
    width:50px;
    height:50px;
  }
  #section2 {
    padding:100px 0px;
    margin: 0px 200px 0px 200px;
  }
  #section3 {
    padding:100px 0px;
    margin: 0px 200px 0px 200px;
  }
  #img1 {
    width:500px;
  }
  #img2 {
    width:500px;
    height:240px;
  }
  #img3 {
    width:500px;
    height:240px;
  }
  #img4 {
    width:500px;
    height:240px;
  }
  #img5 {
    width:500px;
    height:240px;
  }
  #img6 {
    width:500px;
    height:240px;
  }
</style>

<!-- Scroll Area -->
<body data-spy="scroll" data-target=".navbar" data-offset="50">
 
<!-- Navigation Bar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    
    <ul class="nav navbar-nav">
      <li><a href="#section1">Jay Song</a>
        </li>
      <li><a href="#section2">Portfolio</a>
        </li>
      <li><a href="#section3">Contact</a>
        </li>
  </nav>
    
<div class="container-fluid">
<!-- About me-->
   
    <div class="container-fluid jumbotron" id="section1">
        <h1>About Me</h1>
      <div class="col-xs-9">
        <p>Well, I am new to the coding world.  But I am definitely more than excited.  I find all of this programming business fascinating because we're given the tools to create.  Now that is the kind of freedom I was looking for.  It did take some time for me to enter this world.  But I finally found what I was looking for! Let's begin.
        </p>
      </div>
      <div class="col-xs-3">
      <img class="img-responsive" src="https://res.cloudinary.com/dvnpariof/image/upload/v1470496297/12936657_1089804404416345_5148942723251757505_n_zrkauk.jpg" alt="me" style="width:220px;height:220px" id="me">
      </div>
    </div>
  </div>
<!--Portfolio-->
  <div class="container-fluid well" id="section2">
    <h1 align="center">Portfolio</h1>
      <h1></h1>
      <div class="row">
        <div class="col-xs-6">
          <img src="http://res.cloudinary.com/dvnpariof/image/upload/v1470497006/westway_ykorpg.png" class="img-thumbnail" alt=westway id="img1">
        </div>
        <div class="col-xs-6">
        <img src="#" class="img-thumbnail" alt="in progress" id="img2">
    </div>
      </div>
    <h1></h1>
      <div class="row">
        <div class="col-xs-6">
        <img src="#" class="img-thumbnail" alt="in progress" id="img3">
        </div>
        <div class="col-xs-6">
        <img src="#" class="img-thumbnail" alt="in progress" id="img4">
        </div>
      </div>
    <h1></h1>
      <div class="row">
        <div class="col-xs-6">
        <img src="#" class="img-thumbnail" alt="in progress" id="img5">
        </div>
        <div class="col-xs-6">
        <img src="#" class="img-thumbnail" alt="in progress" id="img6">
        </div>
    </div>
  </div>
    
<!--Contact-->
  <div class="container-fluid well" id="section3">
    <h1 align="center">Contact</h1>
    
    <form role="form" action="http://localhost/myfiles/form_input.php" method="post">
      <div class="row">
        <div class="col-xs-6">
          <input class="form-control" type="text" placeholder="Name" name="name"></input>
          <input class="form-control" type="text" placeholder="Email Address" name="email"></input>
          <input class="form-control" type="text" placeholder="Phone Number" name="phonenumber"></input>
          <textarea class="form-control" rows="5" placeholder="Message" name="message"></textarea>
        </div>
        <div class="col-xs-6">
          <p>If you would like to speak with me in person or leave a message feel free to leave your name and contact information and I'll get back to you as soon as possible.
          </p>
        </div>
      </div>
        <h1></h1>
        <button class="btn btn-default" type="submit">SEND</button>
    </form>
   </div>   

<!--Closing Banner-->
<div class="container-fluid well">

  <div class="row">
    <div class="col-xs-6 text-center">
      <p>created and designed by Jay Song</p>
    </div>
 
     <!--Social Media Buttons-->
    <div class="col-xs-6 btn-group">
      <div style="display:inline-block;"class="facebook-link">
        <button class="btn btn-default" id="facebook"> 
          <a href="https://www.facebook.com/profile.php?id=100001603869331">
            <img class="img-responsive" src="http://www.bianoti.com/wp-content/uploads/20150401_551c016a7f172.png" alt="facebook-image"></img>
      </a>
    </button>
    </div>
      <div style="display:inline-block;" class="linkedin-link">
    <button style="display:inline-block;" class="btn btn-default" id="linkedin">
      <a href="https://www.linkedin.com/in/jaycsong">
        <img class="img-responsive" src="http://findicons.com/files/icons/2779/simple_icons/4096/linkedin_4096_black.png" alt="linkedin"></img>
      </a>
    </button>    
  </div>
      <div style="display:inline-block;" class="github-link">
        <button class="btn btn-default" id="github-button">
        <a href="https://github.com/gnosyaj">
      <img class="github-image img-responsive" src="data:image/png;base64,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" alt="githubimage"></img>
    </a>
        </button>
      </div>
    </div>

  </div>
    
</div>

</body>
</html>