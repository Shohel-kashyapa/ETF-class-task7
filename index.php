<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <title>$student Records</title>
    <script>
        $(document).ready(function() {
            $("#form").submit(function(e){
                e.preventDefault()
                var sid = document.getElementById("sid").value
                

                $.ajax({
                    type: 'GET',
                    url: 'server.php',
                    data: {
                        sid: sid
                    },
                    cache: false,
                    success: function(response) {
                        if(response == 0) {
                            alert("Student not found")
                        } else {
                            var $studentDetails = JSON.parse(response)
                            $("#form").css("display", "none")
                            $("#student-details").css("display", "flex")
                            $("#student-sid").append($studentDetails.sid)
                            $("#student-name").append($studentDetails.name)
                            $("#student-age").append($studentDetails.age)
                            $("#student-address").append($studentDetails.address)
                            $("#student-cgpa").append($studentDetails.cgpa)
                            
                        }
                    },
                    error: function(jqXhr, textStatus, errorMessage) {
                        console.log(errorMessage)
                    }
                })
            })
        })
    </script>

</head>
<body>
    <main>
        <form id="form">
           <input type="text" id="sid" placeholder="Enter the sid">
           <button>Find students</button>
        </form>
        <form id="student-details" style="display: none;">
                <p id="student-sid">SID: </p>
                <p id="student-name">Name: </p>
                <p id="student-age">Age: </p>
                <p id="student-address">Address: </p>
                <p id="student-cgpa">CGPA: </p>
                <button>Return to Search</button>
        </form>
  
    </main>
</body>
</html>