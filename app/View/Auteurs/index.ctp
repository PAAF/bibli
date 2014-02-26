<h1>Nom des auteurs</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
    </tr>

    <?php foreach ($auteurs as $auteurs): ?>
    <tr>
        <td><?php echo $auteurs['Auteur']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($auteurs['Auteur']['nom'],
            array('controller' => 'auteurs', 'action' => 'view', $auteurs['Auteur']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($auteurs); ?>
</table>