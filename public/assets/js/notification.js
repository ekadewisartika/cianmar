function showNotification() {
    const notification = document.getElementById('notification');
    notification.classList.remove('hidden'); // Show notification
    setTimeout(() => {
        notification.classList.add('hidden'); // Hide after 5 seconds
    }, 5000);
}

// Call the function to show the notification
showNotification();
