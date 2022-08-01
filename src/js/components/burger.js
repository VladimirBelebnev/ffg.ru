const burger = () => {
    const burger = document.querySelector('.burger'),
          mobileMenu = document.querySelector('.mobile');

    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('hidden');
        // mobileMenu.classList.toggle('animate__animated');
        // mobileMenu.classList.toggle('animate__fadeInDown');
    });
};

burger();