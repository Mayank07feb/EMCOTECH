document.addEventListener('DOMContentLoaded', function () {
    // Menu toggle
    document.getElementById('menu-toggle').addEventListener('click', function () {
      var menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });
  
    // FAQ toggle
    const questions = document.querySelectorAll('.question dt');
    questions.forEach(question => {
      question.addEventListener('click', function () {
        const target = document.querySelector(question.getAttribute('data-target'));
        if (target.classList.contains('hidden')) {
          target.classList.remove('hidden');
          target.classList.add('block');
          question.querySelector('i').classList.replace('fa-chevron-down', 'fa-chevron-up');
        } else {
          target.classList.remove('block');
          target.classList.add('hidden');
          question.querySelector('i').classList.replace('fa-chevron-up', 'fa-chevron-down');
        }
      });
    });
  
    // Swiper initialization
    var swiper = new Swiper('.swiper', {
      direction: 'horizontal',
      loop: true,
      speed: 400,
      spaceBetween: 100,
      autoplay: {
        delay: 2000,
      },
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
  
    // Filter buttons
    const filterButtons = document.querySelectorAll('.filter-btn');
    const images = document.querySelectorAll('.image-item');
    filterButtons.forEach(button => {
      button.addEventListener('click', function () {
        const filter = this.getAttribute('data-filter');
        images.forEach(image => {
          if (filter === 'all') {
            image.classList.remove('hidden');
          } else {
            if (image.classList.contains(filter)) {
              image.classList.remove('hidden');
            } else {
              image.classList.add('hidden');
            }
          }
        });
      });
    });
  });
  
  // Modal functionality
  function showModal(image) {
    const modal = document.getElementById('modal');
    const modalImage = document.getElementById('modal-image');
    modalImage.src = image.src;
    modal.classList.remove('hidden');
  }
  
  function closeModal() {
    const modal = document.getElementById('modal');
    modal.classList.add('hidden');
  }
  
  // faq

    document.addEventListener('alpine:init', () => {
      Alpine.store('accordion', {
        tab: 0
      });
      
      Alpine.data('accordion', (idx) => ({
        init() {
          this.idx = idx;
        },
        idx: -1,
        handleClick() {
          this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
        },
        handleRotate() {
          return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
        },
        handleToggle() {
          return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
        }
      }));
    })
