<?php $this->view("layout/header"); ?>

    <div class="row course justify-content-center" uk-scrollspy="cls:uk-animation-slide-left; repeat:true; delay: 200">
        <div class="col-md-9" style="margin-top: 3em; margin-bottom: 3em;">
            <h2><?php echo $this->data["course"]["Name"]; ?></h2>
            <div class="row">
                <div class="col-md-6" style="margin-bottom: 3em;">
                    <img src="<?php echo $this->get_url($this->data["course"]["Image"]) ?>" alt="">
                </div>
                <div class="col-md-6">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Price:</th>
                                <td><?php echo '$'. $this->data["course"]["Price"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Start Date:</th>
                                <td><?php echo $this->data["course"]["StartDate"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">End Date:</th>
                                <td><?php echo $this->data["course"]["EndDate"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Learning Day:</th>
                                <td><?php echo $this->data["course"]["LearningDay"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Start Hour:</th>
                                <td><?php echo $this->data["course"]["StartHour"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">End Hour:</th>
                                <td><?php echo $this->data["course"]["EndHour"] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <form action="<?php echo $this->get_url("../Course/enroll") ?>" method="post">
                            <button name="btnEnroll" value="<?php echo $this->data["course"]["Name"]; ?>" type="submit" class="btn btn-secondary">COUNT ME IN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->view("layout/footer"); ?>