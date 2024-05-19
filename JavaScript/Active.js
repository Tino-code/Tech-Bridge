const hamburgerMenu = document.querySelector('.hamburger-menu');
const navigationMenu = document.querySelector('nav ul');
const body=document.querySelector('main');
const footer=document.querySelector('footer');
const cTab=document.getElementById('cTabs');
const pTab=document.getElementById('pTabs');
const past=document.getElementById('Past');
const Current=document.getElementById('current');


hamburgerMenu.addEventListener('click', () => {
  navigationMenu.classList.toggle('show');
  body.style.display='none';
  footer.style.display='none';
    
});

cTab.addEventListener('click', () => {
  cTab.className='cTabs';
  Current.style.display='flex';
  past.style.display='none';
  pTab.className='aTabs';
});

pTab.addEventListener('click', () => {
  pTab.className='cTabs';
  Current.style.display='none';
  past.style.display='flex';
  cTab.className='aTabs';
});




