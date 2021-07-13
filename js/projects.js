(function () 
{
    const openNavBtn = document.getElementById('openNav'),
            closeNavBtn = document.getElementById('closeNav'),
            movingNavHeight = document.getElementById('movingNav');


        openNavBtn.addEventListener('click', openNav = () => {
            movingNavHeight.style.height = "100%";
        }, true);

        closeNavBtn.addEventListener('click', closeNav = () => {
            movingNavHeight.style.height = "0";
        }, true);
})();