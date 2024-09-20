$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        loop: true,
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[767,1],
        pagination:false,
        transitionStyle:"fade",
        navigation:true,
        navigationText:["",""],
        autoPlay:true,
        smartSpeed:1000, //Время движения слайда
        autoplayTimeout:2000, //Время смены слайда
    });
    let url = window.location.pathname;
    if (url==='/about') {
        $("#nav-link-about").addClass("text-success");
    }
    else if (url==='/portfolio'){
        $("#nav-link-portfolio").addClass("text-success");
    }
    else if (url==='/contact'){
        $("#nav-link-contact").addClass("text-success");
    }
    console.log($('#type').val());
    $('#happy-group').hide(1000);
});
$('#type').change(function () {
    if ($('#type').val()=="День рождения"){
        $('#happy-group').show(1000);
    }
    else if ($('#type').val()!="День рождения"){
        $('#happy-group').hide(1000);
        $('#happy').val('');
    }
});
function onEntry(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('element-show');
        }
    });
}
let options = { threshold: [0.5] };
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.element-animation');
for (let elm of elements) {
    observer.observe(elm);
}

$('#modal_update_record').on('show.bs.modal', function (event) {
    // получить кнопку, которая его открыло
    let button = $(event.relatedTarget);
    // извлечь информацию из атрибута data-content
    let content = button.data('content');
    let id = content.id;
    let old_fio = content.fio;
    let old_date = content.date;
    let old_phone = content.phone;
    let old_count = content.count;
    let old_type = content.type;
    let old_happy = content.happy;
    let old_description = content.description;
    $('#happy-group').hide(1000);
    if (content.happy == null){
        $(this).find('#happy-group').hide();
    }
    else if (content.happy != null){
        $(this).find('#happy-group').show();
    };
    console.log(content);

    $(this).find('#edit_form').attr('action', 'admin/' + id + '/update');
    $(this).find('#fio').val(old_fio);
    $(this).find('#date').val(old_date);
    $(this).find('#phone').val(old_phone);
    $(this).find('#type').val(old_type);
    $(this).find('#count').val(old_count);
    $(this).find('#happy').val(old_happy);
    $(this).find('#description').val(old_description);
});
$('#modal_update_application').on('show.bs.modal', function (event) {
    // получить кнопку, которая его открыло
    let button = $(event.relatedTarget);
    // извлечь информацию из атрибута data-content
    let content = button.data('content');
    let id = content.id;
    let old_fio = content.fio;
    let old_email = content.email;
    let old_phone = content.phone;
    let old_message = content.message;

    console.log(content);

    $(this).find('#edit_form_appl').attr('action', 'admin/' + id + '/update_appl');
    $(this).find('#fio').val(old_fio);
    $(this).find('#email').val(old_email);
    $(this).find('#phone').val(old_phone);
    $(this).find('#message').val(old_message);
});
$('#modal_destroy_record').on('show.bs.modal', function (event) {
    // получить кнопку, которая его открыло
    let button = $(event.relatedTarget);
    // извлечь информацию из атрибута data-content
    let content = button.data('content');
    let id = content.id;

    console.log(content);

    $(this).find('#delete_form').attr('action', 'admin/' + id + '/delete');
});
$('#modal_destroy_application').on('show.bs.modal', function (event) {
    // получить кнопку, которая его открыло
    let button = $(event.relatedTarget);
    // извлечь информацию из атрибута data-content
    let content = button.data('content');
    let id = content.id;

    console.log(content);

    $(this).find('#delete_form_appl').attr('action', 'admin/' + id + '/delete_appl');
});

/*!
* Start Bootstrap - Creative v7.0.7 (https://startbootstrap.com/theme/creative)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
*/
//
// Scripts
//

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    // const mainNav = document.body.querySelector('#mainNav');
    // if (mainNav) {
    //     new bootstrap.ScrollSpy(document.body, {
    //         target: '#mainNav',
    //         rootMargin: '0px 0px -40%',
    //     });
    // };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });



});



