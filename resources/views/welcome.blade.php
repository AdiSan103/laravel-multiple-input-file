<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body class="container">
        <!-- resources/views/multiple-file-upload.blade.php -->
        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column border p-5 rounded" style="max-width: 500px;margin:50px auto;">
            @csrf
            <h5  class="mb-4">Fitur Multi Upload</h5>
                <!-- First File Input Field -->
                <div class="mb-3 d-flex flex-column">
                    <label for="formFile" class="form-label">Tambah Input</label>
                    <button id="addFileInput" class="btn btn-primary" style="max-width: 40px;" type="button">+</button>
                </div>
                <!-- class:more-input -->
                <p>List Input Anda</p>
                <div class="more-input border shadow p-3 rounded mb-5">
                </div>
            <!-- Submit Button -->
            <button class="btn btn-primary" type="submit">Add File</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                
                // const addFileInputButton = 
                // console.log(addFileInputButton);
                // console.log('------------------');
                const moreInputContainer = document.querySelector(".more-input");

                document.querySelectorAll("#addFileInput").forEach(element => {
                    element.addEventListener("click", function () {
                    // Create a new file input field
                    const newFileInput = document.createElement("div");
                    newFileInput.classList.add("mb-3");

                    const label = document.createElement("label");
                    label.setAttribute("for", "formFile");
                    label.classList.add("form-label");
                    label.textContent = "File Input";

                    const input = document.createElement("input");
                    input.classList.add("form-control");
                    input.type = "file";
                    // input.setAttribute("id", "addFileInput");
                    input.setAttribute("name", "file[]");

                    newFileInput.appendChild(label);
                    newFileInput.appendChild(input);

                    // Append the new file input field to the container
                    moreInputContainer.appendChild(newFileInput);
                });
                });
            });
        </script>

    </body>
</html>