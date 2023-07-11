var x;
x = $(document);
x.ready(start);

var state = 0;

function start()
{
    $("#signIn").on("click", clickSignIn);
}

function clickSignIn(){
    if(state == 0){
        $(".signIn").css({"-transform":"translateY(-170px)"});
        $(".signIn").css({"-webkit-transform":"translateY(-170px)"});
        $(".signIn").css("transition-duration","1s");
        $(".signIn").css("-webkit-transition-duration","1s");
        state = 1;
    }
    else{
        $(".signIn").css({"-webkit-transform":"translateY(40px)"});
        $(".signIn").css({"transform":"translateY(40px)"});
        $(".signIn").css("-webkit-transition-duration","1s");
        $(".signIn").css("transition-duration","1s");
        state = 0;
    }
}