<form method="POST" action="update-status.php">
    <input type="hidden" name="id" value="1">

    <select name="status" required>
        <option value="New">New</option>
        <option value="Contacted">Contacted</option>
        <option value="Qualified">Qualified</option>
        <option value="Lost">Lost</option>
    </select>

    <button type="submit">Update Status</button>

</form>