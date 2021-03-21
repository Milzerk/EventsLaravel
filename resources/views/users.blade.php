<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-3">
        <table>
            <tr>
                <th class="px-4">Id</th>
                <th class="px-4">Nome</th>
                <th class="px-4">Email</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td class="px-4">{{ $user->id }}</td>
                <td class="px-4">{{ $user->name }}</td>
                <td class="px-4">{{ $user->email }}</td>
            </tr>
            @endforeach
        </table>
        <div class="my-3">
            {{ $users->links() }}
        </div>
    </div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>