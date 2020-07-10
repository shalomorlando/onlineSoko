Stripe.setPublishableKey('pk_test_51H3ACfD4SMHhpFvhy84ymHuzANchedrRPRC2Po9Yb' +
    'P3iS3bYcAZtv7QGn5gHbQ5qQsuyXEyIXQWohy7573UN71Z8002x9GY68b');

var $form = $('#checkout-form');
$form.submit(function(event) {
    $('$charge-error').addClass('hidden');
    $form.find('button').prop('disabled',true);
    ServicePointManager.SecurityProtocol = SecurityProtocolType.Tls12 | SecurityProtocolType.Tls11 | SecurityProtocolType.Tls;
Stripe.card.createToken({
    number: $('#card-number').val(),
    cvc: $('#card-cvc').val(),
    exp_month: $('#card-expiry-month').val(),
    exp_year: $('#card-expiry-year').val(),
    name: $('#card-name').val()
},stripeResponseHandler);
return false;
});
function stripeResponseHandler(status, response) {
    if(response.error){
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled',false);
    } else {
        var token = response.id;
        $form.append($('<input type= "hidden" name="stripeToken" />').val(token));

        //Submit the form:
        $form.get(0).submit();
    }

}
