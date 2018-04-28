$(document)
    .ready(function () {
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
                                prompt: '请填写用户名'
                            }
                        ]
                    },
                    tel: {
                        identifier: 'tel',
                        rules: [
                            {
                                type: 'empty',
                                prompt: '请填写手机号'
                            },
                            {
                                type: 'exactLength[11]',
                                prompt: '手机号格式错误'
                            }
                        ]
                    },
                    password: {
                        identifier: 'password',
                        rules: [
                            {
                                type: 'empty',
                                prompt: '请填写密码'
                            },
                            {
                                type: 'minLength[6]',
                                prompt: '密码至少 {ruleValue} 位'
                            }
                        ]
                    },
                    match: {
                        identifier: 'verify',
                        rules: [
                            {
                                type: 'match[password]',
                                prompt: '密码输入不一致'
                            }
                        ]
                    },
                    captcha: {
                        identifier: 'captcha',
                        rules: [
                            {
                                type: 'empty',
                                prompt: '请填写4位验证码!!!'
                            }
                        ]
                    }
                }
            })
        $('#login')
            .form({
                inline: true,
                on: 'blur',
                fields: {
                    tel: {
                        identifier: 'tel',
                        rules: [
                            {
                                type: 'empty',
                                prompt: '请填写手机号'
                            },
                            {
                                type: 'exactLength[11]',
                                prompt: '手机号格式错误'
                            }
                        ]
                    },
                    password: {
                        identifier: 'password',
                        rules: [
                            {
                                type: 'empty',
                                prompt: '请填写密码'
                            },
                            {
                                type: 'minLength[6]',
                                prompt: '密码至少 {ruleValue} 位'
                            }
                        ]
                    }
                }
            })
        $('.shape').shape()
        $('.changepage').on('click', function (event) {
            $('.shape').shape('flip over')
        })
        var countdown = 60
        var timer = null
        $('.captcha_button').on('click', function (event) {
            var obj = $('#btn')
            if ($('#tel_num').val() == '') {
                alert('请先输入手机号')
            } else {
                settime(obj)
                console.log("wang");
            }
            var user = {
                'tel': $('#tel_num').val()
            }
            $.ajax({
                headers: {
                    'X-XSRF-TOKEN': $.cookie('XSRF-TOKEN')
                },
                type: 'post',
                url: '/Postcaptcha',
                contentType: 'application/json;charset=utf-8',
                data: '{"tel":' + $('#tel_num').val() + '}'
            })
        })
        function settime (obj) {
            clearInterval(timer)
            if (countdown == 0) {
                obj.removeAttr("disabled")
                obj.html('获取')
                countdown = 60
                return
            } else {
                obj.attr("disabled","disabled")
                obj.html('重发(' + countdown + ')')
                countdown--
            }
            timer = setTimeout(function () {
                settime(obj)
            }, 1000)
        }
    })
