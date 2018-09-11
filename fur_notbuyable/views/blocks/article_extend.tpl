[{$smarty.block.parent}]
<tr>
    <td class="edittext" width="120">
        Nicht kaufbar, Störer
    </td>
    <td class="edittext"
          <input class="edittext" type="hidden" name="editval[oxarticles__furnotbuyable]" value='0'>
          <input class="edittext" type="checkbox" name="editval[oxarticles__furnotbuyable]" value='1' [{if $edit->oxarticles__furnotbuyable->value == 1}]checked[{/if}] [{ $readonly }]>
    </td>
</tr>
