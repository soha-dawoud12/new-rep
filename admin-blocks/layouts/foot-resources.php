<script src="../assets/js/jQuery3.4.1.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"> </script>
<script src="../assets/js/swiper.min.js"> </script>
<script src="../assets/js/fullpage.min.js"></script>

<script src="../assets/js/jquery.fancybox.min.js"> </script>
<script src="../assets/js/typed.js"> </script>

<script>

    $(document).ready(function () {

        var $header_top = $('.header-top');

        // toggle menu  web
    $header_top.find('a.toggle-menu').on('click', function() {
        $(this).parent().toggleClass('open-menu ');

    });
        new Swiper('.aboutus  .testimonials_section .swiper-container', {
             slidesPerView: 1,
            autoplay:false,

            lazy: true,
            pagination: {
                el: '.testimonials_section .swiper-pagination',
                clickable: true,
            },


        });

        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());
    });


    // fullpage customization
    $('#fullpage').fullpage({
        autoScrolling:true,
        scrollHorizontally: true,
        sectionsColor: '#F9F9F9',
        background:'#ED1E53',
        sectionSelector: '.vertical-scrolling',
        slideSelector: '.horizontal-scrolling',
        navigation: true,
        slidesNavigation: true,
        controlArrows: false,
        anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection'],
        menu: '#menu',


    });

    if($("html").find(".aboutus").length > 0){
        if($(".typed").length){     // the condition is new
            var words = $(".typed").data("words").split("|");
            var typed = $(".typed");
            $(function() {
                typed.typed({
                    strings: [words],
                    typeSpeed: 120,
                    loop: true,
                });
            });
        }

    }

    // Admin Action

        // لاظهار فورم اختيار الملف عند الضغط على ايقونة بلس
        $(".update-image .edit , .add-image .add").on("click" , function(e){
            // e.preventDefault();
            // e.stopPropagation();
            $(this).next("input[type='file']").click();
        });

    $(".update-image input[type='file']").on("change" , function(){
        var input = this;
        var url = $(this).val();
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
            var reader = new FileReader();

            reader.onload = function (e) {
                if($(input).parents(".home").length > 0){
                    // لتغيير صورة الخلفية في صفحة الهوم عند اختيار الملف
                    $(input).parents("div.section").css('backgroundImage', `url(${e.target.result})`);
                    let saveBtn = $(input).parents("div.section").find('.our-save-btn');
                    saveBtn.css("display" , "block");
                    saveBtn.show();
                }else if($(input).parents(".section-1").length > 0 ){
                    // لتغيير صورة الخلفية في صفحة الهوم عند اختيار الملف
                    $(input).parents(".section-1").css('backgroundImage', `url(${e.target.result})`);

                }
                else if($(input).parents(".aboutus").length > 0 || $(input).parents(".project").length > 0 ){
                    //لتغيير الصورة عند اختيار الملف
                    $(input).parents("figure , .logo , .project").find("img").attr("src" , e.target.result);
                    //this new
                }else if($(input).parents(".protofolio").length > 0){
                    $(input).parents(".entry-box-2.box-1").find("img").attr("src" , e.target.result);
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    });

    $(".add-image input[type='file']").on("change" , function(){
        var input = this;
        var url = $(this).val();
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
            var reader = new FileReader();

            reader.onload = function (e) {
                if($(input).parents(".clients").length > 0){
                    $(".clients .row:first-of-type").append(`
                        <div class=" logo m-1 m-auto p-1 col-6   col-md-3 ">
                            <div class="ground  d-flex align-items-center justify-content-center " style=" height: 159px;">
                                <div class="update-image">
                                    <span class="edit">
                                        <i class="fa fa-edit"></i>
                                    </span>
                                    <input type="file" name="image" id="" style="display: none;">
                                </div>
                                <div class="delete-image">
                                    <span class="delete">
                                        <i class="fa fa-trash"></i>
                                    </span>
                                </div>

                                <img src="${e.target.result}" class="img-fluid size" alt="newline" title="newline" style=" height: 115px;">
                            </div>
                        </div>
                    `);
                }else if( $(input).parents(".product-page").length > 0){
                    console.log('s');
                    $(".project.add-project").before(`
                        <div class="project mb-3">
                            <div class="update-image">
                                <span class="edit">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <input type="file" name="image" id="" style="display: none;">
                            </div>

                            <img src="${e.target.result}" alt="project_img" class="img-fluid w-100 min-vh-100" title="project">
                        </div>
                    `);
                    //this new
                }else if($(input).parents(".protofolio").length > 0){
                    $(".entry-box-2.box-1.add-protofolio").before(`
                        <div class="col p-0 entry-box-2 box-1 wow fadeInDown" data-wow-delay=700ms" data-wow-duration=".7s">
                            <a href="products.php" class="d-block">
                                <img src="${e.target.result}" alt="" class="img-fluid">
                                <div class="entry-body d-block admin">
                                    <input type="text" value="" placeholder="enter value" class="form-control">
                                </div>

                            </a>
                            <div class="update-image">
                                <span class="edit">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <input type="file" name="image" id="" style="display: none;">
                            </div>
                        </div>
                    `);
                }
                //
            }
            reader.readAsDataURL(input.files[0]);
        }
    });



    $(".typed").on("click" , function(){
        $(this).hide();
        $(this).next(".form-group").show();
    });

    $(".aboutme pre").on("click" , function(){
        let content = $(this).text();
        $(this).replaceWith(`<textarea class="form-control" name="desc">${content}</textarea>`)
    });

    $("[data-name]").on("click" , function(){
        let content = $(this).text();
        let name = $(this).data("name");
        let type = $(this).data("type");
        if(type == 'text'){
            $(this).replaceWith(`<input class="form-control" type="text" name="${name}" value="${content}" />`)
        }else if(type == 'textarea'){
            $(this).replaceWith(`<textarea class="form-control" name="${name}" style="min-height:200px">${content}</textarea>`)
        }
    });

    //this new
    $("body").on("click" , ".protofolio.admin .entry-box-2 a" , function(e){
        e.preventDefault();
    });
    //


</script>

