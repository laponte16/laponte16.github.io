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
/*SLIDER FUNCTIONS CALLS*/
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
    window.setTimeout(function(){textRace.text("El mejor amigo de un bombero, tomando el escenario con pelaje singular!");},700);
    imgUrl = "../Images/dalmata1.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickGolden(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Solo hay cosas buenas que decir sobre la personalidad de estos tontitos. Solo miralos con esa sonrisa perpetua!")},700);
    imgUrl = "../Images/golden1.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickSalchicha(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Pocas razas de perro son tan leales y adorables como estos pequeños embutidos. Esos ojos no mienten!")},700);
    imgUrl = "../Images/salchicha.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickPoodle(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Las divas del mundo canino, los Poodles son un viejo favorito. Elegante y calidos, que no hay para amar sobre ellos?")},700);
    imgUrl = "../Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
/*TRAINING FUNCTIONS DEFINITIONS*/
function clickTricks(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Quieres impresionar a la visita en el proximo feriado? Dejanos enseñarle a tu perro un repertorio de trucos que los distraera del hecho de que el pollo salio simple esta vez!")},700);
    imgUrl = "../Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickBehaviour(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Los perros son muy buenos estudiantes, si sabes como enseñarles! Dejanos educar a tu amiguin a traves de la Escuela Perruna antes de que acaba con otro par de tus zapatos")},700);
    imgUrl = "../Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickName(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Todos necesitan un nombre! Y aun mas importante, necesitan saber que es a ellos que le hablan. Nos aseguraremos que Fido no deje mas como un tonto cuando les pidas que vengan a ti")},700);
    imgUrl = "../Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
/*HAIR STYLING FUNCTIONS DEFINITIONS*/
function clickStyling(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Si pensaste que solo los humanos podian verse estilizados, piensa otra vez! Pronto, tu Perro sera la envidia de la cuadra")},700);
    imgUrl = "../Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickWashing(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Tu amigo peludo empieza a acumular polvo? Esas huellas empiezan a arruinar tu segunda alfombra este año? No temas, aqui estamos")},700);
    imgUrl = "../Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickDecoration(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Si pensaste que tu mascota era hermosa antes, espera a que los presentemos con lo ultimo en moda canina!")},700);
    imgUrl = "../Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
/*NUTRITION FUNCTIONS DEFINITIONS*/
function clickEating(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Nutricion apropiada, comidas favoritas, esas golosinas que nunca olvidara. Lo tenemos todo")},700);
    imgUrl = "../Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickBadEating(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Tan divertido como es darles de comer desde la mesa, algunas cosas son un no-no si quieres mantenerlos sanos! Aprende que no hacer cuando se trata de comer perruno")},700);
    imgUrl = "../Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
/*VETERINARY FUNCTIONS DEFINITIONS*/
function clickVaccine(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Mejor salir de ello rapido es nuestro lema!")},700);
    imgUrl = "../Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickMedicalCare(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Eficientes y asequibles, nuestros profesionales estan esperando para proveer a tu amigo con la experticia medica que necesita!")},700);
    imgUrl = "../Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
function clickSterilize(){
    contentBody.fadeOut(500);
    window.setTimeout(function(){textRace.text("Es por su propio bien. Lo juramos")},700);
    imgUrl = "../Images/poodle.jpg"
    window.setTimeout(function(){imagenRace.css("background-image","url(" + imgUrl + ")");},700);
    contentBody.fadeIn(1500);
}
/*SLIDE FUNCTIONS DEFINITIONS*/
