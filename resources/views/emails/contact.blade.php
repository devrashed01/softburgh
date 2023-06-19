<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <h2>Hey, It's me {{ $inquiry->name }}</h2>
        <p>Query details:</p>
        <table class="table table-borderless">
            <thead>

            </thead>
            <tbody>
                <tr>
                    <td>Name</td>
                    <td>{{ $inquiry->name }}</td>
                </tr>
                <tr>
                    <td>Business Email</td>
                    <td>{{ $inquiry->business_email }}</td>
                </tr>
                <tr>
                    <td>Budget</td>
                    <td>{{ $inquiry->budget }}</td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td>{{ $inquiry->message }}</td>
                </tr>
            </tbody>
        </table>
        <p>Thank You.</p>
    </div>
</body>

</html>
