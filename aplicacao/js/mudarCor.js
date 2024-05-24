document.addEventListener('DOMContentLoaded', () => {
    const labels = document.querySelectorAll('#chekMes .label');

    labels.forEach(label => {
        label.addEventListener('click', () => {
            label.classList.add('newColor');
        });
    });
});
