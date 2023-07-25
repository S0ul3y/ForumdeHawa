
  const toggleButton = document.querySelector('.menu');
  const NavMenu = document.getElementById('navM');
  const Toogle = document.getElementById('toogle');
  const Retour = document.getElementById('retour');

  toggleButton.addEventListener('click', function() {
    // Vérifiez si le menu est actuellement caché
    if (NavMenu.classList.contains('cacher')) {
      // Afficher le menu en retirant la classe "hidden"
      NavMenu.classList.remove('cacher');
      Toogle.style.display = 'none';
      Retour.style.display = 'block';
    } else {
      // Cacher le menu en ajoutant la classe "hidden"
      NavMenu.classList.add('cacher');
      Toogle.style.display = 'block';
      Retour.style.display = 'none';
    }
  });






