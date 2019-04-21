;(function ($) {
    $(document).ready(function () {
        $("#send-message").on("click",function () {
            $.post(toururl.ajaxurl,{
                action: "reserve",
                tnonce: $("#reserve").val(),
                name: $("#name").val(),
                email: $("#email").val(),
                small: $("#small").val(),
                large: $("#large").val()
            },function (data) {

                    document.getElementById("reservation-message").innerHTML=data;

            });
            return false;
        });
    });
})(jQuery);