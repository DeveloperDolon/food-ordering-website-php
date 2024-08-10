
const editBtn = document.querySelector('.edit-usr-btn');
const modal = document.querySelector('.modal');

editBtn.addEventListener('click', (e) => {
    modal.classList.remove("close");
    modal.classList.add("open");
});

document.querySelector(".modal-content").addEventListener('click', (e) => {
    e.stopPropagation();
});

modal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.remove("open");
    modal.classList.add("close");
});