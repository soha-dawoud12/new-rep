<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Baraa WebSite</title>
    <?php include '../admin-blocks/layouts/head-resources.php' ?>

</head>

<body>






    <div class="product-page">
        <section class="section-1 mb-5">
            <div class="update-image">
                <span class="edit">
                    <i class="fa fa-plus"></i>
                </span>
                <input type="file" name="image" id="" style="display: none;">
            </div>

            <button class="our-save-btn">SAVE</button>

        </section>
        <section class="section-2  ">
            <div class="container">
                <div class="text">
                    <div class="row d-flex justify-content-center  align-items-center p-4  mr-md-5 ml-md-5">

                        <div class="col-12 col-lg-4  ">
                            <div class="client-text  mb-4 ">
                                <h6 class="text-uppercase">client</h6>
                                <h5 data-name="name" data-type="text">sammeer kraem . ux</h5>
                            </div>
                            <div class="project-text mb-4 ">
                                <h6 class="text-uppercase">project</h6>

                                <h5 data-name="name" data-type="textarea">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</h5>
                            </div>
                        </div>
                        <div class=" detalis col-12 col-lg-8 ">

                            <h6 class="text-uppercase">
                                detalis
                            </h6>
                            <p data-type="textarea" data-name="name">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            </p>

                        </div>
                    </div>

                    <div class="text-right">
                        <button class="our-save-btn">SAVE</button>
                    </div>


                </div>
            </div>

        </section>
        <section class="section-3">
            <div class="container-fluid">
                <div class="project mb-3">
                    <div class="update-image">
                        <span class="edit">
                            <i class="fa fa-plus"></i>
                        </span>
                        <input type="file" name="image" id="" style="display: none;">
                    </div>
                    <img src="../uploads/project1.png" alt="project_img" class="img-fluid   w-100" title="project"  style="max-height :1080px !important;">
                </div>
                <div class="project mb-3">
                    <div class="update-image">
                        <span class="edit">
                            <i class="fa fa-plus"></i>
                        </span>
                        <input type="file" name="image" id="" style="display: none;">
                    </div>
                    <img src="../uploads/project1.png" alt="project_img" class="img-fluid w-100  " title="project"  style="max-height :1080px !important;">
                </div>
                <div class="project mb-3">
                    <div class="update-image">
                        <span class="edit">
                            <i class="fa fa-plus"></i>
                        </span>
                        <input type="file" name="image" id="" style="display: none;">
                    </div>

                    <img src="../uploads/project3.png" alt="project_img" class="img-fluid w-100 " title="project"  style="max-height :3598px !important;">
                </div>

                <div class="project add-project mb-3">
                    <div class="add-image">
                        <span class="add">
                            <i class="fa fa-plus"></i>
                        </span>
                        <input type="file" name="image" id="" style="display: none;">
                    </div>
                </div>
            </div>
        </section>





    </div>

    <?php include '../admin-blocks/layouts/footer.php' ?>

    <?php include '../admin-blocks/layouts/foot-resources.php' ?>

</body>

</html>