var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
  loop: true,
  delay: 75,
});

typewriter
  .pauseFor(2500)
  .typeString('Puedes visualizar toda la información ')
  .pauseFor(300)
  .deleteChars(12)
  .typeString('<strong>Two Sister</strong> tiene elmejor Bitcoin')
  .typeString('<strong>only <span style="color: #27ae60;">5kb</span> Gzipped!</strong>')
  .pauseFor(1000)
  .start();