<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Glipple - We're still warming up</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

	<!-- Include AngularJS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
	
	<!-- AJAX script -->
	<script src="script.js"></script>

  </head>

  <body ng-app="mainModule">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Glipple</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li ng-class="{active: !contentHome}"><a ng-click="contentHome = false; contentAbout = false; contentContact = false" href="#">Home</a></li>
				<li ng-class="{active: contentAbout}"><a ng-click="contentAbout = true; contentHome = true; contentContact = false" href="#about">About</a></li>
				<li ng-class="{active: contentContact}"><a ng-click="contentContact = true; contentHome = true; contentAbout = false" href="#contact">Contact</a></li>
			</ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

		<div class="content" >
			<div ng-controller="emailController" ng-show="!contentHome">
				<h1>Glipple isn't ready yet!</h1>
				<h3>Enter your email and we'll get back to you as soon as we're ready.</h3>
				<br />
				<form name="email" ng-submit="submitData(data, 'result')" novalidate>
					<input id="email" type="text" name="email" placeholder="your email..." ng-model="data.email" required /><br />
					<button style="margin:5px" type="submit" ng-disabled="email.$invalid">Sign up!</button>
				</form>
				<br />
				<div class="alert alert-success" ng-cloak ng-if="result == true">Successfully signed up!</div>
				<div class="alert alert-danger" ng-cloak ng-if="result == false">Failed to sign up!</div>
			</div>
			
			<div class="about" ng-cloak ng-show="contentAbout">
				<h1>Music Is Freedom</h1>

				<p>Welcome! Glipple is the culmination of years I’ve spent in the music industry, as an artist, a journalist, a DJ, and now, an entrepreneur. The most exciting thing about Glipple for me is that it’s exactly the kind of thing I would have killed for during my blogging or DJ days; a site that’s full of amazing, independent artists from around the world, where access to music is limited only by your imagination and energy level!</p>
				<p>No more walled-garden dynamics to act as barriers for these incredible artists and the rabid fans who love them; we wanted to create something that was so pure—so much about freedom and the love of music—that we decided that anyone with an internet connection was welcome. No usernames or passwords required, and free access to streaming, downloading, and radio functionality—and all of it completely legal!</p>
				<p>Though we’re currently in beta (I promise things will get a lot prettier in the near future!), we’re working hard on an interesting algorithm that will set us far apart from what people are used to dealing with when they use music services. Suffice it to say that the old, “only 6 skips per month,” playlist-oriented radio function doesn’t do it for us; we’re working on something that will give artists and their fans more power than they’ve ever had before. The more interaction an artist drives to their music through their own marketing—on Facebook, Twitter, YouTube—the more their music will be rotated in the radio stream. It’s a real radio dynamic, and one that artists and their fans can effectively control. We’re building the steering wheel and taking our hands off—you drive.</p>
				<p>The digital age has been scary for the music industry thus far, but it need not be any longer. While other services are busy trying to conform to an obsolete business model that undercuts artists and frustrates all of those involved, we decided to do something different. We got rid of royalties altogether; they never amounted to anything in anyone’s pocket anyway (for independent artists especially), and only cause headaches as an obsolete method of business. We’re filling the void with a power dynamic that lies with the artists and with their fans; something that independent artists can realistically use as a tool.</p>
				<p>This is  for all the music addicts out there who can never get enough; all the people—the bloggers, the college DJs, the garage bands, the music lovers—who have a visceral need to know the next great artist on the horizon. Here’s your free access.</p>
				<p>And to those artists out there dying for a chance to find a fanbase: here’s your chance. You now have more control than you’ve ever had—use it.</p>
				<p>And that’s it. It’s as simple as that. Music is freedom, and now it’s free.</p>

				<h3 style="font-weight:bold">Keep rockin!</h3>

				<p style="padding-left:300px"> —Adam Marx,  Cofounder & CEO</p>
			</div>
		
			<div class="contact" ng-cloak ng-show="contentContact">
				<h3>The cofounders:</h3>
				<p class='email'><a href="mailto:amarx@glipple.com">Adam Marx</a> - Chief Executive Officer</p>
				<p class='email'><a href="mailto:myles@glipple.com">Myles Shannon</a> - Chief Technology Officer</p>
				<p class='email'><a href="mailto:mshem@glipple.com">Michael Shemesh</a> - Chief Information Officer</p>
				<p class='email'><a href="mailto:smarx@glipple.com">Shelley Marx</a> - Chief Content Officer</p>
			</div>
		</div>
		  
		
		
		

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
