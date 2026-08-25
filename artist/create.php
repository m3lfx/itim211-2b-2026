<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
    </script>
    <title>Create Artist</title>
</head>

<body>
    <form action="store.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Artist Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter name" name="artist_name">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Country</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="country" name="country">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Upload Image</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>