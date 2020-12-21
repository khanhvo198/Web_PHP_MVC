<?php $this->view("layout/header"); ?>


<div class="container-fluid">
    <div class="row">

        <div class="col-md-2 sidebar">
            <ul style="padding:0px;">
                <li>
                    <img src="<?php echo $this->get_url("../public/images/admin/user.png");?>" class="img-fluid" alt="" width="40px" height="40px">
                    <a class="tab-links" data-attr="user" >User</a>
                </li>
                <li>
                    <img src="<?php echo $this->get_url("../public/images/admin/course.png"); ?>" class="img-fluid" alt="" width="40px" height="40px">
                    <a class="tab-links" data-attr="course" >Course</a>
                </li>
                
            </ul>
        </div>


        <div id="user" class="col-sm-10 py-4">
            <span id="message"></span>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h2>User Management</h2>
                        </div>
                        <div class="col text-right">
                            <button type="button" name="add_user" id="add_user" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="user_table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>User Name</th>
                                    <th>User Contact No.</th>
                                    <th>User Email</th>
                                    <th>Created On</th>					
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>






        <div id="course" class="col-sm-10 py-4">
            <span id="message"></span>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h2>Course Management</h2>
                        </div>
                        <div class="col text-right">
                            <button type="button" name="add_course" id="add_course" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-course"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="user_table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>StartDate</th>
                                    <th>EndDate</th>
                                    <th>LearningDay</th>
                                    <th>StartHour</th>					
                                    <th>EndHour</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>







        <!--Modal Add Course -->
        <div class="modal fade" id="add-course" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="add-course-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="add-course-label">Add Course</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="inputName">Name:</label>
                                <input type="text" class="form-control" name="name"  id="name-add">
                            </div>
                            <div class="form-group">
                                <label for="inputPrice">Price</label>
                                <input type="number" class="form-control" name="price" id="price-add">
                            </div>
                            <div class="form-group">
                                <label for="inputStartDate">StartDate:</label>
                                <input type="date" class="form-control" name="start_date" id="start_date-add">
                            </div>
                            <div class="form-group">
                                <label for="inputEndDate">EndDate:</label>
                                <input type="date" class="form-control" name="end_date" id="end_date-add">
                            </div>
                            <div class="form-group">
                                <label for="inputLearningDate">LearningDay:</label>
                                <input type="text" class="form-control" name="learning_day" id="learning_day-add">
                            </div>
                            <div class="form-group">
                                <label for="inputStartHour">StartHour:</label>
                                <input type="text" class="form-control" name="start_hour" id="start_hour-add">
                            </div>
                            <div class="form-group">
                                <label for="inputENdHour">EndHour:</label>
                                <input type="text" class="form-control" name="start_hour" id="end_hour-add">
                            </div>
                            <div class="form-group">
                                <label for="inputImagePath">Image:</label>
                                <input type="text" class="form-control" name="image" id="image-add">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Description:</label>
                                <textarea type="date" class="form-control" name="description" id="description-add"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="add-course">Add</button>
                    </div>
                </div>
            </div>
        </div>





        <!--Modal Edit Course -->
        <div class="modal fade" id="edit-course" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="edit-course-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="edit-course-label">Edit Course</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="inputName">Name:</label>
                                <input type="text" class="form-control" name="name"  id="name-edit" disabled>
                            </div>
                            <div class="form-group">
                                <label for="inputPrice">Price</label>
                                <input type="number" class="form-control" name="price" id="price-edit">
                            </div>
                            <div class="form-group">
                                <label for="inputStartDate">StartDate:</label>
                                <input type="date" class="form-control" name="start_date" id="start_date-edit">
                            </div>
                            <div class="form-group">
                                <label for="inputEndDate">EndDate:</label>
                                <input type="date" class="form-control" name="end_date" id="end_date-edit">
                            </div>
                            <div class="form-group">
                                <label for="inputLearningDate">LearningDay:</label>
                                <input type="text" class="form-control" name="learning_day" id="learning_day-edit">
                            </div>
                            <div class="form-group">
                                <label for="inputStartHour">StartHour:</label>
                                <input type="text" class="form-control" name="start_hour" id="start_hour-edit">
                            </div>
                            <div class="form-group">
                                <label for="inputENdHour">EndHour:</label>
                                <input type="text" class="form-control" name="start_hour" id="end_hour-edit">
                            </div>
                            <div class="form-group">
                                <label for="inputImagePath">Image:</label>
                                <input type="text" class="form-control" name="image" id="image-edit">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Description:</label>
                                <textarea type="date" class="form-control" name="description" id="description-edit"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="update-course">Edit</button>
                    </div>
                </div>
            </div>
        </div>








    </div>
</div>








<?php $this->view("layout/footer");?>

<script>
    $("#user").hide()
    $("body").on("click" ,'.tab-links' , function () {
        let content = $(this).attr("data-attr")
        if(content === "user") {
            $("#course").hide()
            $("#user").show()

        } else {
            $("#user").hide()
            $("#course").show()
        }
    })


    $("body").on("click" , ".remove-course" , function () {
        let name = $(this).attr("course-name")
        // console.log(name)
        let parent = $(this).parent().parent().parent()
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: './Admin/deleteCourse',
            data: {
                course_name: name
            },
            success: function(data) {
                getAllCourse()
                // console.log(data)
            }
        })
    })



    $("body").on("click", ".edit-course" , function() {
        let name = $(this).attr("course-name")
        // console.log(name)
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: './Admin/getCourse',
            data: {
                course_name: name
            },
            success: function(data) {
                $("#name-edit").val(data.Name)
                $("#price-edit").val(data.Price)
                $("#start_date-edit").val(data.StartDate)
                $("#end_date-edit").val(data.EndDate)
                $("#learning_day-edit").val(data.LearningDay)
                $("#start_hour-edit").val(data.StartHour)
                $("#end_hour-edit").val(data.EndHour)
                $("#image-edit").val(data.Image)
                $("#description-edit").val(data.Description)
            }
        })
    })


    $(".modal").on("click" , "#update-course", function() {

        let name = $("#name-edit").val()
        // console.log(name)
        let price = $("#price-edit").val()
        let startDate = $("#start_date-edit").val()
        let endDate = $("#end_date-edit").val()
        let learningDay = $("#learning_day-edit").val()
        let startHour = $("#start_hour-edit").val()
        let endHour = $("#end_hour-edit").val()
        let image = $("#image-edit").val()
        let description = $("#description-edit").val()

        console.log(name)


        $.ajax({
            dataType:'json',
            type: 'post',
            url : './Admin/editCourse',
            data : {
                name : name,
                price : price,
                start_date : startDate,
                end_date : endDate,
                learning_day : learningDay,
                start_hour: startHour,
                end_hour: endHour,
                image: image,
                description: description
            },
            success: (data)=> {
                console.log(data)
                $("#name-add").val("")
                $("#price-add").val("")
                $("#start_date-add").val("")
                $("#end_date-add").val("")
                $("#learning_day-add").val("")
                $("#start_hour-add").val("")
                $("#end_hour-add").val("")
                $("#image-add").val("")
                $("#description-add").val("")
                getAllCourse()
                $(".modal").modal('hide')
            }
        })



    })









    $(".modal").on("click" ,"#add-course", function() {
        let name = $("#name-add").val()
        let price = $("#price-add").val()
        let startDate = $("#start_date-add").val()
        let endDate = $("#end_date-add").val()
        let learningDay = $("#learning_day-add").val()
        let startHour = $("#start_hour-add").val()
        let endHour = $("#end_hour-add").val()
        let image = $("#image-add").val()
        let description = $("#description-add").val()

        $.ajax({
            dataType:'json',
            type: 'post',
            url : './Admin/addCourse',
            data : {
                name : name,
                price : price,
                start_date : startDate,
                end_date : endDate,
                learning_day : learningDay,
                start_hour: startHour,
                end_hour: endHour,
                image: image,
                description: description
            },
            success: (data)=> {
                $("#name-add").val("")
                $("#price-add").val("")
                $("#start_date-add").val("")
                $("#end_date-add").val("")
                $("#learning_day-add").val("")
                $("#start_hour-add").val("")
                $("#end_hour-add").val("")
                $("#image-add").val("")
                $("#description-add").val("")
                getAllCourse()
                $(".modal").modal('hide')
            }
        })
    })




    const getAllCourse = () => {
        $.ajax({
            dataType: 'json',
            url: './Admin/getAllCourse',
            success: (data) => {
                printCourseData(data)
            }

        })
    }


    const printCourseData = (data) => {
        rows = ``
        data.map((row) => {
            rows += `<tr>`
            rows += `<td width="100px;">${row.Name}</td>`
            rows += `<td>${row.Price}</td>`
            rows += `<td>${row.StartDate}</td>`
            rows += `<td>${row.EndDate}</td>`
            rows += `<td>${row.LearningDay}</td>`
            rows += `<td>${row.StartHour}</td>`
            rows += `<td>${row.EndHour}</td>`
            rows += `<td>`
            rows += `<div class="row justify-content-around">`
            rows += `<button class="btn btn-primary edit-course mb-3" style="color:white" data-toggle="modal" data-target="#edit-course" course-name="${row.Name}" >Edit lessons</button>`
            rows += `<button class="btn btn-danger remove-course mb-3" course-name="${row.Name}"><i class="fa fa-trash" aria-hidden="true"></i></button>`
            rows += `</div>`
            rows += `</td>`
            rows += `tr`
        })

        $("#course tbody").html(rows)
    }

    getAllCourse()










</script>