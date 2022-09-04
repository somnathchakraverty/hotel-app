
function displayAlert(messageType,message){

    $("#error_alert_div").hide();
    $("#success_alert_div").hide();
    $("#error_alert_message").html("");
    $("#success_alert_message").html("");
    if(messageType == "error"){
        $("#error_alert_message").html(message);
        $("#error_alert_div").show();
    }
    if(messageType == "success"){
        $("#success_alert_message").html(message);
        $("#success_alert_div").show();
    }
    setTimeout(function(){
        $("#error_alert_div").hide();
        $("#success_alert_div").hide();
        $("#error_alert_message").html("");
        $("#success_alert_message").html("");
    },5000);
}

function showLoader(){
    $("#loading-wrapper").show();
}

function hideLoader(){
    $("#loading-wrapper").hide();
}
