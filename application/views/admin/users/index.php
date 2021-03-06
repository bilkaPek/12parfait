<a href="<?= site_url('onarie') ?>" class="btn btn-sm btn-outline-primary m-b-1"><?= $this->lang->line('back_to_site_admin');?></a><br/>
<div class="overflow">
    <table class="table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th></th>
                <th><?= $this->lang->line('first_name') ?></th>
                <th><?= $this->lang->line('last_name') ?></th>
                <th><?= $this->lang->line('rand_userid') ?></th>
                <th><?= $this->lang->line('user_name') ?></th>
                <th><?= $this->lang->line('email') ?></th>
                <th><?= $this->lang->line('language') ?></th>
                <th><?= $this->lang->line('add_date') ?></th>
                <th><?= $this->lang->line('last_connection') ?></th>
                <th><?= $this->lang->line('score') ?></th>
                <th><?= $this->lang->line('acl') ?></th>
                <th><?= $this->lang->line('is_active') ?></th>
                <th><?= $this->lang->line('activate_deactivate') ?></th>
                <th><?= $this->lang->line('promote_demote') ?></th>
                <!-- <th></th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $num => $user) : ?>
            <tr>
                <td><?= $user->user_id ?></td>
                <td><?= $user->first_name ?></td>
                <td><?= $user->last_name ?></td>
                <td><?= $user->rand_userid ?></td>
                <td><?= $user->user_name ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->language ?></td>
                <td><?= $user->formated_add_date ?></td>
                <td><?= $user->formated_last_connection ?></td>
                <td><?= $user->score ?></td>
                <td><?= $user->acl ?></td>
                <td><?= $user->active ?></td>
                <td>
                    <?php if ($user->user_id !== $this->session->user->user_id) : ?>
                        <?php if ($user->active === $this->lang->line('yes')) : ?>
                            <a class="btn btn-sm btn-primary" href="<?= site_url('onarie/users/deactivate/'.$user->user_id) ?>"><?= $this->lang->line('deactivate_user') ?></a>
                        <?php else : ?>
                            <a class="btn btn-sm btn-outline-primary" href="<?= site_url('onarie/users/activate/'.$user->user_id) ?>"><?= $this->lang->line('activate_user') ?></a>
                        <?php endif; ?>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if ($user->user_id !== $this->session->user->user_id) : ?>
                        <?php if ($user->acl === 'user' || $user->acl === 'beta') : ?>
                            <a class="btn btn-sm btn-primary" href="<?= site_url('onarie/users/promote/'.$user->user_id) ?>"><?= $this->lang->line('promote_user') ?></a>
                        <?php endif; ?>
                        <?php if ($user->acl === 'moderator' || $user->acl === 'beta') : ?>
                            <a class="btn btn-sm btn-outline-primary" href="<?= site_url('onarie/users/demote/'.$user->user_id) ?>"><?= $this->lang->line('demote_user') ?></a>
                        <?php endif; ?>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>