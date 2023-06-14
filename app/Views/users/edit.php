<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="post" action="<?= site_url('users/update/'.$user['id']); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?= $user['name']; ?>">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $user['email']; ?>">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
