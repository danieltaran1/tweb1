const track = document.getElementById('cases-track');
    const items = track.children;
    const itemWidth = 220; // approximate width of each case card in px
    let current = 0;

    setInterval(() => {
        current = (current + 1) % items.length;
        track.style.transform = `translateX(-${current * itemWidth}px)`;
}, 2000);

