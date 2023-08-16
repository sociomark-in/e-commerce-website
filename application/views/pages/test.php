<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?= form_open_multipart('Pages/do_upload') ?>
        <div class="mb-3">
            <input type="file" name="userfile[]" class="form-control" id="exampleFile" multiple>
            <select name="height" class="form-control">
                <option value="">Original Size</option>
                <option value="16">Inline (16px)</option>
                <option value="32">Icon (32px)</option>
                <option value="50">Thumbnail (50px)</option>
                <option value="100">Small logo (100px)</option>
                <option value="160">Logo (160px)</option>
                <option value="240">Product thumbnail (240px)</option>
                <option value="480">Product image (480px)</option>
                <option value="600">Banner image (600px)</option>
                <option value="1024">Wallpaper (1024px)</option>
                <option value="2048">Wallpaper (2048px)</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>