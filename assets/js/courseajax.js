$(document).ready(function () {
  // $('#table_id').DataTable();

  readRecords();

  // admin insert course #############
  $("#addcourse").submit(function (event) {
    // console.log("hllo");
    $("#addCourseBtn").val("Please wait");
    $("#addCourseBtn").attr("disabled", true);

    var course_title = $("#courseTitle").val();
    var course_desc = $("#courseDesc").val();
    var course_url = $("#courseUrl").val();
    var course_id = $("#course_id").val();
    var course_admin = $("#adminName").text().trim();
    var course_image = $("#courseImage").val();
    var course_category = $("#courseCategory").val();
    var course_level = $("#courseLevel").val();
    // var course_fees = new Intl.NumberFormat('en-IN').format($("#courseFees").val());
    var course_fees = $("#courseFees").val();

    $.ajax({
      url: "../../admin/adminprocess.php",
      method: "post",
      dataType: "json",
      data: {
        add_course: "add_course",
        course_title: course_title,
        course_desc: course_desc,
        course_admin: course_admin,
        course_id: course_id,
        course_image: course_image,
        course_category: course_category,
        course_level: course_level,
        course_fees: course_fees,
        course_url: course_url,
      },
      // processData:false,
      // contentType:false,
      beforeSend: function () {
        console.log("Wait...");
        console.log(course_url);
      },
      success: function (data) {
        console.log(data);
        $("#addCourseBtn").attr("disabled", false);
        $("#addCourseBtn").val("Add course");
        $("#addModal").modal("hide");
        $("#addcourse").trigger("reset");
        $("#addcourse #course_id").val("");

        readRecords();
      },
      error: function (err) {
        console.log("Opps something went wrong ", err.responseText);
      },
    });

    event.preventDefault();
    return false;
  });

  // timing field for course duration

  // live search
  $("#live-search").on("keyup", function () {
    console.log("helo");
    var search_term = $(this).val();
    var course_admin = $("#adminName").text().trim();
    $.ajax({
      url: "../../admin/adminprocess.php",
      type: "POST",
      data: {
        check: "search",
        search: search_term,
        course_admin: course_admin
        
      },
      success: function (data) {
        $("#course_table").html(data);
      },
    });
  });
});

//image validation
function checkImage(image) {
  var formData = new FormData();
  var file = $("#courseImage").prop("files")[0];
  formData.append("Filedata", file);
  var t = file.type.split("/").pop().toLowerCase();
  if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
    alert("Please select a valid image file");
    $("#courseImage").val("");
    return false;
  }
  if (file.size > 1024000) {
    alert("Max Upload size is 1MB only");
    $("#courseImage").val("");
    return false;
  }
  console.log(image);
  return image;
}

// ///
// $('#clearText').click(function(){
//     $('.selectpicker').selectpicker('refresh');
// })

// retrieve (get) course from database
function readRecords() {
  var readFlag = "readRecord";
  var course_admin = $("#adminName").text().trim();
  // console.log(course_admin);
  $.ajax({
    url: "../../admin/adminprocess.php",
    type: "post",
    data: {
      readFlag: readFlag,
      course_admin: course_admin,
    },
    success: function (data) {
      // console.log(data);
      $("#addcourse").trigger("reset");
      //to deselect all the value after submision
      $(".selectpicker").selectpicker("refresh");
      $("#course_table").html(data);
    },
  });
}

// delete course from database
function deleteCourse(deleteId) {
  // mythis = this;
  swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this Course!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      // $(mythis).closest("tr").fadeOut();
      swal("Poof! Your Course has been deleted!", {
        icon: "success",
      });

      $.ajax({
        url: "../../admin/adminprocess.php",
        type: "post",
        data: {
          deleteId: deleteId,
        },
        success: function (data) {
          readRecords();
        },
      });
    } else {
      swal("Your Course is safe!");
    }
  });
}

// get course details in input form from database
function editCourse(Id) {
  console.log(`edit -`);
  $("#addModal").modal("show");

  var editId = Id;
  $.ajax({
    url: "../../admin/adminprocess.php",
    type: "post",
    // contentType:"json",
    data: {
      editId: editId,
    },
    success: function (data) {
      var courseDetails = JSON.parse(data);
      // console.log(courseDetails);
      $("#courseTitle").val(courseDetails.course_name);
      $("#courseDesc").val(courseDetails.course_desc);
      $("#courseUrl").val(courseDetails.course_url);
      $("#course_id").val(courseDetails.course_id);
      $("#courseImage").val(courseDetails.course_image);
      //trigger change is important here
      $("#courseCategory").val(courseDetails.course_category).trigger("change");
      $("#courseLevel").val(courseDetails.course_level).trigger("change");
      $("#courseFees").val(courseDetails.course_price);
      //  $("#courseFees").val(courseDetails.course_price);
    },
  });
}
