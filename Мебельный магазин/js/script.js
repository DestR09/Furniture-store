function showItem(itemId) {
    const items = document.querySelectorAll('.car-item');
    items.forEach(item => {
        if (item.id === itemId) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

window.addEventListener("scroll", function () {
    var scrollToTopButton = document.getElementById("scrollToTopButton");

    if (window.pageYOffset > 300) {
        scrollToTopButton.classList.add("show");
    } else {
        scrollToTopButton.classList.remove("show");
    }
});

document.getElementById("scrollToTopButton").addEventListener("click", function (event) {
    event.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

const btns = document.querySelectorAll('.car-button');

btns.forEach(btn => {
    btn.addEventListener('click', () => {
        const mainBlock = btn.parentElement.parentElement;
        const name = mainBlock.querySelector('.car-item-title').textContent;
        const money = mainBlock.querySelector('.car-item-title1').textContent;
        const img = mainBlock.querySelector('img').src;
        const imgTitle = mainBlock.querySelector('.car-item-point img').src;
        const nameTitle = mainBlock.querySelector('.car-item-point div').textContent;

        const productId = btn.getAttribute('data-id'); // Получаем ID из data-атрибута

        const modal = document.querySelector('#modal-item');
        modal.innerHTML = `
            <div class="car-item" id="item${productId}">
                <div class="car-item-image">
                    <img src="${img}" alt="Image 15">
                </div>
                <div class="car-item-title">${name}</div>
                <div class="car-item-title1">${money}</div>
                <div class="car-item-info">
                    <div class="car-item-point">
                        <img src="${imgTitle}" alt="${nameTitle}">
                        <div>${nameTitle}</div>
                    </div>
                </div>
                <div class="car-item-action">
                    <button class="button buy-button" data-id="${productId}">Купить</button>
                </div>
            </div>
        `;

        showModal();
    });
});

// Обработчик нажатия на кнопку "Купить"
document.addEventListener('click', (e) => {
    if (e.target.classList.contains('buy-button')) {
        const productId = e.target.getAttribute('data-id');
        window.location.href = `product.php?id=${productId}`;
    }
});

function showModal() {
    const modal = document.getElementById('modal-el');
    modal.style.display = 'block';
}

function closeModal() {
    const modal = document.getElementById('modal-el');
    modal.style.display = 'none';
}

document.getElementById('modal-el').addEventListener('click', (e) => {
    if (e.target.classList.contains('modal-el')) {
        closeModal();
    }
});
