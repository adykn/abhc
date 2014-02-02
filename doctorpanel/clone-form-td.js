/*
Author: Tristan Denyer (based on Charlie Griefer's original clone code, and some great help from Dan - see his comments in blog post)
Plugin and demo at http://tristandenyer.com/using-jquery-to-duplicate-a-section-of-a-form-maintaining-accessibility/
Ver: 0.9.3
Date: Mar 3, 2013
*/
$(function () {
    $('#btnAdd').click(function () {
        var num     = $('.clonedInput').length, // how many "duplicatable" input fields we currently have
            newNum  = new Number(num + 1),      // the numeric ID of the new input field being added
            newElem = $('#entry' + num).clone().attr('id', 'entry' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
    // manipulate the name/id values of the input inside the new element
        // H2 - section
        newElem.find('.heading-reference').attr('id', 'ID' + newNum + '_reference').attr('name', 'ID' + newNum + '_reference').html('Entry #' + newNum);

        // Title - select
        newElem.find('.label_m').attr('for', 'ID' + newNum + '_morning');
        newElem.find('.select_m').attr('id', 'ID' + newNum + '_morning').attr('name', 'ID' + newNum + '_morning').val('');

        // First name - text
        newElem.find('.label_e').attr('for', 'ID' + newNum + '_evening');
        newElem.find('.input_e').attr('id', 'ID' + newNum + '_evening').attr('name', 'ID' + newNum + '_evening').val('');

        // Last name - text
        newElem.find('.label_n').attr('for', 'ID' + newNum + '_night');
        newElem.find('.input_n').attr('id', 'ID' + newNum + '_night').attr('name', 'ID' + newNum + '_night').val('');

        
        // Last name - text
        newElem.find('.label_a').attr('for', 'ID' + newNum + '_after');
        newElem.find('.input_a').attr('id', 'ID' + newNum + '_after').attr('name', 'ID' + newNum + '_after').val('');
		
		// Last name - text
        newElem.find('.label_p').attr('for', 'ID' + newNum + '_prescription');
        newElem.find('.input_p').attr('id', 'ID' + newNum + '_prescription').attr('name', 'ID' + newNum + '_prescription').val('');

        // Color - checkbox
        newElem.find('.label_checkboxitem').attr('for', 'ID' + newNum + '_checkboxitem');
        newElem.find('.input_checkboxitem').attr('id', 'ID' + newNum + '_checkboxitem').attr('name', 'ID' + newNum + '_checkboxitem').val([]);

        // Skate - radio
        newElem.find('.label_radio').attr('for', 'ID' + newNum + '_radioitem');
        newElem.find('.input_radio').attr('id', 'ID' + newNum + '_radioitem').attr('name', 'ID' + newNum + '_radioitem').val([]);

        // Email - text
        newElem.find('.label_email').attr('for', 'ID' + newNum + '_email_address');
        newElem.find('.input_email').attr('id', 'ID' + newNum + '_email_address').attr('name', 'ID' + newNum + '_email_address').val('');

    // insert the new element after the last "duplicatable" input field
        $('#entry' + num).after(newElem);
        $('#ID' + newNum + '_title').focus();

    // enable the "remove" button
        $('#btnDel').attr('disabled', false);

    // right now you can only add 5 sections. change '5' below to the max number of times the form can be duplicated
        if (newNum == 5)
        $('#btnAdd').attr('disabled', true).prop('value', "You've reached the limit");
    });

    $('#btnDel').click(function () {
    // confirmation
        if (confirm("Are you sure you wish to remove this section? This cannot be undone."))
            {
                var num = $('.clonedInput').length;
                // how many "duplicatable" input fields we currently have
                $('#entry' + num).slideUp('slow', function () {$(this).remove(); 
                // if only one element remains, disable the "remove" button
                    if (num -1 === 1)
                $('#btnDel').attr('disabled', true);
                // enable the "add" button
                $('#btnAdd').attr('disabled', false).prop('value', "add section");});
            }
        return false;
             // remove the last element

    // enable the "add" button
        $('#btnAdd').attr('disabled', false);
    });

    $('#btnDel').attr('disabled', true);

});