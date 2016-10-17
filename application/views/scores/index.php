<table class="table-striped table-bordered table-hover score-table">
    <thead>
        <tr>
            <th></th>
            <th><?= $this->lang->line('user_name') ?></th>
            <th><?= $this->lang->line('score') ?></th>
            <?php if (isset($scores_12)) : ?>
            <th><?= $this->lang->line('nb_12parfait') ?></th>
            <?php endif; ?>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $rank = 1;
        $current_score = '';
        foreach ($user_scores as $user_id => $score) :
        ?>
        <tr data-href="<?= site_url('scores/'.$user_id) ?>">
            <?php
            // On n'affiche le rang que s'il est différent du précédent
            if ($score !== $current_score) :
                $current_score = $score;
            ?>
                <td class="text-xs-center"><?= $rank ?></td>
            <?php else : ?>
                <td></td>
            <?php endif; ?>
            <td><?= $users[$user_id] ?></td>
            <td><?= $score ?></td>
            <?php if (isset($scores_12)) : ?>
            <td><?= $scores_12 ?></td>
            <?php endif; ?>
            <td><a class="btn btn-sm btn-outline-primary" href="<?= site_url('scores/'.$user_id) ?>"><?= $this->lang->line('view') ?></a></td>
        </tr>
        <?php
            ++$rank;
        endforeach;
        ?>
    </tbody>
</table>