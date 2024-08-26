var emailregex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
function bodyload(){
    document.getElementById('submitBtn').disabled = true;
}
function checkTerms(state){
    if (state.checked == true){
        document.getElementById('submitBtn').disabled = false;
    }else{
        document.getElementById('submitBtn').disabled = true;
    }
}
function ontype(){
    var compname = document.forms["indexform"]["completename"].value;
    var email = document.forms["indexform"]["email"].value;
    if(compname === '' || !emailregex.test(email)){
        document.getElementById('submitBtn').disabled = true;
    }else{
        document.getElementById('submitBtn').disabled = false;
    }
}