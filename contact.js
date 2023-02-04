$(function () {

   

    $('#contact-form').on('submit', function (e) {

        if (!e.isDefaultPrevented()) {
            var url = "contact.php";
            Materialize.toast('Bezig met verzenden...', 4000, 'pink') // 4000 is the duration of the toast
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    
                    $('#contact-form')[0].reset();
                    Materialize.toast('Mail succesvol verzonden!', 4000, 'blue') // 4000 is the duration of the toast
                    
                },
                error: function(){
                alert('error!');
                }
            });
            return false;
        }
    })
});