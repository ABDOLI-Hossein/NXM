$(document).ready(function(){
    $(".portfolioMobileOwl").owlCarousel();
});
$('.portfolioMobileOwl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1,
            nav:false,
            dots: true,
        }
    }
})

$('.homePortfolioOwl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,

    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1,
            nav:true,
            dots: false,
            stagePadding: 150
        }
    }
})
$('.homeTestimonialsOwl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,

    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1,
            nav:true,
            dots: false,
            stagePadding: 190
        }
    }
})


$('.detailOurServicesOwl').owlCarousel({
    loop:true,
    margin:10,
    animateOut: 'animate__fadeOutDown',
    animateIn: 'animate__fadeInDown',
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1,
            nav:true,
            dots: false,
        }
    }
})

$('.ourServicesMobileOwl').owlCarousel({
    loop:true,
    margin:10,
    animateOut: 'animate__fadeOutDown',
    animateIn: 'animate__fadeInDown',
    nav:false,
    dots: true,
    responsive:{
        0:{
            items:2
        }
    }
})

$('.closeMenu').click(function (){
    $('.openMenuWrap,.overlay').fadeOut();
    $('.openMenuWrap').addClass('d-none');
    $('body').removeClass('overflow-hidden')
})

$('.openMenu').click(function (){
    $('.openMenuWrap,.overlay').fadeIn();
    $('.openMenuWrap').removeClass('d-none');
    $('body').addClass('overflow-hidden')
})

$(document).ready(function (){
    $(".startNewProject").click(function() {
        if (!$('.openMenuWrap').hasClass('d-none')){
            $('.openMenuWrap,.overlay').fadeOut();
            $('body').removeClass('overflow-hidden')
            setTimeout(function (){
                if($(window).width() < 1000){
                    $('html,body').animate({
                            scrollTop: $('.anchorMobile').offset().top - 50},
                        'slow');
                }else {
                    $('html,body').animate({
                            scrollTop: $('.homePart7').offset().top - 50},
                        'slow');
                }
            },1000)
        }else {
            if($(window).width() < 1000){
                $('html,body').animate({
                        scrollTop: $('.anchorMobile').offset().top - 50},
                    'slow');
            }else {
                $('html,body').animate({
                        scrollTop: $('.homePart7').offset().top - 50},
                    'slow');
            }

        }



    });


});



$('#saHomeNext').click(function (e){
    e.preventDefault();
    $('#saHomeForm1').hide()
    $('#saHomeForm2').fadeIn()
})
$('#saHomeBack').click(function (e){
    e.preventDefault();
    $('#saHomeForm2').hide()
    $('#saHomeForm1').fadeIn()
})


function saAlert(errorMsg){
    Swal.fire({
        title: "Oops..",
        text: errorMsg,
        icon: 'error',
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        }
    })
}


$('#saHomeSubmit').click(function (e){
    e.preventDefault();
    var firstName = $('input[name=firstName]').val();
    var lastName = $('input[name=lastName]').val();
    var email = $('input[name=email]').val();
    var phone = $('input[name=phone]').val();
    var companyName = $('input[name=companyName]').val();
    var otherInfo = $('textarea[name=otherInfo]').val();
    var currentWebsiteAddress = $('input[name=currentWebsiteAddress]').val();
    var Budget = $('select[name=Budget]').val()
    var service = $('input[name=service]:checked').map(function(){
        return $(this).val();
    }).get();

    /*if (service.length === 0 ){
        $('#saHomeForm2').hide()
        $('#saHomeForm1').fadeIn()
        $('.chooseService label').css('color','red')
        saAlert('Please Choose at least one service!')
    }*/





 $.ajax({
        type: "post",
        dataType: "json",
        data:{
            action: 'yourNewProjectForm',
            firstName : firstName,
            lastName : lastName,
            email : email,
            phone : phone,
            companyName : companyName,
            otherInfo : otherInfo,
            currentWebsiteAddress : currentWebsiteAddress,
            Budget : Budget,
            service : service
        },
        url: window.location.origin + "/wp-admin/admin-ajax.php",
        success: function(msg){
            console.log(msg);
            Swal.fire({
                title: 'Your Project Submited!',
                icon: 'success',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        }
    });

})







if($(window).width() > 1000) {
//     svg2.getAnimations().forEach((animation) => {
//         animation.effect.composite = "add";
//     });
    homePart2Svg1.getAnimations().forEach((animation) => {
        animation.effect.composite = "accumulate";
    });
    homePart3Svg2.getAnimations().forEach((animation) => {
        animation.effect.composite = "replace";
    });
}





