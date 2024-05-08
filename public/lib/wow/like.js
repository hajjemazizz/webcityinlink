function likePharmacie(id) {
    fetch('/' + id + '/like', { method: 'POST' })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
            throw new Error('Network response was not ok');
        }
    })
    .then(data => {
        document.getElementById('likes-count-' + id).innerText = data.likesCount;
    })
    .catch(error => console.error('Error:', error));
}

function dislikePharmacie(id) {
    fetch('/' + id + '/dislike', { method: 'POST' })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
            throw new Error('Network response was not ok');
        }
    })
    .then(data => {
        document.getElementById('dislikes-count-' + id).innerText = data.dislikesCount;
    })
    .catch(error => console.error('Error:', error));
}
