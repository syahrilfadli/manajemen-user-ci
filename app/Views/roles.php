<h1>Daftar Roles</h1>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Created At</th>
      <th>Updated At</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($roles as $role) : ?>
      <tr>
        <td><?= $role['id']; ?></td>
        <td><?= $role['name']; ?></td>
        <td><?= $role['created_at']; ?></td>
        <td><?= $role['updated_at']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
