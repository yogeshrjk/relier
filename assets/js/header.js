/* Set the width of the sidebar to 250px (show it) */
// Create a media condition that targets viewports at least 768px wide
const mediaQuery = window.matchMedia('(max-width: 768px)')

// Check if the media query is true
if (mediaQuery.matches) {
    function openNav() {
        document.getElementById("mySidepanel").style.width = "100%";
    }
} else {
    function openNav() {
        document.getElementById("mySidepanel").style.width = "30vh";
    }
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
    document.getElementById("mySidepanel").style.width = "0vh";
}