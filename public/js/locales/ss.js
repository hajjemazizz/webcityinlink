// Ajouter ce script dans votre fichier JavaScript principal, par exemple: scripts.js
document.getElementById('theme-toggle').addEventListener('click', function() {
    const currentTheme = document.body.dataset.theme;
    if (currentTheme === 'dark') {
        document.body.dataset.theme = 'light';
        localStorage.setItem('theme', 'light');
    } else {
        document.body.dataset.theme = 'dark';
        localStorage.setItem('theme', 'dark');
    }
});

// Appliquer le thème sauvegardé ou par défaut au chargement de la page
document.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    document.body.dataset.theme = savedTheme;
});
function toggleDarkMode() {
    const body = document.body;
    const isDark = body.classList.toggle("dark-mode"); // Bascule la classe sur <body>
    localStorage.setItem('theme', isDark ? 'dark' : 'light'); // Sauvegarde le thème dans localStorage
}

// Assurez-vous que le thème correct est chargé à partir de localStorage au chargement de la page
document.addEventListener('DOMContentLoaded', () => {
    const currentTheme = localStorage.getItem('theme') || 'light'; // Défaut à light si non défini
    document.body.classList.toggle('dark-mode', currentTheme === 'dark');
});
