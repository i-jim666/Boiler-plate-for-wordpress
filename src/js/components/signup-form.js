( function( $ ) {
  // Code goes below

  // $(document).on('click', '.continue' ,function(){
  //   let next_step = parseInt($(this).parents('.step').data('id')) + 1;
  //   $('.step').removeClass('active');
  //   $('#step-'+next_step).addClass('active');
  // });

  // $(document).on('click', '.back-btn', function(){
  //   let next_step = parseInt($(this).data('step'));
  //   $('.step').removeClass('active');
  //   $('#step-'+next_step).addClass('active');
  // });
  
  
  const elem = document.querySelector('#date-of-incorporation');
  if(elem){
    const datepicker = new Datepicker(elem, {
      // ...options
      autohide: true,
      format: 'dd/mm/yyyy'
    }); 
  }
 
  const elem2 = document.querySelector('#trade-date');
  if(elem2){
    const datepicker2 = new Datepicker(elem2, {
      // ...options
      autohide: true,
      format: 'dd/mm/yyyy'
    }); 
  }


  const elem3 = document.querySelector('#auth-dob');
  if(elem3){
    const datepicker3 = new Datepicker(elem3, {
      // ...options
      autohide: true,
      format: 'dd/mm/yyyy'
    });   
  }


  $('.fake-upload input').on('change', function(){
      var filename = $(this).val().split('\\').pop();
      $(this).parent().parent().find('.fake-upload-text').html(filename);
    });

  // $(document).on('click', '.remove-file-btn', function(){
  //   $(this).parent().prev().find('input').val('');
  //   $(this).parent().prev().children('.fake-upload-text').html('Upload files');
  //   $(this).parent().remove();
  // });

  $('.tooltip').on('mouseover', function(){
    $(this).next().addClass('active');
  });

  $('.tooltip').on('mouseout', function(){
    $(this).next().removeClass('active');
  });

  


  // Condiotional elements


  function validate_company_status(){
    validation = 1;
    
    if($('.group-company-radio label input:checked') == false){
      validation = 0;
    }
    if($('.common-dir-radio label input:checked') == false){
      validation = 0;
    }
    if($('.regulated-radio label input:checked') == false){
      validation = 0;
    }

    if(validation){
      $('#step-com-status .continue').removeClass('disabled');
    }
    else{
      $('#step-com-status .continue').addClass('disabled');
    }

  }

  $('.radio-group .group-company-radio label').on('click', function(){

    let result = $('.radio-group .group-company-radio label input:checked').val(); 
    if(result == 'yes'){
      $('.group-company-field').addClass('active');
    }
    else{
      $('.group-company-field').removeClass('active');
    }

    validate_company_status();
  })

  $('.radio-group .common-dir-radio label').on('click', function(){
    let result = $('.radio-group .common-dir-radio label input:checked').val(); 
    if(result == 'yes'){
      $('.group-common-dir').addClass('active');
    }
    else{
      $('.group-common-dir').removeClass('active');
    }

    validate_company_status();
  })

  $('.radio-group .regulated-radio label').on('click', function(){
    let result = $('.radio-group .regulated-radio label input:checked').val(); 
    if(result == 'yes'){
      $('.group-regulated').addClass('active');
    }
    else{
      $('.group-regulated').removeClass('active');
    }

    validate_company_status();
  })

  $('.radio-group .fin-regulation-radio label').on('click', function(){
    let result = $('.radio-group .fin-regulation-radio label input:checked').val(); 
    if(result == 'yes'){
      $('.group-fin-regulation-radio').addClass('active');
    }
    else{
      $('.group-fin-regulation-radio').removeClass('active');
    }
  })




  // Step management

  $('#step-1 .continue').on('click', function(){
    $('.step').removeClass('active');
    $('#step-2').addClass('active');
  })
  $('#step-2 .continue').on('click', function(){
    $('.step').removeClass('active');
    $('#director-1').addClass('active');
  })

  $('#director-1 .continue').on('click', function(){
    if(!$('#director-1').hasClass('last-director')){
      $('.step').removeClass('active');
      $('#director-2').addClass('active');
    }
  })
  $('#director-2 .continue').on('click', function(){
    if(!$('#director-2').hasClass('last-director')){
      $('.step').removeClass('active');
      $('#director-3').addClass('active');
    }
  })
  $('#director-3 .continue').on('click', function(){
    if(!$('#director-3').hasClass('last-director')){
      $('.step').removeClass('active');
      $('#director-4').addClass('active');
    }
  })
  $('#director-4 .continue').on('click', function(){
    if(!$('#director-4').hasClass('last-director')){
      $('.step').removeClass('active');
      $('#director-5').addClass('active');
    }
  })

  $(document).on('click', '.last-director .continue', function(){
    $('.step').removeClass('active');
    $('#step-auth').addClass('active');
  })

  $(document).on('click', '#step-auth .continue', function(){
    $('.step').removeClass('active');
    $('#step-operation').addClass('active');
  })

  $(document).on('click', '#step-operation .continue', function(){
    if($('input[name="director-check"]:checked').val() == 'someone else'){
      $('.step').removeClass('active');
      $('#step-operation-contact').addClass('active');
    }
    else{
      let id = $('input[name="director-check"]:checked').parent().data('id');
      $('#operation-first-name').val($('#director-'+id+'-first-name').val());
      $('#operation-last-name').val($('#director-'+id+'-last-name').val());
      $('#operation-email-address').val($('#director-'+id+'-email').val());
      $('#operation-contact-number').val($('#director-'+id+'-phone').val());
      $('.step').removeClass('active');
      $('#step-prod-service').addClass('active');
    }
  })

  $('#step-operation-contact .continue').on('click', function(){
    $('.step').removeClass('active');
    $('#step-prod-service').addClass('active');
  })

  
  $('.group-service-radio label').on('click', function(){
    $('#step-prod-service-3 .continue').removeClass('disabled');
    if($('.group-service-radio label input:checked').val() == 'yes'){
      $('.service-radio-item').addClass('active');
      $('#step-prod-service-3 .continue').removeClass('disabled');
    }
    else{
      $('.service-radio-item').removeClass('active');     
    }
    if($('.group-service-radio label input:checked').val() == 'no'){
      $('.utr-number').addClass('active');
      $('#step-prod-service-3 .continue').addClass('disabled');
    }
    else{
      $('.utr-number').removeClass('active');
    }
  });


  $('.group-vat-radio label').on('click', function(){
    $('#step-prod-service-4 .continue').removeClass('disabled');
    if($('.group-vat-radio label input:checked').val() == 'yes'){
      $('.vat-number-container').addClass('active');
      $('#step-prod-service-4 .continue').addClass('disabled');
    }
    if($('.group-vat-radio label input:checked').val() == 'no'){
      $('.vat-number-container').removeClass('active');
      $('#step-prod-service-3 .continue').removeClass('disabled');
    }
  });

  $('.utr-number input').on('input', function(){
    if($(this).val() != ''){
      $('#step-prod-service-3 .continue').removeClass('disabled');
    }
    else{
      $('#step-prod-service-3 .continue').addClass('disabled');
    }
  });

  $('.vat-number-container input').on('input', function(){
    if($(this).val() != ''){
      $('#step-prod-service-4 .continue').removeClass('disabled');
    }
    else{
      $('#step-prod-service-4 .continue').addClass('disabled');
    }
  });

  $('#step-prod-service .continue').on('click', function(){
    $('.step').removeClass('active');
    $('#step-prod-service-2').addClass('active');
  });

  $('#step-prod-service-2 .continue').on('click', function(){
    $('.step').removeClass('active');
    $('#step-prod-service-3').addClass('active');
  });

  $('#step-prod-service-3 .continue').on('click', function(){
    $('.step').removeClass('active');
    $('#step-prod-service-4').addClass('active');
  });

  $('#step-prod-service-4 .continue').on('click', function(){
    $('.step').removeClass('active');
    $('#step-com-status').addClass('active');
  });

  $('#step-com-status .continue').on('click', function(){
    $('.step').removeClass('active');
    $('#step-maintenance-country').addClass('active');
  });


  $('#step-maintenance-country .continue').on('click', function(){
    $('.step').removeClass('active');
    $('#step-maintenance-service').addClass('active');
  });


  $('#step-maintenance-service .continue').on('click', function(){
    $('.step').removeClass('active');
    $('#step-regulation').addClass('active');
  });

  // $('#step-regulation .continue').on('click', function(){
  //   $('.step').removeClass('active');
  //   $('#step-account-details').addClass('active');
  // });

  $('#step-regulation .continue').on('click', function(){
    $('.step').removeClass('active');
    $('#step-terms').addClass('active');
  });

  $('#step-account-details .continue').on('click', function(){
    $('.step').removeClass('active');
    $('#step-terms').addClass('active');
  })

  $('#step-terms .continue').on('click', function(){
    $('.step').removeClass('active');
    $('#step-declaration').addClass('active');
  })

  var country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
  if(document.querySelector('[name="tags"]')){
    let country_tag = tagger(document.querySelector('[name="tags"]'), {
      completion: {
        list: country_list,
        delay: 400,
        min_length: 2
      }
    });
    country_tag.add_tag('United kingdom');
  }
  
  if(document.querySelector('#jurisdiction-country')){
    let j_country_tag = tagger(document.querySelector('#jurisdiction-country'), {
      completion: {
        list: country_list,
        delay: 400,
        min_length: 2
      } 
      });
      j_country_tag.add_tag('United kingdom');
  }


  if(document.querySelector('#beneficiary-countries')){
    let b_country_tag = tagger(document.querySelector('#beneficiary-countries'), {
      completion: {
        list: country_list,
        delay: 400,
        min_length: 2
      } 
      });
       b_country_tag.add_tag('United kingdom');
  }

  
  // back btn steps

  $('.back-btn').on('click', function(){

    if($(this).parents('.step').hasClass('auth')){
      $('.directors-check-holder').html(''); 
      $('.step').removeClass('active');
      $('.last-director').addClass('active');
    }
    else{
      $('.step').removeClass('active');
      $(this).parents('.step').prev().addClass('active');
    }

  })
  

  $('.additional-doc').on('click', function(){
    // $('.wpcf7-field-group-add').trigger('click');
    document.querySelector('.wpcf7-field-group-add').click();
  })


  var wpcf7Elm = document.querySelector( '.wpcf7' );
        
  if(wpcf7Elm){
      $('#submit-btn').on('click', function(){
          $('#submit-btn').html('SUBMITTING...');
      });
      wpcf7Elm.addEventListener( 'wpcf7mailfailed', function( event ) {
          $('#submit-btn').html('SUBMIT APPLICATION');
      }, false );
      wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
          $('#submit-btn').html('SUBMIT APPLICATION');
      }, false );
      wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
          $('#submit-btn').html('SUBMIT APPLICATION');
          $('.step').removeClass('active');
          $('#step-success').addClass('active');
      }, false );
  }

  $('label[for="terms-checked"]').on('click', function(){
    setTimeout(() => {
      if($('#terms-checked').is(':checked')){
        $('#step-terms .continue').removeClass('disabled');
      }
      else{
        $('#step-terms .continue').addClass('disabled');
      }
    }, 100);
  });

}) (jQuery);
