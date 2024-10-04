document.addEventListener('DOMContentLoaded', () => {
    // Fake Instagram Feed
    const instagramGallery = document.getElementById('instagram-gallery');
    for (let i = 0; i < 6; i++) {
        let post = document.createElement('div');
        post.classList.add('instagram-post');
        post.style.backgroundImage = `url('https://source.unsplash.com/random/150x150?sig=${i}')`;
        instagramGallery.appendChild(post);
    }

    // Initialize Google Map (replace with real map if you have API key)
    const mapElement = document.getElementById('map');
    const map = new google.maps.Map(mapElement, {
        center: { lat: -6.200000, lng: 106.816666 },
        zoom: 15,
    });
});
