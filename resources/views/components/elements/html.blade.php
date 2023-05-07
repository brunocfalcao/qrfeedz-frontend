<!DOCTYPE html>
<html lang="en">
{{ $slot }}

<script>
    function adjustViewportHeight() {
      const vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);
    }

    document.addEventListener('DOMContentLoaded', () => {
      adjustViewportHeight();
      window.addEventListener('resize', adjustViewportHeight);

      if ('standalone' in window.navigator && window.navigator.standalone) {
        const metaViewport = document.querySelector('meta[name="viewport"]');
        metaViewport.setAttribute('content', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no');
      }
    });
</script>
</html>
