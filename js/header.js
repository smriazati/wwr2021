function initHeaderSearchForm() {
    const buttonToggleClass = 'form-open';
    const formHiddenClass = 'hide-form';
    const wrapper = document.getElementById('headerSearchForm');
    if (!wrapper) { return }

    const toggleVisibleBtn = wrapper.querySelector('button.open-form')
    if (!toggleVisibleBtn) { return }
    // toggleVisibleBtn.classList.toggle(buttonToggleClass);

    const form = wrapper.querySelector('form')
    if (!form) { return }
    // form.style.display = 'none';
    form.classList.add(formHiddenClass)
    
    toggleVisibleBtn.addEventListener('click', () => {
        toggleVisibleBtn.classList.toggle(buttonToggleClass);
        form.classList.toggle(formHiddenClass);
        if (!form.classList.contains('hide-form')) {
            console.log('adding')
            form.classList.add('show-form');
        }
        // form.style.display = 'flex';
        
        const input = document.getElementById('s');
        if (input) {
            input.focus();
        }
    })
}



document.addEventListener("DOMContentLoaded", function(event) {
    initHeaderSearchForm();
});