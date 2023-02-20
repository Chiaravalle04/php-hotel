const butFilter = document.getElementById('filter');

const formFilter = document.getElementById('filter-form');

formFilter.classList.add('d-none');

butFilter.addEventListener('click', 

    () => {

        formFilter.classList.remove('d-none');
        formFilter.classList.add('d-block');

    }
    
)