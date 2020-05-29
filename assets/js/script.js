window.onload = () => {

    $('.nav-link').each(function (index, element) {
        element.href == window.location
            ? $('.nav-item')[index].classList.add('active')
            : $('.nav-item')[index].classList.remove('active');
    });

};