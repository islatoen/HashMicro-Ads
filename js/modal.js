const getFirstUrl = location.protocol + '//' + location.host + location.pathname
        const paramsOnlyAll = window.location.search;
        const urlParams = new URLSearchParams(paramsOnlyAll);
        

        var today = new Date();
        today.setHours(0,0,0,0); 
        let givendate = new  Date(localStorage.getItem("hmfvisdate"));

        if(today > givendate || localStorage.getItem("hmfvisdate") == null) {
            localStorage.setItem("hmfvisdate", today);
            localStorage.setItem("hmfvis", getFirstUrl);
            localStorage.setItem("hmcampaign", document.title);
        }

        $('.campaigndata').val(localStorage.getItem("hmcampaign"))
        $('.lvis').val(getFirstUrl)
        $('.fvis').val(localStorage.getItem("hmfvis"))
        
        const sourcedt = [{"a":16,"b":"blog"},{"a":17,"b":"blogads"},{"a":19,"b":"adwords"},{"a":21,"b":"ig"},{"a":21,"b":"fb"},{"a":22,"b":"edm"},{"a":24,"b":"linkedin"},{"a":26,"b":"gdn"},{"a":27,"b":"max"},{"a":28,"b":"youtube"},{"a":29,"b":"cold"}]
// missing medium gdn, sitelink, newsletter, ig, youtube
        
        for(var key of urlParams.keys()) {
            for (var keydt in sourcedt) {
                if(key == sourcedt[keydt].b){
                    $('#sources').val(sourcedt[keydt].a)
                    if (urlParams.get("gclid") != null) {
                        $('.gclid').val(urlParams.get('gclid'))
                        $('.sources').val(19)
                    }else if (urlParams.get("fbclid") != null) {
                        $('.sources').val(20)
                        $('.gclid').val(urlParams.get('fbclid'))
                    }
                }
            }
        }

        
        $('.hm-contact-form').submit(function(event) {
              event.preventDefault(); // Prevent direct form submission
                      $.ajax({
                          url: 'https://website-api.hashmicro.com/api/add',
                          type: 'post',
                          data: $(this).serialize(),
                          dataType: 'json',
                          tryCount : 0,
                          retryLimit : 1,
                          beforeSend: function() {    
                            //   $('.alert-msg').html( "<p>Processing input:</p>" );
                              $('.submit-button').prop('disabled', true);
                          },
                          success: function( _response ){
                              // The Ajax request is a success. _response is a JSON object
                              var error = _response.errors;
                              var success = _response.status;
                              console.log(_response);
                              console.log(success);
                              if(success != "200") {
                                  $('.alert-msg').html('<p>'+error.message+'</p>');
                                  $('.submit-button').prop('disabled', false);
                              } else {
                                //   $('.alert-msg').html("<p>Success:</p>");
                                  window.location.href ="https://www.hashmicro.com/id/terimakasih"
                              }
                          },
                          error: function(jqXhr, json, errorThrown){
                              var error = jqXhr.responseJSON;
                              console.log(json)
                            if (json == 'error') {
                                this.url = "https://website-api.hashmicro.com/api/add/2";
                                this.tryCount++;
                                if (this.tryCount <= this.retryLimit) {
                                    //try again
                                    $.ajax(this);
                                    return;
                                }            
                                return;
                            }
                            if (jqXhr.status == 500) {
                                //   console.log(error.errors)
                                // $('.alert-msg').html( "<p>gagal:</p>" );
                                for(var key in error.errors) {
                                    for (var key1 in error.errors[key]) {
                                        $('.alert-msg').html('<span>'+error.errors[key][key1]['id']+'</span>');
                                    }
                                }
                            } else {
                                //handle error
                            }

                            $('.submit-button').prop('disabled', false);
                          }
              });
          });