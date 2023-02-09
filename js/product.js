function setPlusMinusBtnsOnQuantity() {
    const quantity = document.querySelector('input.qty');
    if (!quantity) { return };
    // console.log(quantity);
    const parent = quantity.parentNode;
    // console.log(parent);
    const plusBtn = document.createElement('BUTTON');
    plusBtn.classList.add('plus');
    const minusBtn = document.createElement('BUTTON');
    minusBtn.classList.add('minus');
    parent.insertBefore(plusBtn, quantity);
    parent.insertBefore(minusBtn, quantity);

    minusBtn.addEventListener("click", function(event) {
        // console.log('minus', quantity);
        if (parseInt(quantity.value) > 0) {
            quantity.value = parseInt(quantity.value) - 1;
        }
        event.preventDefault();
    }, false);
    plusBtn.addEventListener("click", function(event) {
        // console.log('plus');
        quantity.value = parseInt(quantity.value) + 1;
        event.preventDefault();
    }, false);
}

document.addEventListener("DOMContentLoaded", function(event) { 
    setPlusMinusBtnsOnQuantity();
});

