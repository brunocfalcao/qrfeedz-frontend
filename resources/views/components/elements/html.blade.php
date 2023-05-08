<!DOCTYPE html>
<html lang="en">
{{ $slot }}

<script>
    // Function to adjust the viewport height based on the visible area
    function adjustViewportHeight() {
        // Calculate 1% of the visible viewport height
        const vh = window.innerHeight * 0.01;
        // Set the '--vh' CSS custom property to the calculated value
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    }

    // Function to check if the current device is a mobile device
    function isMobileDevice() {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }

    // Lock screen orientation for mobile devices
    function lockScreenOrientation() {
        if (isMobileDevice() && 'orientation' in screen && 'lock' in screen.orientation) {
            // Check if the page is served over a secure connection (HTTPS)
            if (window.location.protocol === 'https:') {
                screen.orientation.lock('portrait')
                    .catch((error) => {
                        console.error('Failed to lock screen orientation:', error.message);
                    });
            } else {
                console.warn('Screen orientation lock is only available over a secure connection (HTTPS).');
            }
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        // Call the adjustViewportHeight function when the DOM is fully loaded
        adjustViewportHeight();
        // Add a 'resize' event listener to adjust the viewport height when the window size changes
        window.addEventListener('resize', adjustViewportHeight);

        // Check if the app is running in standalone mode (full-screen)
        if ('standalone' in window.navigator && window.navigator.standalone) {
            // If so, update the viewport meta tag to disable user scaling
            const metaViewport = document.querySelector('meta[name="viewport"]');
            metaViewport.setAttribute('content', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no');
        }

        // Lock the screen orientation to portrait mode on mobile devices
        lockScreenOrientation();
    });
</script>
</html>
