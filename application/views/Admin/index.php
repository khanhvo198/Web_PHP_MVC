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
                            <!-- <button type="button" name="add_user" id="add_user" class="btn btn-success btn-sm"></button> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="user_table">
                            <thead>
                                <tr>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




        <div class="modal fade" id="edit-user" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="edit-user-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="edit-user-label">View User</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="inputName">FirstName:</label>
                                <input type="text" class="form-control" name="first_name"  id="first_name-edit" disabled>
                            </div>
                            <div class="form-group">
                                <label for="inputPrice">LastName</label>
                                <input type="text" class="form-control" name="last_name" id="last_name-edit" disabled>
                            </div>
                            <div class="form-group">
                                <label for="inputStartDate">Email:</label>
                                <input type="email" class="form-control" name="email" id="email-edit" disabled>
                            </div>
                            <div class="form-group">
                                <label for="inputEndDate">Phone:</label>
                                <input type="number" class="form-control" name="phone" id="phone-edit" disabled>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <!-- <button type="button" class="btn btn-primary" id="update-user">Edit</button> -->
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
                                <!-- <input type="text" class="form-control" name="learning_day" id="learning_day-add"> -->
                                <select class="form-control" name="learning_day" id="learning_day-add">
                                    <option>Monday</option>
                                    <option>Tuesday</option>
                                    <option>Wednesday</option>
                                    <option>Thursday</option>
                                    <option>Friday</option>
                                    <option>Saturday</option>
                                    <option>Sunday</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStartHour">StartHour:</label>
                                <input type="text" class="form-control" name="start_hour" id="start_hour-add" placeholder="hh:mm:ss">
                            </div>
                            <div class="form-group">
                                <label for="inputENdHour">EndHour:</label>
                                <input type="text" class="form-control" name="start_hour" id="end_hour-add" placeholder="hh:mm:ss">
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
                                <!-- <input type="text" class="form-control" name="learning_day" id="learning_day-edit"> -->
                                <select class="form-control" name="learning_day" id="learning_day-edit">
                                    <option>Monday</option>
                                    <option>Tuesday</option>
                                    <option>Wednesday</option>
                                    <option>Thursday</option>
                                    <option>Friday</option>
                                    <option>Saturday</option>
                                    <option>Sunday</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStartHour">StartHour:</label>
                                <input type="text" class="form-control" name="start_hour" id="start_hour-edit" placeholder="hh:mm:ss">
                            </div>
                            <div class="form-group">
                                <label for="inputENdHour">EndHour:</label>
                                <input type="text" class="form-control" name="start_hour" id="end_hour-edit" placeholder="hh:mm:ss">
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


    const getAllUser = () => {
        $.ajax({
            dataType: 'json',
            url: './Admin/getAllUser',
            success: (data) => {
                printUserData(data)
            }
        })

    }
    getAllUser()


    const printUserData = (data) => {
        rows = ``
        data.map((row) => {
            rows += `<tr>`
            rows += `<td width="100px;">${row.FirstName}</td>`
            rows += `<td>${row.LastName}</td>`
            rows += `<td>${row.Email}</td>`
            rows += `<td>${row.Phone}</td>`
            rows += `<td>`
            rows += `<div class="row justify-content-around">`
            rows += `<button class="btn btn-primary edit-user mb-3" style="color:white" data-toggle="modal" data-target="#edit-user" user-email="${row.Email}" >View      <i class="fa fa-eye" aria-hidden="true"></i></button>`
            rows += `<button class="btn btn-danger remove-user mb-3" user-email="${row.Email}"><i class="fa fa-trash" aria-hidden="true"></i></button>`
            rows += `</div>`
            rows += `</td>`
            rows += `tr`
        })

        $("#user tbody").html(rows)

    }



    $("body").on("click" , ".remove-user" , function () {
        let email = $(this).attr("user-email")
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: './Admin/deleteUser',
            data: {
                email: email
            },
            success: function(data) {
                getAllUser()
            }
        })
    })


    $("body").on("click", ".edit-user" , function() {
        let email = $(this).attr("user-email")
        // console.log(name)
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: './Admin/getUser',
            data: {
                email: email
            },
            success: function(data) {
                $("#first_name-edit").val(data.FirstName);
                $("#last_name-edit").val(data.LastName);
                $("#email-edit").val(data.Email);
                $("#phone-edit").val(data.Phone);
            }
        })
    })



    // $(".modal").on("click" , "#update-user", function() {

    //     let firstName = $("#first_name-edit").val()
    //     let lastName = $("#last_name-edit").val()
    //     let email = $("#email-edit").val()
    //     let phone = $("#phone-edit").val()

    //     $.ajax({
    //         dataType:'json',
    //         type: 'post',
    //         url : './Admin/editCourse',
    //         data : {
    //             firstName : firstName,
    //             lastName : lastName,
    //             email : email,
    //             phone : phone,

    //         },
    //         success: (data)=> {
    //             console.log(data)
    //             $("#first_name-edit").val("")
    //             $("#last_name-edit").val("")
    //             $("#email-edit").val("")
    //             $("#phone-edit").val("")
    //             getAllUser()
    //             $(".modal").modal('hide')
    //         }
    //     })

    // })












</script>














<script>
    $("#user").show()
    $("#course").hide()
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
                // console.log(data)
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
                // console.log(data)
                // $("#name-add").val("")
                // $("#price-add").val("")
                // $("#start_date-add").val("")
                // $("#end_date-add").val("")
                // $("#learning_day-add").val("")
                // $("#start_hour-add").val("")
                // $("#end_hour-add").val("")
                // $("#image-add").val("")
                // $("#description-add").val("")
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