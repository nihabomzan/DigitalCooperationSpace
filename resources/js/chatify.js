document.addEventListener('DOMContentLoaded', () => {
    // When a user is clicked
    document.querySelectorAll('.user-item').forEach(item => {
        item.addEventListener('click', function () {
            const userId = this.dataset.id;
            loadChat(userId);
        });
    });
});

function loadChat(userId) {
    fetch(`/chatify/get-messages/${userId}`, {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.querySelector('.messages-container').innerHTML = data.messages;
            } else {
                alert('Unable to load messages.');
            }
        })
        .catch(error => console.error('Error:', error));
}
