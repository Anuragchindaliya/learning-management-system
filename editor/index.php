<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/style.css" />

    <title>Your EDITOR</title>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="editor">
          <div class="bg-purple">
            <a href="../"><b class="text-white p-2" >HTML EDITOR</b></a>
            <input
              type="text"
              id="filename"
              class="small"
              placeholder="File Name"
              value="index.html"
            />
            <button
              class="btn text-white btn-sm"
              type="button"
              id="download-btn"
            >
              Download
            </button>

            <!-- Button trigger modal -->
            <button
              type="button"
              id="saveBtn"
              class="btn btn-outline-secondary text-white btn-sm"
              data-toggle="modal"
              data-target="#exampleModal"
            >
              Save
            </button>
            <select onchange="populateEditor()" id="allProject"></select>
          </div>

          <div
            class="h-95 w-100 p-2"
            id="code"
            contenteditable="true"
            onkeyup="showpreview()"
          ></div>
        </div>
        <!-- <div class="bar"></div> -->
        <div class="output">
          <div class="bg-purple">
            <b class="text-white p-2">OUTPUT</b>
          </div>

          <iframe id="preview" class="w-100"> </iframe>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Project</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <input
                id="projectName"
                type="text"
                class="form-control"
                placeholder="Project Name"
              />
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary" id="saveProject">
              Save changes
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <!-- #################  ACE.JS LIBRARAY FOR HIGHLIGHT CODE  -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"
      integrity="sha512-GZ1RIgZaSc8rnco/8CXfRdCpDxRCphenIiZ2ztLy3XQfCbQUSCuk8IudvNHxkRA3oUg6q0qejgN/qqyG1duv5Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="./js/filesave.js"></script>

    <script>
      $(document).ready(function () {
        var selecthtml = `<option>your project</option>`;
        for (var i = 0; i < localStorage.length; i++) {
          selecthtml += "<option>" + localStorage.key(i) + "</option>";
        }
        var all = $("#allProject").html(selecthtml);

        $("#exampleModal").on("shown.bs.modal", function () {
          $("#projectName").focus();
        });
        $("#saveProject").on("click", function () {
          var projectName = $("#projectName").val();
          console.log(projectName);
          if (projectName.trim() == "" || projectName == null) {
            alert("project Name can not be blank");
            $("#projectName").focus();
            return;
          }

          var code = $("#code").text();
          console.log(code);
          localStorage.setItem(projectName, JSON.stringify(code));
          alert("Project saved successfully");
        });
      });

      function populateEditor() {
        var projectName = $("#allProject").val();
        console.log(projectName);
        var data = localStorage.getItem(projectName);
        console.log(data);
        $("#code").text(JSON.parse(data));
        showpreview();
      }

      window.addEventListener("keydown", (e) => {
        if (
          (event.ctrlKey || event.metaKey) &&
          (e.key == "s" || e.key == "S")
        ) {
          // var filename = prompt("Enter file name");
          // var a = document.createElement("a");
          // a.href="data:applicaion/octet-stream,"+encodeURIComponent("<html>"+document.querySelector("#code").innerText+"</html>");
          // a.download =filename;
          // a.click();
          fileDownload(e);
        }
      });
      function fileDownload(e) {
        e.preventDefault();
        var text = document.getElementById("code").innerText;
        var filename = document.getElementById("filename").value;

        var blob = new Blob([text], {
          type: "text/plain;charset-utf-8",
        });

        saveAs(blob, filename);
      }
      document
        .getElementById("download-btn")
        .addEventListener("click", fileDownload, false);

      function showpreview() {
        var code = document.querySelector("#code").innerText;
        document.querySelector("#preview").src =
          "data:text/html;charset=UTF-8," + code;
        // console.log(code);
      }
    </script>
  </body>
</html>
