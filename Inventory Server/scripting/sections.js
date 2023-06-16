const navButtons = document.querySelectorAll('.nav-item');
const sections = document.querySelectorAll('.section');

navButtons.forEach(button => {
  button.addEventListener('click', () => {
    const target = button.dataset.target;
    sections.forEach(section => {
      if (section.id === target) {
        section.classList.add('active');
      } else {
        section.classList.remove('active');
      }
    });
  });
});
