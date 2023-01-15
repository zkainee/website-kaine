let darkToggle = document.querySelector('#toggleDarkmode');

    darkToggle.addEventListener('change', ()=> {
    document.body.classList.toggle('dark');
})