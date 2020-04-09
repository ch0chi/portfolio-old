/**
 * Created by michael on 10/24/16.
 */



var lastScrollTop = 0;
var currentURL = window.location.pathname;
/**
 * Dynamically changes navbar based on window position
 */



if(currentURL == '/'){
    $(window).scroll(function(){
        var st = $(this).scrollTop();

        if (st > lastScrollTop){
            $('.navbar-default').addClass('scroll');
            $('.navbar-nav>li>a').animate().addClass('navbarLiScroll');
            $('.navbar>.container .navbar-brand').animate().addClass('navbarLiScroll');
        }if(st <= 10) {

            $('.navbar-default').removeClass('scroll');
            $('.navbar-nav>li>a').removeClass('navbarLiScroll');
            $('.navbar>.container .navbar-brand').animate().removeClass('navbarLiScroll');
        }
        lastScrollTop = st;
    });
}else{

    $('.navbar-default').addClass('scroll');
    $('.navbar-nav>li>a').addClass('navbarLiScroll');
    $('.navbar>.container .navbar-brand').addClass('navbarLiScroll');

}


var closeBtn = $('#closeQuote');
var showQuoteDetailsBtn=$('#checkQuote');
var counter = 1;
var currentInput;
function Form(){

}

//toggles client quote request visibility.
Form.prototype.toggleButton=function(){

    $(document.body).click(function(e){
        var target = e.target;
        if($(target).is(closeBtn)){
            $("#getQuote").fadeIn("slow").show();
            $("#checkQuote").fadeIn("slow").show();
            $("#quoteDetails").hide();

        }else if($(target).is(showQuoteDetailsBtn)){

            $("#quoteDetails").fadeIn("slow").show();
            $("#getQuote").hide();
            $("#checkQuote").hide();
        }
    });
};

var label;
var target;
var checkMark = "fa-check"; //set the font-awesome icon class
var iconSize = 'fa-2x'; //set iconSize
var selectedInput = $('.quoteForm');
Form.prototype.alterForm= function(){
    selectedInput.focus(function(e){
        form.setLabel(e.target);
        form.checkFocused();
    });
    selectedInput.focusout(function(e){
        form.setLabel(e.target);
        form.checkUnfocused(e.target);
    });
};

Form.prototype.setLabel = function(target){
    label = $('label[for='+target.id+']');
};

Form.prototype.getLabel = function(){
    return label;
};

Form.prototype.checkFocused= function(){
    form.getLabel().addClass('active','');
};

Form.prototype.checkUnfocused= function(target){
    if($(target).val().length == 0){

        form.getLabel().removeClass('active');

        if(form.addCheckMark(target)){

            form.getLabel().next().remove();
        }
    }else if(!$(form.getLabel()).next().is($(checkMark))){
        form.getLabel().after("<span class='fa "+iconSize+" "+checkMark+"'></span>")
    }
};

Form.prototype.addCheckMark = function(){
    if(form.getLabel().next().is($("."+ checkMark +""))){
        return true;
    }else{
        return false;
    }
};

var img = document.createElement("img");

/**
 * Image Class
 */
function Image(){

}

Image.prototype.displayImage = function(){
    $("#post_image").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function(){ // set image data as background of div

                $(".formImage").css({
                    "background-image":"url("+this.result+")",
                });
                image.getSrc(this.result);
            }
        }
    });
};

Image.prototype.getSrc = function(source){
    img.src=source;
};





//Summernote initialization
$('#post_body').summernote();

post = new Post();
image = new Image();
form = new Form();

function initialize(){
    $("#quoteDetails").hide();
    form.toggleButton();
    form.alterForm();
    //form.checkTarget();
    image.displayImage();
    post.setCss();
}
initialize();

