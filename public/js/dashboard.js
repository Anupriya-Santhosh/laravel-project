// Select the sidebar, toggle button, and close button
const sidebar = document.getElementById('sidebar');
const toggleBtn = document.getElementById('toggle-btn');
const closeBtn = document.getElementById('close-btn');

// Add event listener to toggle button
toggleBtn.addEventListener('click', () => {
    sidebar.classList.add('visible');
});

// Add event listener to close button
closeBtn.addEventListener('click', () => {
    sidebar.classList.remove('visible');
});
