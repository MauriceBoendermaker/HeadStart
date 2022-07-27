// auto generated side menu from top header menu start
var topHeaderMenu = $('header nav > ul').clone();
var sideMenu = $('.side-menu-wrap nav');
sideMenu.append(topHeaderMenu);
if ($(sideMenu).find('.sub-menu').length != 0) {
    $(sideMenu).find('.sub-menu').parent().append('<i class="fas fa-chevron-right d-flex align-items-center"></i>');
}
// auto generated side menu from top header menu end

// close menu when clicked on menu link start
// $('.side-menu-wrap nav > ul > li > a').on('click', function () {
//   sideMenuCloseAction();
// });
// close menu when clicked on menu link end

// open close sub menu of side menu start
var sideMenuList = $('.side-menu-wrap nav > ul > li > i');
$(sideMenuList).on('click', function () {
    if (!($(this).siblings('.sub-menu').hasClass('d-block'))) {
        $(this).siblings('.sub-menu').addClass('d-block');
    } else {
        $(this).siblings('.sub-menu').removeClass('d-block');
    }
});
// open close sub menu of side menu end

// side menu close start
$('.side-menu-close').on('click', function () {
    if (!($('.side-menu-close').hasClass('closed'))) {
        $('.side-menu-close').addClass('closed');
    } else {
        $('.side-menu-close').removeClass('closed');
    }
});
// side menu close end

// auto append overlay to body start
$('.wrapper').append('<div class="custom-overlay h-100 w-100"></div>');
// auto append overlay to body end

// open side menu when clicked on menu button start
$('.side-menu-close').on('click', function () {
    if (!($('.side-menu-wrap').hasClass('opened')) && !($('.custom-overlay').hasClass('show'))) {
        $('.side-menu-wrap').addClass('opened');
        $('.custom-overlay').addClass('show');
    } else {
        $('.side-menu-wrap').removeClass('opened');
        $('.custom-overlay').removeClass('show');
    }
})
// open side menu when clicked on menu button end

// close side menu when clicked on overlay start
$('.custom-overlay').on('click', function () {
    sideMenuCloseAction();
});
// close side menu when clicked on overlay end

// close side menu when swiped start
var isDragging = false, initialOffset = 0, finalOffset = 0;
$(".side-menu-wrap")
    .mousedown(function(e) {
        isDragging = false;
        initialOffset = e.offsetX;
    })
    .mousemove(function() {
        isDragging = true;
    })
    .mouseup(function(e) {
        var wasDragging = isDragging;
        isDragging = false;
        finalOffset = e.offsetX;
        if (wasDragging) {
            if(initialOffset>finalOffset) {
                sideMenuCloseAction();
            }
        }
    });
// close side menu when swiped end

function sideMenuCloseAction() {
    $('.side-menu-wrap').addClass('open');
    $('.wrapper').addClass('freeze');
    $('.custom-overlay').removeClass('show');
    $('.side-menu-wrap').removeClass('opened');
    $('.side-menu-close').removeClass('closed');
    $(sideMenuList).siblings('.sub-menu').removeClass('d-block');
}
// close side menu when clicked on overlay end

// close side menu over 992px start
$(window).on('resize', function() {
    if($(window).width() >= 992) {
        sideMenuCloseAction();
    }
})
// close side menu over 992px end

//---

document.querySelector(".banner_close").addEventListener("click", function () {
    this.closest(".warning_banner").style.display = "none";
});

//---

// // animated favicon
//
// var favicon_images = [
//         '../favicon.ico',
//         '../favicon_blue.ico'
//     ],
//     image_counter = 0; // To keep track of the current image
//
// setInterval(function() {
//     // remove current favicon
//     if(document.querySelector("link[rel='icon']") !== null)
//         document.querySelector("link[rel='icon']").remove();
//     if(document.querySelector("link[rel='shortcut icon']") !== null)
//         document.querySelector("link[rel='shortcut icon']").remove();
//
//     // add new favicon image
//     document.querySelector("head").insertAdjacentHTML('beforeend', '<link rel="icon" href="' + favicon_images[image_counter] + '" type="image/gif">');
//
//     // If last image then goto first image
//     // Else go to next image
//     if(image_counter == favicon_images.length -1)
//         image_counter = 0;
//     else
//         image_counter++;
// }, 240);

//---

const constraints = {
    name: {
        presence: {allowEmpty: false}
    },
    email: {
        presence: {allowEmpty: false},
        email: true
    },
    title: {
        presence: {allowEmpty: false}
    },
    message: {
        presence: {allowEmpty: false}
    }
};

const form = document.getElementById('contact-form1');

form.addEventListener('submit', function (event) {
    const formValues = {
        name: form.elements.name.value,
        email: form.elements.email.value,
        title: form.elements.title.value,
        message: form.elements.message.value
    };

    const errors = validate(formValues, constraints);

    if (errors) {
        event.preventDefault();
        const errorMessage = Object
            .values(errors)
            .map(function (fieldValues) {
                return fieldValues.join(', ')
            })
            .join("\n");

        alert(errorMessage);
    }
}, false);

//---