const search = () => {
    const searchBtn = document.querySelector('.entry__search'),
          searchInput = document.querySelector('.entry__input');

    searchBtn.addEventListener('click', () => {
        if (searchInput.classList.contains('hidden')) {
            searchInput.classList.remove('hidden');
        } else {
            searchInput.classList.add('hidden');
        }
    });
};

search();