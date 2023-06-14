<h1>Daftar Permissions</h1>

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
    <?php foreach ($permissions as $permission) : ?>
      <tr>
        <td><?= $permission['id']; ?></td>
        <td><?= $permission['name']; ?></td>
        <td><?= $permission['created_at']; ?></td>
        <td><?= $permission['updated_at']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
