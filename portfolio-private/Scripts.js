var x;
x = $(document);
x.ready(start);

var textRace = $("#textRace")
var imagenRace = $("#imagenRace")
var contentBody = $(".contentBodyInfo")

function start(){

/*BREED FUNCTIONS CALLS*/
$("#dalmatian").on("click", clickDalmatian);
$("#golden").on("click", clickGolden);
$("#salchicha").on("click", clickSalchicha);
$("#poodle").on("click", clickPoodle);
/*TRAINING FUNCTIONS CALLS*/
$("#tricks").on("click", clickTricks);
$("#behaviour").on("click", clickBehaviour);
$("#name").on("click", clickName);
/*HAIR STYLING FUNCTIONS CALLS*/
$("#styling").on("click", clickStyling);
$("#washing").on("click", clickWashing);
$("#decoration").on("click", clickDecoration);
/*NUTRITION FUNCTIONS CALLS*/
$("#eating").on("click", clickEating);
$("#badEating").on("click", clickBadEating);
/*VETERINARY FUNCTIONS CALLS*/
$("#vaccine").on("click", clickVaccine);
$("#medicalCare").on("click", clickMedicalCare);
$("#sterilize").on("click", clickSterilize);
/*SLIDE FUNCTIONS CALLS*/
$('.slider').bxSlider({
    autoControls: true,
    auto: true,
    pager: true,
    mode: 'horizontal',
    captions: false,
    speed: 1000
});
}

/*BREED FUNCTIONS DEFINITIONS*/
function clickDalmatian(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("A fireman's best friend, taking the stage with his stylish coat!");},700);
    imgUrl = "Images/dalmata.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickGolden(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("There's nothing but good things to say about the personality of those silly old goofs. Just look at them and that perpetual smile!")},700);
    imgUrl = "Images/golden.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickSalchicha(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Few dogs races are as loyal and lovable as these little sausages. Those eyes don't lie!")},700);
    imgUrl = "Images/salchicha.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickPoodle(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("The belladonna of the canine world, Poodles are an old time favorite. Fancy and warm, what's there not to love about them?")},700);
    imgUrl = "Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
/*TRAINING FUNCTIONS DEFINITIONS*/
function clickTricks(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Want to impress your guests in the next holiday? Let us teach your Dog a repertoire of tricks to blow them away from the fact that the chicken is a bit bland this time around!")},700);
    imgUrl = "Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickBehaviour(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Dogs are pretty good learners, if you know how to teach them! Let us educate the little fella through Canine High School before he rips another pair of your favorite shoes.")},700);
    imgUrl = "Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickName(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Everybody needs a name! And even more importantly, they need to know it is them you're talking to. We will make sure Fido no longer makes a fool of you when you ask them to come over.")},700);
    imgUrl = "Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
/*HAIR STYLING FUNCTIONS DEFINITIONS*/
function clickStyling(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("If you thought only humans could look fancy, think again! Soon, your Dog will be the envy of the block.")},700);
    imgUrl = "Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickWashing(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Your furry friend getting a Lil' Dusty? Those pawprints are starting to ruin your second carpet this year? Never fear, We are here.")},700);
    imgUrl = "Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickDecoration(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("If you thought your pet was beautiful before, wait until we pretty them up with the latest in canine fashion!")},700);
    imgUrl = "Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
/*NUTRITION FUNCTIONS DEFINITIONS*/
function clickEating(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Proper nutrition, favorite foods, those treats he will never forget. We got it all.")},700);
    imgUrl = "Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickBadEating(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("As fun and cute as it is to feed them from the table, some things are a no-no if you want them to remain healthy! Learn with us what not to do when it comes to doggy eating")},700);
    imgUrl = "Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
/*VETERINARY FUNCTIONS DEFINITIONS*/
function clickVaccine(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Better to get it done with quickly is our motto!")},700);
    imgUrl = "Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickMedicalCare(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Efficient and affordable, our professionals are waiting to provide your friend with the medical expertise he needs!")},700);
    imgUrl = "Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickSterilize(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("It's for their own good. Pinky swear.")},700);
    imgUrl = "Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
/*SLIDE FUNCTIONS DEFINITIONS*/
