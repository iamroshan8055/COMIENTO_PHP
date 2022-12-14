<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
    <head>
        <title> Payment </title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <style>
          @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);

        .body {
        // custom fonts, etcetera can go here 
        }

        .jumbotron-flat {
          background-color: solid #4DB8FFF;
          height: 100%;
          border: 1px solid #4DB8FF;
          background: white;
          width: 100%;
        text-align: center;
        overflow: auto;
        }

        .paymentAmt {
            font-size: 80px; 
        }

        .centered {
            text-align: center;
        }

        .title {
         padding-top: 15px;   
        }
        .btn-cool-blues {
          background: #2175b0; 
          background: -webkit-linear-gradient(to right, #6dd5ed, #2175b0); 
          background: linear-gradient(to right, #6dd5ed, #2175b0);
          color: #fff;
          border: 3px solid #eee;
          transition-duration: 1000ms;
          transition-property: background, transform;
        }
        .btn-cool-blues:hover {
            background: #6dd5ed; 
            background: -webkit-linear-gradient(to right, #2175b0, #6dd5ed); 
            background: linear-gradient(to right, #2175b0, #6dd5ed);
            color: #fff;
            border: 3px solid #eee;
        }
        </style>
    </head>
    <body style="font-family: 'Open Sans', sans-serif;">
        <div class="container">
        <div class="centered title"><h1>Welcome to our checkout.</h1></div>
     </div>
     <hr class="featurette-divider"></hr>
         <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <div class="tab-content">
  <div id="stripe" class="tab-pane fade in active">
                       <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
          <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="???" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
            <br>
          <div class='form-row'>
              <div class='form-group required'>
                <div class='error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.
              
              </div>
            </div>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' size='4' type='text'>
              </div>
                    
            </div>
            <div class='form-row'>
              <div class='form-group card required'>
                  <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
              </div>
            </div>
             <div class='form-row'>
              <div class='form-group card required'>
                <label class='control-label'>Billing Address</label>
                <input autocomplete='off' class='form-control' size='20' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
              </div>
              <div class='form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
              </div>
              <div class='form-group expiration required'>
                <label class='control-label'>Year</label>
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
              </div>
            </div>
    
           
            <div class='form-row'>
              <div class='form-group'>
                         <label class='control-label'></label>
                      
               <button class='form-control btn btn-primary' type='submit'> Continue ???</button>
          
              </form>    
                
              </div>
            </div>    
            
              </div>
              
                <div id="paypal" class="tab-pane fade">
                <form action="?" id="paypalForm" method="POST">
                <div class="paypalResult"><!-- content will load here --></div>
               <br>
                <input type="hidden" id="action" value="paypal"></input>
                <input type="hidden" id="token" value="token-supersecuretoken123123123"></input>
               <a href="#paypal"><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" alt="paypal" width="100%"></a>
               <br><br><br>
                  <a class='form-control btn btn-cool-blues submit-button' type='submit'> Continue ???</a>
              </div>
            </div>
            
            
          
        </div>   
     
        <div class="col-sm-6">
           <label class='control-label'></label><!-- spacing -->
        
          <div class="alert alert-info"">Please choose your method of payment and hit continue. You will then be sent down to pay using your selected payment option.</div>
       <br>
         <div class="btn-group-vertical btn-block">
             <a class="btn btn-default" style="text-align: left;" data-toggle="tab" href="#stripe"><i class="fab fa-cc-visa"></i><i class="fab fa-cc-mastercard"></i>Debit/Credit Card</a>
          <a class="btn btn-default" style="text-align: left;" data-toggle="tab" href="#paypal"><i class="fab fa-cc-paypal"></i>PayPal</a>
          </div>
          
          <br><br><br>
         
         <div class="jumbotron jumbotron-flat">
    <div class="center"><h2><i>BALANCE DUE:</i></h2></div>
           <div class="paymentAmt">100</div>
        </div>
            <br><br><br>
        </div></div> 
            </div>
        </div>
        </form>
        <script>
          $(function() {
            $('form.require-validation').bind('submit', function(e) {
              var $form         = $(e.target).closest('form'),
                  inputSelector = ['input[type=email]', 'input[type=password]',
                                   'input[type=text]', 'input[type=file]',
                                   'textarea'].join(', '),
                  $inputs       = $form.find('.required').find(inputSelector),
                  $errorMessage = $form.find('div.error'),
                  valid         = true;

              $errorMessage.addClass('hide');
              $('.has-error').removeClass('has-error');
              $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                  $input.parent().addClass('has-error');
                  $errorMessage.removeClass('hide');
                  e.preventDefault(); // cancel on first error
                }
              });
            });
          });

          $(function() {
            var $form = $("#payment-form");

            $form.on('submit', function(e) {
              if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                  number: $('.card-number').val(),
                  cvc: $('.card-cvc').val(),
                  exp_month: $('.card-expiry-month').val(),
                  exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
              }
            });

            function stripeResponseHandler(status, response) {
              if (response.error) {
                $('.error')
                  .removeClass('hide')
                  .find('.alert')
                  .text(response.error.message);
              } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='reservation[stripe_token]' value='" + token + "'/>");
                $form.get(0).submit();
              }
            }
          })



        $(document).ready(function() {

            function loading() {
                $('.paypalResult').show().html('<br><div class="alert alert-info">Please wait while we redirect you to PayPal to finish the checkout.</div>');
            }

            function formResult(data) {
                $('.paypalResult').show().html('<br><div class="alert alert-success">Success: if you aren't redirected, hit the PayPal button.</div><meta http-equiv="refresh" content="2; url=https://paypal.ca">');
                $('#paypalForm input').val('');
            }

            function onSubmit() {
                $('#paypalForm').submit(function() {
                    var action = $(this).attr('action');
                    loading();
                    $.ajax({
                        url: action,
                        type: 'POST',
                        data: {
                            token: $('#token').val(),
                            action: $('#action').val()
                        },
                        success: function(data) {
                            formResult(data);
                        },
                        error: function(data) {
                            formResult(data);
                        }
                    });
                    return false;
                });
            }
            onSubmit();

        });

        </script>
    </body>
</html>