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
                console.log(sid)

                $.ajax({
                    type
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
        <form style="display: none;">
            <p>SID: </p>
            <p>Name: </p>
            <p>Age: </p>
            <p>Address: </p>
            <p>CGPA: </p>
            <button>Return to Search</button>
        </form>
    </main>
</body>
</html>