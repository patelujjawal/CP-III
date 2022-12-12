(function($) {

    $( "#birth_date" ).datepicker({
        dateFormat: "mm - dd - yy",
        showOn: "both",
        buttonText : '<i class="zmdi zmdi-calendar-alt"></i>',
    });
    $('.add-info-link ').on('click', function() {
        $('.add_info').toggle( "slow" );
    });

    $('#state').parent().append('<ul class="list-item" id="newstate" name="state"></ul>');
    $('#state option').each(function(){
        $('#newstate').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#state').remove();
    $('#newstate').attr('id', 'state');
    $('#state li').first().addClass('init');
    $("#state").on("click", ".init", function() {
        $(this).closest("#state").children('li:not(.init)').toggle();
    });

    $('#city').parent().append('<ul class="list-item" id="newcity" name="city"></ul>');
    $('#city option').each(function(){
        $('#newcity').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#city').remove();
    $('#newcity').attr('id', 'city');
    $('#city li').first().addClass('init');
    $("#city").on("click", ".init", function() {
        $(this).closest("#city").children('li:not(.init)').toggle();
    });

    var allOptions = $("#state").children('li:not(.init)');
    $("#state").on("click", "li:not(.init)", function() {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#state").children('.init').html($(this).html());
        allOptions.toggle('slow');
    });

    var votingOptions = $("#city").children('li:not(.init)');
    $("#city").on("click", "li:not(.init)", function() {
        votingOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#city").children('.init').html($(this).html());
        votingOptions.toggle('slow');
    });

    $('#signup-form').validate({
        rules : {
            first_name : {
                required: true,
            },
            last_name : {
                required: true,
            },
            birth_date : {
                required: true,
            },
            mm : {
                required: true,
            },
            phone_number : {
                required: true,
            },
            aadhar_card : {
                required: true,
            },
            email : {
                required: true,
            },
            password : {
                required: true,
            },
            re_password : {
                required: true,
                equalTo: "#password"
            },
            st1 : {
                required: true,
            },
            st2 : {
                required: true,
            },
            tv : {
                required: true,
            },
            tv1 : {
                required: true,
            },
            pinc : {
                required: true,
            },
            city : {
                required: true,
            },
            city1 : {
                required: true,
            },
            state : {
                required: true,
            },
            photo : {
                required: true,
            },
            aadhar : {
                required: true,
            },
        },
        onfocusout: function(element) {
            $(element).valid();
        },
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });
})(jQuery);
