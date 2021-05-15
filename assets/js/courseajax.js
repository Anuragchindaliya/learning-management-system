$(document).ready(function () {

    $('#table_id').DataTable();

    readRecords();

    // admin insert course #############
    $("#addcourse").submit(function (event) {
        // console.log("hllo");
        
        var course_title = $("#courseTitle").val();
        var course_desc = $("#courseDesc").val();
        var course_id = $("#course_id").val();
        var course_admin = $("#adminName").text().trim();

        $.ajax({
            url: "../../admin/adminprocess.php",
            method: "post",
            data: {
                course_title: course_title,
                course_desc: course_desc,
                course_admin: course_admin,
                course_id:course_id,
            },
            success: function (data) {
                // console.log(data);
                $("#addModal").modal("hide");
                $("#addcourse").trigger("reset");
                $("#addcourse #course_id").val("");

                readRecords();

            }
        });

        event.preventDefault();
        return false;
    });  
});

// retrieve (get) course from database
function readRecords(){
    var readFlag = "readRecord";
    var course_admin = $("#adminName").text().trim();
    // console.log(course_admin);
    $.ajax({
        url:"../../admin/adminprocess.php",
        type:"post",
        data:{
            readFlag:readFlag,
            course_admin:course_admin,
        },
        success: function(data){
            // console.log(data);
            $("#addcourse").trigger("reset");
            $("#course_table").html(data);
        }
    })
}

// delete course from database
function deleteCourse(deleteId){
    
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this Course!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Poof! Your Course has been deleted!", {
            icon: "success",
            
          });
          
            $.ajax({
                url:"../../admin/adminprocess.php",
                type:"post",
                data:{
                    deleteId:deleteId,
                },
                success:function(data){
                    
                    readRecords();
                }
            });
        
          
        } else {
          swal("Your Course is safe!");
          
        }
      });
  
}

// get course details in input form from database
function editCourse(Id){
    console.log(`edit -`);
    $("#addModal").modal("show");
    
    var editId = Id;
    $.ajax({
        url:"../../admin/adminprocess.php",
        type:"post",
        // contentType:"json",
        data:{
            editId:editId,
        },
        success:function(data){
            var courseDetails = JSON.parse(data);
            console.log(courseDetails);
           $("#courseTitle").val(courseDetails.course_name);
         $("#courseDesc").val(courseDetails.course_desc);
         $("#course_id").val(courseDetails.course_id);
        }
    })

}