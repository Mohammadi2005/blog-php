<?php
//
//?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>writer panel</title>
</head>
<body>
    <div class="container w-50">
        <h2 class="display-4 mt-5 text-center">write post</h2>
        <form class="mt-5">
            <div class="mb-3 form-group">
                <input type="text" class="form-control" id="title" name="title" placeholder="title">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="file" class="form-control" id="image">
            </div>

            <div class="mb-3 form-group">
                <label class="form-label" for="body">body</label>
                <textarea id="body" name="body" class="form-control" rows="3">

                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>

