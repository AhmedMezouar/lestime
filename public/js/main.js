
(function ($) {
    "use strict";

    /*[ Load page ]
    ===========================================================*/
    $(".animsition").animsition({
        inClass: 'fade-in',
        outClass: 'fade-out',
        inDuration: 1500,
        outDuration: 800,
        linkElement: '.animsition-link',
        loading: true,
        loadingParentElement: 'html',
        loadingClass: 'animsition-loading-1',
        loadingInner: '<div class="loader05"></div>',
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        overlay : false,
        overlayClass : 'animsition-overlay-slide',
        overlayParentElement : 'html',
        transition: function(url){ window.location.href = url; }
    });
    
    /*[ Back to top ]
    ===========================================================*/
    var windowH = $(window).height()/2;

    $(window).on('scroll',function(){
        if ($(this).scrollTop() > windowH) {
            $("#myBtn").css('display','flex');
        } else {
            $("#myBtn").css('display','none');
        }
    });

    $('#myBtn').on("click", function(){
        $('html, body').animate({scrollTop: 0}, 300);
    });


    /*==================================================================
    [ Fixed Header ]*/
    var headerDesktop = $('.container-menu-desktop');
    var wrapMenu = $('.wrap-menu-desktop');

    if($('.top-bar').length > 0) {
        var posWrapHeader = $('.top-bar').height();
    }
    else {
        var posWrapHeader = 0;
    }
    

    if($(window).scrollTop() > posWrapHeader) {
        $(headerDesktop).addClass('fix-menu-desktop');
        $(wrapMenu).css('top',0); 
    }  
    else {
        $(headerDesktop).removeClass('fix-menu-desktop');
        $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop()); 
    }

    $(window).on('scroll',function(){
        if($(this).scrollTop() > posWrapHeader) {
            $(headerDesktop).addClass('fix-menu-desktop');
            $(wrapMenu).css('top',0); 
        }  
        else {
            $(headerDesktop).removeClass('fix-menu-desktop');
            $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop()); 
        } 
    });


    /*==================================================================
    [ Menu mobile ]*/
    $('.btn-show-menu-mobile').on('click', function(){
        $(this).toggleClass('is-active');
        $('.menu-mobile').slideToggle();
    });

    $('.option_item').on('click', function(){

       var val =  $(this).data('val');

       document.getElementById("inputvolume").value =val;
       
    });

    var arrowMainMenu = $('.arrow-main-menu-m');

    for(var i=0; i<arrowMainMenu.length; i++){
        $(arrowMainMenu[i]).on('click', function(){
            $(this).parent().find('.sub-menu-m').slideToggle();
            $(this).toggleClass('turn-arrow-main-menu-m');
        })
    }

    $(window).resize(function(){
        if($(window).width() >= 992){
            if($('.menu-mobile').css('display') == 'block') {
                $('.menu-mobile').css('display','none');
                $('.btn-show-menu-mobile').toggleClass('is-active');
            }

            $('.sub-menu-m').each(function(){
                if($(this).css('display') == 'block') { console.log('hello');
                    $(this).css('display','none');
                    $(arrowMainMenu).removeClass('turn-arrow-main-menu-m');
                }
            });
                
        }
    });


    /*==================================================================
    [ Show / hide modal search ]*/
    $('.js-show-modal-search').on('click', function(){
        $('.modal-search-header').addClass('show-modal-search');
        $(this).css('opacity','0');
    });

    $('.js-hide-modal-search').on('click', function(){
        $('.modal-search-header').removeClass('show-modal-search');
        $('.js-show-modal-search').css('opacity','1');
    });

    $('.container-search-header').on('click', function(e){
        e.stopPropagation();
    });


    /*==================================================================
    [ Isotope ]*/
    var $topeContainer = $('.isotope-grid');
    var $filter = $('.filter-tope-group');

    // filter items on button click
    $filter.each(function () {
        $filter.on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $topeContainer.isotope({filter: filterValue});
        });
        
    });

    // init Isotope
    $(window).on('load', function () {
        var $grid = $topeContainer.each(function () {
            $(this).isotope({
                itemSelector: '.isotope-item',
                layoutMode: 'fitRows',
                percentPosition: true,
                animationEngine : 'best-available',
                masonry: {
                    columnWidth: '.isotope-item'
                }
            });
        });
    });

    var isotopeButton = $('.filter-tope-group button');

    $(isotopeButton).each(function(){
        $(this).on('click', function(){
            for(var i=0; i<isotopeButton.length; i++) {
                $(isotopeButton[i]).removeClass('how-active1');
            }

            $(this).addClass('how-active1');
        });
    });

    /*==================================================================
    [ Filter / Search product ]*/
    $('.js-show-filter').on('click',function(){
        $(this).toggleClass('show-filter');
        $('.panel-filter').slideToggle(400);

        if($('.js-show-search').hasClass('show-search')) {
            $('.js-show-search').removeClass('show-search');
            $('.panel-search').slideUp(400);
        }    
    });

    $('.js-show-search').on('click',function(){
        $(this).toggleClass('show-search');
        $('.panel-search').slideToggle(400);

        if($('.js-show-filter').hasClass('show-filter')) {
            $('.js-show-filter').removeClass('show-filter');
            $('.panel-filter').slideUp(400);
        }    
    });




    /*==================================================================
    [ Cart ]*/
    $('.js-show-cart').on('click',function(){
        $('.js-panel-cart').addClass('show-header-cart');
    });

    $('.js-hide-cart').on('click',function(){
        $('.js-panel-cart').removeClass('show-header-cart');
    });

    /*==================================================================
    [ Cart ]*/
    $('.js-show-sidebar').on('click',function(){
        $('.js-sidebar').addClass('show-sidebar');
    });

    $('.js-hide-sidebar').on('click',function(){
        $('.js-sidebar').removeClass('show-sidebar');
    });

    /*==================================================================
    [ +/- num product ]*/
    $('.btn-num-product-down').on('click', function(){
        var size = document.querySelector('input[name="volume"]:checked').value;
        console.log('size ' ,size);
        var numProduct = Number($(this).next().val());
        if(numProduct > 1) $(this).next().val(numProduct - 1);
        //document.getElementById('qteinput').value =  Number($(this).next().val());
    });

    $('.btn-num-product-up').on('click', function(){
        var size = document.querySelector('input[name="volume"]:checked').value;
        console.log(parseInt(size));
        if (size == 35) {
            var qte35 = document.getElementById("inputqte_35").value;
            var numProduct = document.getElementById("qtecart").value;
            console.log(parseInt(numProduct));
            if(parseInt(numProduct) > 0 && parseInt(numProduct) < parseInt(qte35)) $(this).prev().val(parseInt(numProduct) + 1);
        }else if (size == 50) {
            var qte50 = document.getElementById("inputqte_50").value;
            console.log(parseInt(qte50));
            var numProduct = document.getElementById("qtecart").value;
            if(parseInt(numProduct) > 0 && parseInt(numProduct) <  parseInt(qte50)) $(this).prev().val(parseInt(numProduct) + 1);
        }else if (size == 100) {
            var qte100 = document.getElementById("inputqte_100").value;
          var numProduct = document.getElementById("qtecart").value;
            if(parseInt(numProduct) > 0 && parseInt(numProduct) <  parseInt(qte100)) $(this).prev().val(parseInt(numProduct) + 1);
        }
       // var numProduct = Number($(this).prev().val());
       // if(numProduct > 0) $(this).prev().val(numProduct + 1);
        //document.getElementById('qteinput').value =  Number($(this).prev().val());
    });

    /*==================================================================
    [ Rating ]*/
    $('.wrap-rating').each(function(){
        var item = $(this).find('.item-rating');
        var rated = -1;
        var input = $(this).find('input');
        $(input).val(0);

        $(item).on('mouseenter', function(){
            var index = item.index(this);
            var i = 0;
            for(i=0; i<=index; i++) {
                $(item[i]).removeClass('zmdi-star-outline');
                $(item[i]).addClass('zmdi-star');
            }

            for(var j=i; j<item.length; j++) {
                $(item[j]).addClass('zmdi-star-outline');
                $(item[j]).removeClass('zmdi-star');
            }
        });

        $(item).on('click', function(){
            var index = item.index(this);
            rated = index;
            $(input).val(index+1);
        });

        $(this).on('mouseleave', function(){
            var i = 0;
            for(i=0; i<=rated; i++) {
                $(item[i]).removeClass('zmdi-star-outline');
                $(item[i]).addClass('zmdi-star');
            }

            for(var j=i; j<item.length; j++) {
                $(item[j]).addClass('zmdi-star-outline');
                $(item[j]).removeClass('zmdi-star');
            }
        });
    });
    
    /*==================================================================
    [ Show modal1 ]*/
    $('.js-show-modal1').on('click',function(e){
        e.preventDefault();
        let obj = $(this).data('obj');
        var myProdid =  $(this).data('id');
        var myProdName =  $(this).data('name');
        var myProdpriceold =  $(this).data('prixold');
        var myProdprice =  $(this).data('prix');
        var myProddesc =  $(this).data('description');
        var promo =  $(this).data('promo');
        var image =  $(this).data('mainimage'); 
        console.log('image : ',image);  
        var imageName = $(this).data('onlyimage');   
        console.log(image);  
        $("#nameofProduct").html(myProdName);
        $("#descprod").html(myProddesc);

        if (promo >0 ) {
        $("#oldprice").html(myProdpriceold + " DA");
        $("#newprice").html(myProdprice + " DA");
        $("#prix35").html(obj.prix_new_35 + " DA");
        document.getElementById("inputqte_35").value = obj.Qte_stock_35;
        }else{
            $("#newprice").html(myProdprice + " DA");
        }
        if (obj.Volum50 > 0) {
        if ( obj.promo_50 > 0) {
          $("#prix50").html(obj.prix_new_50 + " DA");
          document.getElementById("inputprodprice50").value =obj.prix_new_50;
          document.getElementById("inputqte_50").value = obj.Qte_stock_50;
        }else{
            $("#prix50").html(obj.prix_old_50 + " DA");  
            document.getElementById("inputprodprice50").value =obj.prix_old_50;
            $("#Qte50").html(obj.Qte_stock_50+ " Qte");
        }}
        else{
            $("#div50").html("");
        }
        if (obj.Volum100 > 0) {
        if (obj.promo_100 > 0) {
            $("#prix100").html(obj.prix_new_100 + " DA");
            document.getElementById("inputprodprice100").value =obj.prix_new_100;
            document.getElementById("inputqte_100").value = obj.Qte_stock_100;
          }else{
              $("#prix100").html(obj.prix_old_100 + " DA");  
              document.getElementById("inputprodprice100").value =obj.prix_old_100;
              $("#Qte100").html(obj.Qte_stock_100+ " Qte");
          }}
          else{
            $("#div100").html("");
          }

        var div = document.querySelector('#divdetails1');

       
        document.getElementById("inputprodobj").value = obj;
        document.getElementById('imageprod').src =image;
       // document.getElementById('imageproda').src =image;
       // document.getElementById('imageproddetail1').src =image;
        //document.getElementById('imageproddetail2').src =image;
        document.getElementById("inputprodid").value =myProdid;
        document.getElementById("inputprodname").value =myProdName;
        document.getElementById("inputprodimage").value =image;
        document.getElementById("inputprodprice").value =myProdprice;
        document.getElementById("imageNameInput").value =imageName;
       
        $('.js-modal1').addClass('show-modal1');
    });

    $('.js-hide-modal1').on('click',function(){
        $('.js-modal1').removeClass('show-modal1');
    });



})(jQuery);