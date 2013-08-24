<table class="default">
    <caption>Caption</caption>
    <colgroup>
        <col width="32px">
        <col width="20%">
        <col>
        <col width="20%">
    </colgroup>
    <thead>
        <tr>
            <th>#1</th>
            <th>Header #2</th>
            <th>Header #3</th>
            <th>Header #4</th>
        </tr>
    </thead>
    <tbody class="toggleable">
        <tr>
            <th>
                <a href="#" class="toggle-switch" onclick="$(this).closest('tbody').toggleClass('toggled'); return false;">
                    Inhalt verstecken
                </a>
            </th>
            <th colspan="3">Content Header #1</th>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="foo[]">
            </td>
            <td>Content Row #2-2</td>
            <td>Content Row #2-3</td>
            <td class="actions">
                <?= Assets::img('icons/16/blue/edit') ?>
                <?= Assets::img('icons/16/blue/trash') ?>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="foo[]">
            </td>
            <td>Content Row #2</td>
            <td>Content Row #3</td>
            <td class="actions">
                <?= Assets::img('icons/16/blue/edit') ?>
                <?= Assets::img('icons/16/blue/trash') ?>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="foo[]">
            </td>
            <td>Content Row #2</td>
            <td>Content Row #3</td>
            <td class="actions">
                <?= Assets::img('icons/16/blue/edit') ?>
                <?= Assets::img('icons/16/blue/trash') ?>
            </td>
        </tr>
    </tbody>
    <tbody class="toggleable">
        <tr>
            <th>
                <a href="#" class="toggle-switch" onclick="$(this).closest('tbody').toggleClass('toggled'); return false;">
                    Inhalt verstecken
                </a>
            </th>
            <th colspan="3">Content Header #2</th>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="foo[]">
            </td>
            <td>Content Row #2-2</td>
            <td>Content Row #2-3</td>
            <td class="actions">
                <?= Assets::img('icons/16/blue/edit') ?>
                <?= Assets::img('icons/16/blue/trash') ?>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="foo[]">
            </td>
            <td>Content Row #2</td>
            <td>Content Row #3</td>
            <td class="actions">
                <?= Assets::img('icons/16/blue/edit') ?>
                <?= Assets::img('icons/16/blue/trash') ?>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="foo[]">
            </td>
            <td>Content Row #2</td>
            <td>Content Row #3</td>
            <td class="actions">
                <?= Assets::img('icons/16/blue/edit') ?>
                <?= Assets::img('icons/16/blue/trash') ?>
            </td>
        </tr>
    </tbody>
    <tbody class="toggleable">
        <tr>
            <th>
                <a href="#" class="toggle-switch" onclick="$(this).closest('tbody').toggleClass('toggled'); return false;">
                    Inhalt verstecken
                </a>
            </th>
            <th colspan="3">Content Header #3</th>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="foo[]">
            </td>
            <td>Content Row #2-2</td>
            <td>Content Row #2-3</td>
            <td class="actions">
                <?= Assets::img('icons/16/blue/edit') ?>
                <?= Assets::img('icons/16/blue/trash') ?>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="foo[]">
            </td>
            <td>Content Row #2</td>
            <td>Content Row #3</td>
            <td class="actions">
                <?= Assets::img('icons/16/blue/edit') ?>
                <?= Assets::img('icons/16/blue/trash') ?>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="foo[]">
            </td>
            <td>Content Row #2</td>
            <td>Content Row #3</td>
            <td class="actions">
                <?= Assets::img('icons/16/blue/edit') ?>
                <?= Assets::img('icons/16/blue/trash') ?>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4">
                <span class="actions">
                  Seite 1 | 2 | ... | 10
                </span>
              
                <input type="checkbox" data-proxyfor="tbody :checkbox">
                Alle auswählen
                
                <select>
                    <option>Aktion...</option>
                </select>
            </td>
        </tr>
    </tfoot>
</table>