

// function navbarShowOnScroll() {

//     // navbar scroll
    
//     let navbar = document.querySelector('#navbar')
//     // let navbarBrand = document.querySelector('#navbarBrand')
    
    
    
//     if (window.innerWidth > 576) {
        
//         document.addEventListener ('scroll' , () => { //aggiungimi le cose di sotto all'evento scroll 
            
//             if (window.pageYOffset > 50) { // se scrolli più di 100 px 
    
//                 navbar.classList.remove('bg-transparent')
//                 navbar.classList.add('bg-white', 'shadow')
//                 // navbarBrand.src = "./media/nero.png"
    
//                 // document.getElementById("navbarBrand").style.width = "60px" //intervengo sul CSS
//                 // document.getElementById("navbarBrand").style.height = "60px" //intervengo sul CSS
    
//             } else {
    
//                 navbar.classList.remove('bg-white', 'shadow')
//                 navbar.classList.add('bg-transparent')
//                 // navbarBrand.src = "./media/bianco.png"
    
//             }     
//         })      
//     }
    
//     }
    
//     navbarShowOnScroll()
    
    
    // slick carousel
    
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });