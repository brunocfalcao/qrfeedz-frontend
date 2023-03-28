<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>My Mobile-Friendly Template</title>
  <style>
    /* Styles to hide the footer and navigation bars */
    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    
    /* Use the safe area insets if the user is using a standalone web app on iOS */
    @supports (-webkit-touch-callout: none) {
      @media (display-mode: standalone) {
        body {
          --safe-area-inset-bottom: constant(safe-area-inset-bottom);
          --safe-area-inset-bottom: env(safe-area-inset-bottom);
          padding-bottom: var(--safe-area-inset-bottom);
        }
      }
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.5/platform.min.js"></script>
  <script>
    $(function() {
      // Detect the device type using Platform.js
      var device = platform.os.family;
      
      // If the device is an iOS device, try to hide the navigation bar
      if (device === 'iOS') {
        var hideNavbar = function() {
          document.body.style.height = window.innerHeight + 'px';
          setTimeout(function() {
            window.scrollTo(0, 1);
          }, 100);
        };
        
        hideNavbar();
        $(window).on('orientationchange resize', hideNavbar);
        
        // If the user is using a standalone web app on iOS, set the safe area insets
        if (window.navigator.standalone === true) {
          document.documentElement.style.setProperty('--safe-area-inset-bottom', 'env(safe-area-inset-bottom)');
        }
      }
      
      // If the device is an Android device, try to hide the navigation and status bars
      if (device === 'Android') {
        var hideNavigation = function() {
          var root = document.documentElement;
          root.style.setProperty('--vh', window.innerHeight / 100 + 'px');
        };
        
        hideNavigation();
        $(window).on('resize', hideNavigation);
      }
    });
  </script>
</head>
<body>
  <!-- Your content goes here -->
  
  <!-- Scripts or external JS libraries can be included here -->
</body>
</html>
