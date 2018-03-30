$(document)
    .ready(function() {
          $('#register')
          .form({
              inline: true,
              on: 'blur',
              fields: {
                  name: {
                      identifier: 'name',
                      rules: [
                          {
                              type: 'empty',
                              prompt: 'Please enter your name'
                          }
                      ]
                  },
                  tel: {
                      identifier: 'tel',
                      rules: [
                          {
                              type: 'empty',
                              prompt: 'Please enter a username'
                          }
                      ]
                  },
                  password: {
                      identifier: 'password',
                      rules: [
                          {
                              type: 'empty',
                              prompt: 'Please enter a password'
                          },
                          {
                              type: 'minLength[6]',
                              prompt: 'Your password must be at least {ruleValue} characters'
                          }
                      ]
                  },
                  captcha: {
                      identifier: 'captcha',
                      rules: [
                          {
                              type: 'empty',
                              prompt: '!!!'
                          }
                      ]
                  },
              }
          });
          $('#login')
          .form({
              inline: true,
              on: 'blur',
              fields: {
                  username: {
                      identifier: 'username',
                      rules: [
                          {
                              type: 'empty',
                              prompt: 'Please enter your Username'
                          },
                      ]
                  },
                  password: {
                      identifier: 'password',
                      rules: [
                          {
                              type: 'empty',
                              prompt: 'Please enter your password'
                          },
                          {
                              type: 'length[6]',
                              prompt: 'Your password must be at least 6 characters'
                          }
                      ]
                  },
                }
            });
            $('.shape').shape();
            $('.changepage').on('click', function(event) {
                $('.shape').shape('flip over');
            });
        });
