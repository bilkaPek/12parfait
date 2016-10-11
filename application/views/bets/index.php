<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?php echo $this->session->flashdata('success') ?>
    </div>
<?php endif ?>
<table class="table-striped table-bordered table-hover table-bets">
    <thead>
        <th><?php echo $this->lang->line('championship_name') ?></th>
        <th><?php echo $this->lang->line('fixture_name') ?></th>
        <th></th>
    </thead>
    <?php
    $championship_name = '';
    foreach ($fixtures as $num => $fixture) :
    ?>
    <tr>
        <td>
        <?php
        // Lisibilité pour ne pas répéter le nom du championnat sur chaque ligne
        if ($championship_name!==$fixture->championship_name) {
            echo $fixture->championship_name;
            $championship_name = $fixture->championship_name;
        }
        ?>
        </td>
        <td><?php echo $fixture->fixture_name ?></td>
        <td>
            <?php if ($fixture->status === 'open') : ?>
            <a class="btn btn-sm btn-primary" href="<?php echo site_url('bets/edit/'.$fixture->fixture_id) ?>"><?php echo $this->lang->line('add_edit_bet') ?></a>
            <?php else : ?>
            <a class="btn btn-sm btn-outline-primary" href="<?php echo site_url('bets/edit/'.$fixture->fixture_id) ?>"><?php echo $this->lang->line('results') ?></a>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>