document.addEventListener('DOMContentLoaded', function () {
  const carousel = new bootstrap.Carousel(document.querySelector('#carouselExampleControls'), {
    interval: 3000
  });

  document.querySelector('.carousel-control-prev').addEventListener('click', function () {
    carousel.prev();
  });

  document.querySelector('.carousel-control-next').addEventListener('click', function () {
    carousel.next();
  });
});