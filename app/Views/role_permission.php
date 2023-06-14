<h1>Daftar Role Permission</h1>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Role ID</th>
      <th>Permission ID</th>
      <th>Created At</th>
      <th>Updated At</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rolePermissions as $rolePermission) : ?>
      <tr>
        <td><?= $rolePermission['id']; ?></td>
        <td><?= $rolePermission['role_id']; ?></td>
        <td><?= $rolePermission['permission_id']; ?></td>
        <td><?= $rolePermission['created_at']; ?></td>
        <td><?= $rolePermission['updated_at']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
