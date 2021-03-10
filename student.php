<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Application</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Rajagiri College</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="response.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="student.php">Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="employee.php">Employee</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    <table class="table">
        <tr>
            <td>Name</td>
            <td><input class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>Rollno</td>
            <td><input class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>Admno</td>
            <td><input class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>College</td>
            <td><input class="form-control" type="text"></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-danger">SUBMIT</button></td>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>