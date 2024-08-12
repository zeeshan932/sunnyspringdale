<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Student> $students
 */
?>
<div class="students index content">
    <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Students') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('student_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('section') ?></th>
                    <th><?= $this->Paginator->sort('mother_name') ?></th>
                    <th><?= $this->Paginator->sort('admission_year') ?></th>
                    <th><?= $this->Paginator->sort('pass_year') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= $this->Number->format($student->student_id) ?></td>
                    <td><?= h($student->name) ?></td>
                    <td><?= h($student->section) ?></td>
                    <td><?= h($student->mother_name) ?></td>
                    <td><?= h($student->admission_year) ?></td>
                    <td><?= h($student->pass_year) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $student->student_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->student_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->student_id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->student_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
