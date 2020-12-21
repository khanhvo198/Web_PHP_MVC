<div class="col-lg-4 d-flex flex-column align-items-center">
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $this->get_url("../public/images/myclass/courseimage.png") ?>" class="card-img-top" alt="...">
        <div class="card-body p-1 d-flex flex-column align-items-center">
            <h5 class="card-title text-center"><?php echo $course["Name"] ?></h5>
            <form action="<?php echo $this->get_url("../MyClass/detail"); ?>" method="post">
                <button type="submit" class="btn btn-secondary d-flex justify-content-center align-items-center">Launch</button>
            </form>
        </div>
    </div>
</div>