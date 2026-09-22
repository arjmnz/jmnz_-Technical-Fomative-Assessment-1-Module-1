<section>
    <p class="eyebrow">Accounts</p>
    <h1>Customer Accounts</h1>
    <p>These records come from a static PHP array in <code>Customers.php</code>.</p>

    <table>
        <thead><tr><th>Full Name</th><th>Email</th><th>Phone</th></tr></thead>
        <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>
