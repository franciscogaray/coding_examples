// 1) Replace year on the footer

jQuery(document).ready(function( $ ){
    $(".site-info").text("© Example 2021");
});

//////////////////////////////////////////////////////////////////////////

// 2) Replace search bar placeholder text

jQuery(document).ready(function( $ ){
    $("#woocommerce-product-search-field-0").attr("placeholder", "Kirjuta, mida otsid… - nt silikoon");
});

//////////////////////////////////////////////////////////////////////////

// 3) Replace form fields values on contact form

jQuery('.add_to_cart_form #button').click(function(){

 var pfullname= jQuery('input#prop_full_name').val();
 var paddress = jQuery('input#prop_address').val();
 var pcity = jQuery('input#prop_city').val();
 var pstate = jQuery('input#prop_state').val();
 var pbdate = jQuery('input#prop_dob').val();
 var socsecnum = jQuery('input#prop_social').val();
 var spousename = jQuery('input#prop_spouse_name').val();
 if(pfullname == ""){
     alert("Please fill in the required fields");
     return false;
 }

//////////////////////////////////////////////////////////////////////////

// 4) Replace Instagram profile picture for feed

jQuery(document).ready(function( $ ){
     $('.FeedHeader__profile-pic img').attr('src', 'https://example.com/wp-content/uploads/2021/03/shelby-ig-pp.jpg');
});

//////////////////////////////////////////////////////////////////////////

// 5) Change default category to Featured on Portfolio page

(function($){   
    $(window).load(function() {
        $('.elementor-portfolio__filter:nth-child(5)').trigger('click');
    }); 
})(jQuery);

//////////////////////////////////////////////////////////////////////////

// 6) Insert and style COVID-19 banner

jQuery(document).ready(function(){
 jQuery('<div class="featured-banner" style="background-color:#008c95;color:#fff;padding: 2%;"><h2 style="background-color:#008c95;color:#fff;">COVID-19 Travel Update<h2><h3 style="background-color:#008c95;color:#fff;">Updated January 2021<h3><p style="background-color:#008c95;color:#fff;">Vaccines are on their way! Our current belief is that being vaccinated will allow us to fly internationally and be allowed into Europe. Therefore, our new policy for travelling with Olde Ipswich Tours in 2021 is that you must be vaccinated. We anticipate a flood of reservations for our 2021 tours and beyond. Book now to guarantee space.  All tour deposits are fully refundable.</p><p style="background-color:#008c95;color:#fff;"><b>Click to see the <a style="background-color:#008c95;color:#fff;text-decoration:underline" href="https://ipswichtours.com/small-group-tours">2021 Tour Schedule!</b></a></p></div>').insertBefore(".home #feature");

jQuery(".home .header-widgets .search").insertBefore(".home .front-welcome .last h1");
jQuery(".home .header-widgets .search").css("display","block");
});

// 7) Replace string Private Message button

jQuery(document).ready(function( $ ){
    $('#send-private-message a').each(function() {
    var text = $(this).text();
    $(this).text(text.replace('">Private Message', 'Private Message')); 
    });
});
