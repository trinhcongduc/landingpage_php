//

var count = 10;
function  countDownRedirect(url) {
    var html = $("#count_down_time");
    if(count > 0){
        count--;
        html.html(count);
        setTimeout("countDownRedirect(url)", 1000);
    }else{
        console.log("DONE");
        count = 10;
        window.location.href = url;
    }
}


// Process after load page done
$(document).ready(function () {

    function input_validattion(element,notify){
        var parent =  element.parent();
        if(element.val() === ''){
            if(element.attr("type")==="email"){
                parent.find(".field-obligate").remove();
                parent.append(notify)
            }
            parent.find(".field-obligate").remove();
            element.addClass("input-validation");
            parent.append(notify);
            element.focus();
            return false;
        }else{
            if(element.attr("type")==="email"){
                var html = '<small class="field-obligate">Sai định dạng email</small>';
                var re = /\S+@\S+\.\S+/;
                if(!re.test(element.val())){
                    element.focus();
                    parent.find(".field-obligate").remove();
                    parent.append(html);
                    return false;
                }

            }
        }
        parent.find(".field-obligate").remove();
        element.removeClass("input-validation");
        return true;
    }
    $("#submit").on("click",function (event) {
        var html = '<small class="field-obligate">Trường này là bắt buộc</small>';
        var name = $("form").find("input[name='name']");
        var email = $("form").find("input[name='email']");
        var phone = $("form").find("input[name='phone_number']");
        var check1 = input_validattion(name,html);
        var check2 = input_validattion(email,html);
        var check3 = input_validattion(phone,html);
        if(check1&&check2&&check3){
            return;
        }else{
            event.preventDefault();
        }
    });
    $("input").on("click",function () {
        $(this).removeClass("input-validation");
        $(this).parent().find(".field-obligate").remove();
    });
});
