$(document).ready(function ()  {
    $(".preloader").fadeOut();
                            var appid  =  '<?=$_GET['appid']?>';
                            var now = new Date();
                            var hours = now.getHours();
                            hours += 3;
                            now.setHours(hours);
                            document.cookie =
                                    'APPID=' + appid +
                                    '; expires=' + now.toUTCString() +
                                    '; path=/';
                        $.ajax( {
                            url: 'http://career.inet.co.th:5000/api/v1/profile/'+appid,
                            type: 'GET',
                            contentType: 'json',
                            data: {},
                            beforeSend : function( xhr ) {
                                xhr.setRequestHeader( 'Authorization', 'de778c3f-c396-41a0-b9ea-6bb2a43a5e8c' );
                            },
                            success: function(result) {

                                // console.log('');
                                // console.log(JSON.stringify(result));

                                var usefield = JSON.stringify(result);
                                $("#account_title_th").val(result.user_profile.account_title_th);
                                $("#first_name_th").val(result.user_profile.first_name_th);
                                $("#last_name_th").val(result.user_profile.last_name_th);
                                $("#account_title_eng").val(result.user_profile.account_title_eng);
                                $("#first_name_eng").val(result.user_profile.first_name_eng);
                                $("#last_name_eng").val(result.user_profile.last_name_eng);
                                $("#id_card_num").val(result.user_profile.id_card_num);
                                $("#email").val(result.user_profile.email);
                                $("#mobile_no").val(result.user_profile.mobile_no);
                                $("#birth_date").val(result.user_profile.birth_date);
                                $("#age").val(result.user_profile.age);

                                if(result){
                                    swal({
                                    title: "โหลดข้อมูลผู้ทดสอบสำเร็จ!!",
                                    text: "สร้าง Username และ Password ในการล็อกอินด้วยค่ะ",
                                    type: "info",
                                    showCancelButton: false,
                                    showLoaderOnConfirm: false,
                                }, function () {
                                setTimeout(function () {
                                    swal("Ajax request finished!");
                                }, 2000);
                                });
                                }else {
                                    swal({
                                    title: "โหลดข้อมูลผู้ทดสอบไม่สำเร็จ!!",
                                    text: "APP NO ไม่เจอค่ะ",
                                    type: "warning",
                                    showCancelButton: false,
                                    showLoaderOnConfirm: false,
                                }, function () {
                                setTimeout(function () {
                                    swal("Ajax request finished!");
                                }, 2000);
                                });

                                }
                            }
                         });

    $("#formValidate").validate({
        rules: {
            username: {
                required: true,
                minlength: 6
            },
            password: {
                required: true,
                minlength: 8
            },
            confirm_password: {
                required: true,
                minlength: 8,
                equalTo: "#password"
            },
            curl: {
                required: true,
                url: true
            },
            crole: "required",
            ccomment: {
                required: true,
                minlength: 15
            },
            cgender: "required",
            cagree: "required",
            },
        //For custom messages
        messages: {
            username: {
                required: "* Username ที่จัดเก็บในฐานข้อมูล จะเก็บตัวอักษรภาษาอังกฤษเป็นตัวพิมพ์เล็กเท่านั้น (case sensitive)",
                minlength: "* กรุณาระบุ Username อย่างน้อย 6 ตัวอักษร และเป็นตัวอักษรพิมพ์เล็ก 1 ตัวอักษรและผสมตัวเลขอารบิกได้"
            },
            password: {
                required: "* พาสเวิร์ดต้องมีตัวอักษรเล็กหรือใหญ่ผสมตัวเลขค่ะ",
                minlength: "* กรุณาระบุพาสเวิร์ดอย่างน้อย 8 ตัวอักษร"
            },
            confirm_password: {
                required: "* กรุณาคอนเฟิร์มพาสเวิร์ดให้ตรงกันอีกครั้งค่ะ",
                minlength: "* พาสเวิร์ดไม่ตรงกันค่ะ"
            },
            curl: "Enter your website",
            },
            errorElement: 'div',
            errorPlacement: function(error, element) {
                var placement = $(element).data('error');
                if (placement) {
                    $(placement).append(error)
                } else {
                    error.insertAfter(element);
                }
            },
            invalidHandler: function(e, validator) {
                var errors = validator.numberOfInvalids();
                if (errors) {
                    $('.error-alert-bar').show();
                }
            },
            submitHandler: function(form) {
                // $('.error-alert-bar').hide();
                // $('.success-alert-bar').show().delay(5000).fadeOut();
                //form.preventDefault();

                var obj = {};
                // var elements = form.querySelectorAll( "input, select, textarea" );
                // for( var i = 0; i < elements.length; ++i ) {
                //     var element = elements[i];
                //     var name = element.name;
                //     var value = element.value;

                //     if( name ) {
                //         obj[ name ] = value;
                //     }
                // }
                obj[ 'mobile_no' ] = $("#mobile_no").val();
                obj[ 'username' ] = $("#username").val();
                obj[ 'password' ] = $("#password").val();
                obj[ 'ref_code' ] = $("#ref_code").val();
                obj[ 'clientId' ] = $("#clientId").val();
                obj[ 'secretKey' ] = $("#secretKey").val();

            var data    = JSON.stringify( obj );

            $.ajax({
                type: "POST",
                // url: "https://testoneid.inet.co.th/api/register_api",
                url: "https://one.th/api/register_api",
                contentType: 'application/json',
                data: data,
                // data: {mobile_no:$("#mobile_no").val(), username:$("#username").val(), password:$("#password").val(), ref_code:$("#ref_code").val(), clientId:$("#clientId").val(), secretKey:$("#secretKey").val()},
                success: function(result) {
                    console.log(result.result);
                    if(result.result == 'Fail'){
                        $('.error-alert-bar').show();
                        $.each(result.errorMessage,function(i , item){
                            console.log(item);
                            $('html, body').animate({scrollTop: '0px'}, 300);
                            $('.error-alert-bar').append('<p>'+i+' :'+item+'</p>');
                        })

                    }else{

                      $.ajax({
                            type: 'POST',
                            url: 'myinsert.php',
                            dataType: 'html',
                            data: $('form').serialize(),
                            success: function(result) {
                                // alert(data);
                                console.log(result);
                                $('.error-alert-bar').hide().delay(5000).fadeOut();
                                $('.success-alert-bar').show().delay(5000).fadeOut();

                                // Swal({
                                //     title: 'ระบบได้ลงทะเบียนผู้ใช้เรียบร้อยแล้ว',
                                //     text: "กรุณา Activate อีเมล เพื่อล็อกอินเข้าสู่แบบทดสอบ",
                                //     type: 'success',
                                //     showCancelButton: false,
                                //     confirmButtonText: 'ตกลง'
                                //         }).then((result) => {
                                //             if (result.value) {
                                    window.location.href = "login.php";
                                //      }
                                // });
                            }
                        });
                    }
                    // console.log(result);
                }
            });
        // Send to for Record Database.
        // var all_data = $('form').serialize();
        // alert(all_data);
        }
    });
});
