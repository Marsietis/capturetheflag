import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Button used to print the leaderboard
document.getElementById('printButton').addEventListener('click', function() {
    window.print();
});
