<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>demo site for an angularjs simple website</title>
    <meta name="description" content="">

    <!-- twitter bootstrap and additional styles -->
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/main.css">

    <!-- navigation configuration (the list of links) -->
    <script type='text/javascript'>
        // Define the paths, the partials (page templates) and the link names.
        var Pages = {
            '/':        ['main.html',    'Home'],
            '/about':   ['about.html',   'About'],
            '/contact': ['contact.html', 'Contact Us'],
        };
    </script>

</head>
<body ng-app="angularjsSimpleWebsiteApp" class='container'>

<!-- header -->
<!-- uses NavigationLinks as a controller -->
<div class="header" title='comes from index.html'>
    <ul class="nav nav-pills pull-right"
        ng-controller='NavigationLinks'>
        <!-- this is empty at start, but nav.js will create
             items in this list later. -->
    </ul>
    <h3 class="text-muted">Project name</h3>
</div>

<!-- Your site or application content will appear here -->
<div ng-view="">

    <p title='comes from index.html' >This paragraph will be replaced
        by the content of one of the view/ files as soon as the angular
        app is initialized.</p>

    <p>If you read this text in the rendered page, this most probably
        means the angular app did not start successfully.</p>

    <p>It may be a good idea to remove all this text and put a spinner
        image here.</p>

</div>

<div class="footer" title='comes from index.html'>
    <p>the common footer
        - <a href='https://github.com/kurmanka/angularjs-routing-demo/'>github</a>
    </p>
</div>


<script src="bower_components/jquery/jquery.js"></script>

<!-- nav.js is needed to generate link items in the ul.nav
     at the page header. -->
<script src="scripts/nav.js"></script>

<!-- the angular core and the ngRoute module -->
<script src="bower_components/angular/angular.js"></script>
<script src="bower_components/angular-route/angular-route.js"></script>

<!-- the main angular app code -->
<script src="scripts/app.js"></script>

</body>
</html>
