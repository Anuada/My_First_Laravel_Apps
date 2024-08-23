function adjustHeadingSize() {
    const heading = document.getElementById('responsive-heading');
    if (heading) {
        const screenWidth = window.innerWidth;

        if (screenWidth > 1200) {
            heading.style.fontSize = '48px'; // Large screens
        } else if (screenWidth > 768) {
            heading.style.fontSize = '36px'; // Medium screens
        } else if (screenWidth > 480) {
            heading.style.fontSize = '24px'; // Small screens
        } else {
            heading.style.fontSize = '18px'; // Extra small screens
        }
    }
}

// Initial adjustment
adjustHeadingSize();

// Adjust heading size whenever the window is resized
window.addEventListener('resize', adjustHeadingSize);