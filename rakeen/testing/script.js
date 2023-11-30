document.addEventListener('DOMContentLoaded', function () {
    const showPopupBtn = document.getElementById('showPopupBtn');
    const closePopupBtn = document.getElementById('closePopupBtn');
    const myPopup = document.getElementById('myPopup');
    const overlay = document.getElementById('overlay');

    showPopupBtn.addEventListener('click', function () {
        myPopup.style.display = 'block';
        overlay.style.display = 'block';
    });

    closePopupBtn.addEventListener('click', function () {
        myPopup.style.display = 'none';
        overlay.style.display = 'none';
    });

    overlay.addEventListener('click', function () {
        myPopup.style.display = 'none';
        overlay.style.display = 'none';
    });
});