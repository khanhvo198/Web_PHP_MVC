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
                    <div class="comments col-md-12 mt-5">
                        <h3>Comments</h3>
                        <div class="comments-container">
                            
                        </div>

                    </div>
                    <div class="col-md-12 my-comment mt-5">
                        <h3>Your comment</h3>
                        <div class="card">
                            <div class="container row">
                                <img class="card-img-top"  src="<?php echo $this->get_url("../".$this->data['avatar'].'"') ?>" alt="Card image cap" style="width:5em;height:5em;border-radius:50%;margin-top:0.5em;margin-left:0.5em">   
                                <p style="margin:0;padding-left:3em;"><b><?php echo $_SESSION['email']; ?></b></p>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-8">
                                        <input type="text" class="form-control comment">
                                    </div>
                                    <div class="form-group col-4">
                                        <input type="submit" value="Submit" class="btn btn-primary comment-submit">
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $this->view("layout/footer"); ?>


<script>
    $("body").on('click', '.comment-submit', function() {
        let comment = $(".comment").val()
        // console.log('<?php echo $this->data["course"]["Name"]; ?>')
        $.ajax({
            url:'../addComment',
            dataType: 'json',
            type: 'post',
            data: {
                email: '<?php echo $_SESSION['email'];?>',
                courseName: `<?php echo $this->data["course"]["Name"]; ?>`,
                comment: comment
            },
            success: function(data) {
                // console.log(data)
                $(".comment").val('')
                getAllComment()
            }
        })
    })


    const getAllComment = () => {
        $.ajax({
            dataType: 'json',
            type: 'post',
            url: '../getAllComments',
            data: {
                courseName: `<?php echo $this->data["course"]["Name"]; ?>`
            },
            success: function(data) {
                printData(data)
            }

        })
    }
    getAllComment()

    const printData = (data) => {
        let rows = ``
        data.map((row) => {
            let src = row['avatar']
            let img_path = `<?php echo $this->get_url('')?>` + '../' +src
            rows +=`<div class="card mb-3">`
            rows +=`<div class="container row">`
            rows +=`<img class="card-img-top"  src="${img_path}" alt="Card image cap" style="width:5em;height:5em;border-radius:50%;margin-top:0.5em;margin-left:0.5em">`         
            rows += `<p style="margin:0;padding-left:3em;"><b>${row['Email']}</b></p>`
            rows += `</div>`
            rows += `<div class="card-body">`
            rows += `${row['Comment']}`
            rows += `</div>`
            rows += `</div>`         
        })
        $(".comments-container").html(rows)
    }



</script>