// Get the theme switcher element
var themeSwitcher = document.getElementById('theme-switcher');

// Check if a theme was previously selected
if (localStorage.getItem('theme')) {
    // Apply the saved theme
    document.body.className = localStorage.getItem('theme');
    // Set the switch's state
    themeSwitcher.checked = (localStorage.getItem('theme') === 'theme-dark');
}

// Add an event listener to the theme switcher
themeSwitcher.addEventListener('change', function() {
    // Switch the theme and save the new theme to localStorage
    if (this.checked) {
        document.body.className = 'theme-dark';
        localStorage.setItem('theme', 'theme-dark');
    } else {
        document.body.className = 'theme-light';
        localStorage.setItem('theme', 'theme-light');
    }
});

