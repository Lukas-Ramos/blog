const windowWidth = window.screen.width
const windowHeight = window.screen.height

for (let i = 0; i < 100; i++) {
  const start = document.createElement('div');

  start.className = 'start';
  
  start.style.top = Math.floor(Math.random() * windowHeight) + 'px';
  start.style.left = Math.floor(Math.random() * windowWidth) + 'px';
  
  document.body.appendChild(start);
}