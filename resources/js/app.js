import './bootstrap';
import './vanilla';
import jQuery, { css, each, error } from 'jquery';
window.$ = jQuery;

function callAPI($url){
    var tmp;
    $.ajax(
        { 
            type:'GET', 
            url: $url, 
            async: false, 
            global: false, 
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]')[0].content }, 
            dataType: 'json',
            success: function(data){ tmp = data; }
        }
    );
    return tmp;
}

function writeOnTerminal($result) {
    let terminal = document.getElementById('terminal');
    terminal.innerHTML = "";
    if(Array.isArray($result)){
        $result.forEach(function(element){
            element.forEach(el => {
                terminal.innerHTML += "<span>• "+el+"</span>"
            });
        });
    }
    else{
        terminal.innerText = $result;
    }
}

function callname() {
    let url = "/api/get/name"
    let r = callAPI(url);
    writeOnTerminal(r);
}

function callemail() {
    let url = "/api/get/email"
    let r = callAPI(url);
    writeOnTerminal(r);
}

function callage() {
    let url = "/api/get/age"
    let r = callAPI(url);
    writeOnTerminal(r);
}

function callphone() {
    let url = "/api/get/phone"
    let r = callAPI(url);
    writeOnTerminal(r);
}

function calllanguages() {
    let url = "/api/get/languages"
    let r = callAPI(url);
    writeOnTerminal(r);
}

function callsoftware() {
    let url = "/api/get/software"
    let r = callAPI(url);
    writeOnTerminal(r);
}

function callexperience() {
    let url = "/api/get/experience"
    let r = callAPI(url);
    writeOnTerminal(r);
}

$('#btnCallName').on('click', callname);
$('#btnCallemail').on('click', callemail);
$('#btnCallage').on('click', callage);
$('#btnCallphone').on('click', callphone);
$('#btnCalllanguages').on('click', calllanguages);
$('#btnCallsoftware').on('click', callsoftware);
$('#btnCallexperience').on('click', callexperience);

$('#Dismissbanners').on('click', function(){
    $('#banners').hide();
})

$('#buttonAbout').on('click', function(){
    $('body').addClass('overflow-hidden')
    $('#aboutmodal').removeClass('hidden');
});

$('#DismissModal').on('click', function(){
    $('body').removeClass('overflow-hidden')
    $('#aboutmodal').addClass('hidden');
});

