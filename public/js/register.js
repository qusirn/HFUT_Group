$(document)
    .ready(function() {
      $('#register')
        .form({
        inline : true,
        on     : 'blur',
          fields: {
            Firstname: {
              identifier  : 'Firstname',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your Firstname'
                },
              ]
            },
            Lastname: {
              identifier  : 'Lastname',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your Lastname'
                },
              ]
            },
            Username: {
              identifier  : 'Username',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your Username'
                },
              ]
            },
            term: {
              identifier  : 'term',
              rules: [
                {
                  type   : 'checked',
                  prompt : 'You must agree to the terms and conditions'
                },
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            },
          }
        })
      ;



      $('#login')
        .form({
        inline : true,
        on     : 'blur',
          fields: {
            Username: {
              identifier  : 'Username',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your Username'
                },
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            },
          }
        })
      ;

      $('.shape').shape();
      

      $('.changepage')
        .on('click', function(event) {
          $('.shape').shape('flip over');
      });

    })
  ;