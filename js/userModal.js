
const editBtn = document.querySelector('.edit-usr-btn');
const modal = document.querySelector('.modal');

editBtn.addEventListener('click', (e) => {
    console.log(e);
});


document.querySelector(".modal-content").addEventListener('click', (e) => {
    e.stopPropagation();
});

modal.addEventListener('click', (e) => {
    e.preventDefault();
    

    
});